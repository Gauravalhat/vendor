<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extendes Controller
{
    @return

    public function index(){
        return view('insert');
    }
}
public fuction store(post $post)
{
    $post=new Post;
    $post->post_title=$request->get('title');
    $post->post_author=$request->get('author');
    $post->save();

    echo"<h1> data send successfully....</h1>;
    
}

public function show(post $post)
{
   $posts=post::all();
   return view('show',['post'=>$posts]);
}

public function edit(Post $post,$id)
{
    $posts=post::find($id);
    return view('edit',['posts'=>$posts]); 
}

public function update(Request $request, Post $Post,$id)
{
  $posts=post::finf($id);
  $posts->post_title=$request->get('title');
  $posts->post_author=$request->get('author');

  $posts->save();

  return redirect('show');

}


public function destroy(post $post,$id)
{
  $post::find($id);
  $post->delete();
  return redirect('show');
}