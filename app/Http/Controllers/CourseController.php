<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->paginate(6);
        return response()->view('course.index',compact('courses'));
    }
    public function indexProducts(Request $request ) {
        // $courses = Course::where('course_id',$id)->with('course')->orderBy('id' , 'desc')->paginate(5);
        // return response()->view('products',compact('courses'));
        $courses = Course::with('comments')->withCount('comments')->withAvg('comments','review')->orderBy('id','desc')->paginate(6);
        return response()->view('products' , compact ('courses'));
    }
    public function indexindex(Request $request ) {
        // $courses = Course::where('course_id',$id)->with('course')->orderBy('id' , 'desc')->paginate(5);
        // return response()->view('products',compact('courses'));
        $courses = Course::with('comments')->withCount('comments')->withAvg('comments','review')->orderBy('id','desc')->paginate(6);
        return response()->view('index' , compact ('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('course.create');
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
            $courses = new Course();
            $image = $request->file('image');;
            $imageName = time() . 'image.' . $image->getClientOriginalExtension();
            $image->move('image', $imageName);
            $courses->image = $imageName;
            $courses->title = $request->get('title');
            $courses->price = $request->get('price');
            $courses->description = $request->get('description');
            $isSaved = $courses->save();
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::findOrFail($id);
        $comments = Comment::orderBy('id','desc')->paginate(6);
        return response()->view('aboutproduct',compact('courses','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        return response()->view('course.edit',compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            $courses =  Course::findOrFail($id);
            if (request()->hasFile('image')){
                $image = $request->file('image');;
                $imageName = time() . 'image.' . $image->getClientOriginalExtension();
                $image->move('image', $imageName);
                $courses->image = $imageName;
            }
            // $courses->image = $request->get('image');
            $courses->title = $request->get('title');
            $courses->price = $request->get('price');
            $courses->description = $request->get('description');
            $isSaved = $courses->save();
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::destroy($id);
        return response()->json(['message'=>$courses ? "Deleted is Successfully":"Deleted is Failed"]);
    }
}
