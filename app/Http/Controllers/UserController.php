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

        return view('user.channel', array(
            'user' => $user,
            'videos' => $videos
        ));
    }
}
