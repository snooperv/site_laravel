<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class FilterController extends Controller
{
    public function my()
    {
        $posts = Post::select('posts.*', 'users.name as author')
            ->join('users', 'posts.author_id', '=', 'users.id')
            ->Where('users.id', 'like', '%' . Auth::id() . '%')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(6);
        return view('filters.filter', compact('posts'));
    }

    public function users()
    {
        $users = User::paginate(42);
        return view('filters.users', compact('users'));
    }

    public function userPosts($id, $name)
    {
        $posts = Post::select('posts.*', 'users.name as author')
            ->join('users', 'posts.author_id', '=', 'users.id')
            ->Where('users.id', 'like', '%' . $id . '%')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(6);
        return view('filters.userposts', compact('posts'), compact('name'));
    }
}
