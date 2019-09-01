<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

use Session;
use Purifier;
use Image;
use Storage;


class PostController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('posts.create')->withCategories($categories)->withUsers($users);
    }

    public function store(Request $request)
    {
         $this->validate($request, array(
                'title'         => 'required|max:255',
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id'   => 'required|integer',
                'featured_img'  => 'sometimes|image',
                'body'          => 'required'
            ));

          //store the data
            $post = new Post;

            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->category_id = $request->category_id;
            $post->user_id = $request->user_id;
            // $post->body = Purifier::clean($request->body);
            $post->body = $request->body;

            if ($request->hasFile('featured_img')) {
                $image = $request->file('featured_img');
                $filename = md5(time()) . "." . $image->getClientOriginalExtension();
                $location = public_path().'/storage/featured_img/'. $filename;
                // Image::make($image)->resize(800,400, function($constraint){
                Image::make($image)->resize(1600,800, function($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($location);

                $post->featured_img = $filename;
            }

            $post->save();

            // $post->tags()->sync($request->tags, false);

            Session::flash('success', 'The post was successfully saved!');

            //redirect
            return redirect()->route('posts.show', $post->id);



    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');

        return view('posts.edit')->withPost($post)->withCategories($categories)->withUsers($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           //validate the data

        // dd($request->body);
        $post = Post::find($id);

        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => "required|alpha_dash|min:5|max:255|unique:posts,slug, $id",
            'category_id' => 'required|integer',
            'featured_img' => 'image',
            'body' => 'required'
        ));



        //find the post

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->user_id = $request->input('user_id');
        // $post->body = Purifier::clean($request->input('body'));
        $post->body = $request->input('body');


        if ($request->hasFile('featured_img')) {
            $path = $request->file('featured_img')->store('public/featured_img');
            $filename = basename($path);

            // $image = $request->file('featured_img');
            // $filename = time() . "." . $image->getClientOriginalExtension();
            // $location = public_path().'/img/'. $filename;
            // Image::make($image)->resize(800,400, function($constraint){
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // })->save($location);

            // $oldFilePath = public_path().'/img/'.$post->featured_img;


            $post->featured_img = $filename;


            // Storage::delete($oldFilePath);

        }


        //update the post
        $post->save();


        Session::flash('success', 'This post was successfully saved.');

        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              //
        $post = Post::find($id);
        // $post->tags()->detach();

        // $featured_img_path = storage_path().'/img/'.$post->featured_img;

        // dd('public/featured_img/'.$post->featured_img);

        Storage::delete('public/featured_img/'.$post->featured_img);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.index');
    }


}
