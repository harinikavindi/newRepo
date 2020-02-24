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


        // $post =(BlogPost::all());
        // return response(['post'=>$post]);            // display the table content

       



    //
    }

    /**
    /**
     * Store a newly created resource in storage.
     *
     * @param  \
        //
    }

    /**
     * Show th
     */   edit the blog postst


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
        $
    public function delete($id)
    {
        $post = BlogPost::find($id);
        $post->delete();
        return response()->json('successfully deleted');//
    }
}
