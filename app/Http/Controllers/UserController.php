<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\User;

use App\Video;

use App\Comment;

class UserController extends Controller
{
    public function channel(int $id)
    {
        $user = User::find($id);

        if (!is_object($user)) return redirect()->route('home');

        $videos = Video::where('user_id', $id)->paginate(5);

        return view('user.channel', array('user' => $user, 'videos' => $videos));
    }

    public function index()
    {

        $result = User::orderBy('name', 'asc')->paginate(10000);

        $roles = array('admin', 'user', 'visitor');

        return view('user.list', array('results' => $result, 'roles' => $roles));
    }

    public function view(int $id)
    {

        $user = User::find($id);

        if (isset($user) && $user->id > 0) {

            $data = $user;

            $data['formatedcreated_at'] = \FormatTime::LongTimeFilter($user->created_at);
            $data['formatedupdated_at'] = \FormatTime::LongTimeFilter($user->updated_at);
            $data['image'] = url('/getImage/' . $user->image);
            $data['username'] = $user->user->name;
            $data['usermodifiedname'] = $user->usermodified->name;

            return $data;
        }

        return array('message' => 'No data');
    }

    public function save(Request $request)
    {

        $validate = $this->validate($request, [
            'name' => 'required',
            'role' => 'required'
        ]);

        $authUser = \Auth::user();

        if (isset($request->id) && $request->id > 0) {

            $obj = User::findOrFail($request->id);
        } else {
            $obj = new User();
            $obj->createdBy = $authUser->id;
        }

        $obj->modifiedby = $authUser->id;
        $obj->name = $request->input('name');
        $obj->role = $request->input('role');

        $image = $request->file('image');
        if ($image) {
            $obj->image = $request->input('image');
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->delete($obj->image);
            \Storage::disk('images')->put($image_path, \File::get($image));

            $obj->image = $image_path;
        }

        $obj->id ? $obj->update() : $obj->save();

        return redirect()->route('users')->with(array('message' => 'Successfully saved'));
    }
}
