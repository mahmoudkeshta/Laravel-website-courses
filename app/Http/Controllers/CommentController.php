<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::avg('review');
        return response()->view('products',compact('comments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validator=Validator($request->all(),[
            // 'name' => "required|string|min:3|max:50",
            // 'email' => "required|email|unique:admins,email",
            // 'password' => "required",
        ],[
            // 'email.required' => "الرجاء ادخال بريد الكتروني صجيح",
            // 'password.required' => "كلمة مرور",
        ]);
        if(!$validator->fails()){
            $comments = new Comment();
            $comments->name = $request->get('name');
            $comments->Message = $request->get('Message');
            $comments->review = $request->get('review');
            $comments->course_id = $request->get('course_id');
            $isSaved = $comments->save();
            if($isSaved){
                return response()->json(['message' => $isSaved ? "Saved" : "Failed"],$isSaved ? 200 :400);
            }else{
                return response()->json(['message' =>"Saved is Failed"],400);
            }
        } else {
            return response()->json(['message' => $validator-> getMessageBag()->first()],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
