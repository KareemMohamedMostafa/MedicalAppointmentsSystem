<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validate = $this->validate($request, array(
            'body' => 'required'
        ));

        $comment = new Comment();
        $user = \Auth::user();

        $comment->user_id = $user->id;
        $comment->video_id = $request->input('video_id');
        $comment->body = $request->input('body');

        $comment->save();

        return redirect()->route('detailVideo', ['id' => $comment->video_id])->with(array('message' => 'Comentario añadido correctamente'));
    }

    public function delete(int $id)
    {
        $user = \Auth::user();
        $comment = Comment::find($id);

        if ($user && ($comment->user_id == $user->id || $comment->video->user_id == $user->id)) {
            $comment->delete();
        }

        return redirect()->route('detailVideo', ['id' => $comment->video_id])->with(array('message' => 'Comentario eliminado correctamente'));
    }
}
