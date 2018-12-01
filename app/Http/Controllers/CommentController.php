<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CommentRequest;
use Auth;
use App\Comment;
use App\Post;
use App\Http\Requests\PostRequest;
class CommentController extends Controller
{
   public function store(CommentRequest $request){
    //  $this->validate($request, array(
    //    'name'=>'required|max:225',
    //    'email'=>'required|email|max:50',
    //    'comment'=>'required|min:5|max:5000',
    //    'post_id'=>'required|max:225',

    //  ));
    // dd($request->all());
     $comment = new Comment;
     $comment ->name =  $request->name;
     $comment->email = $request->email;
     $comment->comment= $request->comment;
     $comment->post_id=$request->post_id;
     $comment->save();
     return redirect()->back()->with('status', 'You have Successfully Uploaded Your Comment');
   }

}
