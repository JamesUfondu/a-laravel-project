<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Socialite;
class StandardController extends Controller
{
  public function create(){
    return view ('post.create');
  }
  public function store(PostRequest $request)
  {
    $id=Auth::user()->id;
    $post=new Post([
      'title' => $request->title,
      'content'=>$request->content,
      'user_id'=>$id
    ]);
    $post->save();
    return redirect()->back ();
  }
  public function view()
  {
    $post=post::all();
    return view('post.view_blog',compact('post'));
  }
  public function title()
  {
    $posts=Post::all();
    return view('post.title',compact('posts'));
  }
  public function detail($id)
  {
    $post=Post::whereId($id)->first();
    return view('post.details',compact('post'));
  }
  // code for the update method I.E via the CRUD method
  // Code for the edit blade
  public function edit($id)
      {
          $post = Post::find($id);

          return view('post.edit', compact('post'));
      }

      //Main update code

      // code for the update method I.E via the CRUD method
      public function update(PostRequest $request, $id)
  {
      $post = Post::whereId($id)->first();
      $post->title=$request->title;
      $post->content=$request->content;
      $post->save();

      return redirect('/post/view_blog')->with('success', 'Information updated Successfully');

  }
  public function delete($id)
  {
       $post = Post::find($id);
       $post->delete();

       return redirect('/post/view_blog')->with('success', 'Stock has been deleted Successfully');
  }

//for viewing my index blade which has its function in Blog controller
public function index()
  {
    $post=post::all();
    return view('pages/index');
  }
  public function uploadprofile(Request $request){
    $this->validate($request, [
    'profile_picture'=> 'required|mimes:jpg,png,gif,svg,psd|max:2048'
    ]);
    // code for displaying name and extension of file
    $filename = $request->file('profile_picture')->getClientOriginalName();
    // code for displaying name of file only
    $ext = pathinfo($filename, PATHINFO_FILENAME);
    // code for displaying extension of file only
    $extension = $request->file('profile_picture')->getClientOriginalExtension();
    // code for storing the file properly
    $tostore = $ext . " _ " . time() . "." . $extension;
    // code for saving the file
    $request->file('profile_picture')->storeAs('public/upload', $tostore);
    $id = Auth::user()->id;
    $user = User::whereId($id)->first();
    $user->profile_picture=$tostore;
    if($user->save()){
      return redirect()->back()->with('status', 'successfully uploaded');
    }else{
      return redirect()->back()->with('status', 'operation failed');
    }
    
  }
}