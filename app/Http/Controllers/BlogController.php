<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Share;

class BlogController extends Controller
{
    public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->paginate(10);
		$first_post = Post::orderBy('created_at', 'desc')->first();
		$first_key = $posts->keys()->first();
		$posts = $posts->forget($first_key);


		return view('blog.blog')->withPosts($posts)->withFirstPost($first_post);
	}

    public function getSingle($slug){
    	$post = Post::where('slug', '=', $slug)->first();
		$posturl = url("blog/$slug");
		$sharelinks = Share::load($posturl, $post->title)->services('facebook','twitter','email','linkedin');

		//post recommd

		$postRecomms = Post::where('slug', '!=', $slug)->paginate(10);
		
    	return view('blog.single')->withPost($post)->withSharelinks($sharelinks)->withPostRecomms($postRecomms);

    }
}
