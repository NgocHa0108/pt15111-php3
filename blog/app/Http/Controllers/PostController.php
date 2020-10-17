<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('activeLoginUser');
         // $this->middleware('adminlogin');
         //  $this->middleware('userlogin')->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::all();
       //lay ra het
        return view('layout.admin_post',
         ['postList' => $posts],



     );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $students = Student::all();
        return view('posts.add_post', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {

        // $request->validate([
        //   'desc'=>'max:255',
        //   'content' =>'required|max:1000',  

        // ]);
        $post = new Post;

        if($request->hasFile('image_url')){
            $originalFileName = $request->image_url->getClientOriginalName();
            //format lai ten file
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);

            //xu ly config
           $path =  $request->file('image_url')->storeAs('posts', $fileName);
           //gan duong dan vao thuoc tinh image_url cua post
           $post->image_url = $path;
        }
        $post->fill($request->all());
        $post->save();
        return redirect()->route('postss.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
