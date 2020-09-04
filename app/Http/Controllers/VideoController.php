<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Video;
use App\Comment;

class VideoController extends Controller
{
    public function createVideo()
    {
        return view('video.createVideo');
    }

    public function saveVideo(Request $request)
    {
        $validate = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video' => 'mimes:mp4'

        ]);

        $video = new Video();
        $user = \Auth::user();
        $video->user_id = $user->id;
        $video->title = $request->input('title');
        $video->description = $request->input('description');

        // subir imagen
        $image = $request->file('image');
        if ($image) {
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));

            $video->image = $image_path;
        }

        // subir video
        $video_file = $request->file('video');
        if ($video_file) {
            $video_path = time() . $video_file->getClientOriginalName();
            \Storage::disk('videos')->put($video_path, \File::get($video_file));
            $video->video_path = $video_path;
        }

        $video->save();

        return redirect()->route('home')->with(array('message' => 'Cargado exitosamente!!'));
    }

    public function getImage(string $filename)
    {
        return new Response(Storage::disk('images')->get($filename), 200);
    }

    public function getVideoDetail(int $id)
    {
        return view('video.detail', array('video' => Video::find($id)));
    }

    public function getVideo(string $filename)
    {
        return new Response(Storage::disk('videos')->get($filename), 200);
    }

    public function delete(int $id)
    {
        $user = \Auth::user();
        $video = Video::find($id);
        $comments = Comment::where('video_id', $id)->get();

        if ($user && $video->user_id = $user->id) {

            if ($comments && count($comments) > 0) foreach ($comments as $comment) $comment->delete();

            Storage::disk('images')->delete($video->image);

            Storage::disk('videos')->delete($video->video_path);

            $video->delete();

            $message = array('message' => 'Video eliminado correctamente');
        } else $message = array('message' => 'El Video No ha sido eliminado');

        return redirect()->route('home')->with($message);
    }

    public function edit(int $id)
    {
        $user = \Auth::user();
        $video = Video::findOrFail($id);

        if ($user && $video->user_id = $user->id) return view('video.edit', array('video' => $video));
        else return redirect()->route('home');
    }

    public function update(int $id, Request $request)
    {
        $validate = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video' => 'mimes:mp4'
        ]);

        $user = \Auth::user();
        $video = Video::findOrFail($id);
        $video->user_id = $user->id;
        $video->title = $request->input('title');
        $video->description = $request->input('description');



        // subir imagen
        $image = $request->file('image');
        if ($image) {
            Storage::disk('images')->delete($video->image);
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));

            $video->image = $image_path;
        }

        // subir video
        $video_file = $request->file('video');
        if ($video_file) {
            Storage::disk('videos')->delete($video->video_path);
            $video_path = time() . $video_file->getClientOriginalName();
            \Storage::disk('videos')->put($video_path, \File::get($video_file));
            $video->video_path = $video_path;
        }

        $video->update();

        return redirect()->route('home')->with(array('message' => 'Cargado exitosamente!!'));
    }

    public function search($search = null, $filter = null)
    {

        if (is_null($search)) {
            $search = \Request::get('search');

            if (is_null($search)) return redirect()->route('home');

            return redirect()->route('videoSearch', array('search' => $search));
        }

        if (is_null($filter) && \Request::get('filter') && !is_null($search)) {

            $filter = \Request::get('filter');
            return redirect()->route('videoSearch', array('search' => $search, 'filter' => $filter));
        }

        $column = 'id';
        $order = 'desc';

        if (!is_null($filter)) {

            if ($filter == 'new') {
                $column = 'id';
                $order = 'desc';
            }
            if ($filter == 'old') {
                $column = 'id';
                $order = 'asc';
            }
            if ($filter == 'alfa') {
                $column = 'title';
                $order = 'asc';
            }
        }

        $videos = Video::where('title', 'LIKE', '%' . $search . '%')->orderBy($column, $order)->paginate(5);


        return view('video.search', array(
            'videos' => $videos,
            'search' => $search
        ));
    }
}
