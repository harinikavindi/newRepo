<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
//use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;


use App\BlogPost;
use App\AgeGroup;
use App\CategoryAgeGroup;




class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('hjhjhjdhja');


        $post =(BlogPost::all());
        return response(['post'=>$post]);            // display the table content

       


    //
    }

    
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new BlogPost([
            'title' => $request->get('title'),
            'description' => $request->get('description')
          ]);
    
          $post->save();
    
          return response()->json('success');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = BlogPost::find($id);
        // return response()->json($post);//     edit the blog postst


        // $data = AgeGroup::find(1);                 // calling the relationship made for categoryAgeGroup- show 1st ID 
        // dd($data);

        $data = CategoryAgeGroup::where(['category_id'=>'1'])->get();                // calling the relationship made for categoryAgeGroup- show 1st ID 
        dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = BlogPost::find($id);
        $post->update($request->all());
        return response()->json('successfully updated');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = BlogPost::find($id);
        $post->delete();
        return response()->json('successfully deleted');//
    }
}
