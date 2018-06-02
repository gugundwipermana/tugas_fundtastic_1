<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    //
	private $post;

	public function __construct(Post $post) {
		$this->post = $post;
	}

    public function index() {
    	$posts = Auth::user()->posts()->get();

    	return response()->json(['data' => $posts], 200, [], JSON_NUMERIC_CHECK);
    }

    public function store(Request $request) {
    	$this->validate($request, [
    		'title'		=> 'required',
    		'body'		=> 'required'
    	]);

    	$user = Post::create([
    		'user_id'	=> Auth::user()->id,
    		'title'		=> request('title'),
    		'body'		=> request('body')
    	]);

    	return response()->json(["message" => "Add success"]);
    }

    public function update(Request $request, $id) {

    	$post = Post::findOrFail($id);

	    $this->validate($request, [
    		'title'		=> 'required',
    		'body'		=> 'required'
    	]);

	    $input = $request->all();
	    $post->fill($input)->save();

    	// print_r($request->all());

    	return response()->json(["message" => "Update success"]);
    }


    public function destroy($id)
	{
	    $post = Post::findOrFail($id);

	    $post->delete();

	    return response()->json(["message" => "Delete success"]);
	}
}
