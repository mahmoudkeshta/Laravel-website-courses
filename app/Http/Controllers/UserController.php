<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::orderBy('id','desc')->paginate(5);
        return response()->view('cms.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.create');
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
            'name' => "required|string|min:3|max:50",
            'email' => "required|email",
            'password' => "required",
        ],[
            'email.required' => "الرجاء ادخال بريد الكتروني صجيح",
            'password.required' => "كلمة مرور",
        ]);
        if(!$validator->fails()){
            $admins = new User();
            $admins->name=$request->get('name');
            $admins->email = $request->get('email');
            $admins->password=Hash::make($request->get('password'));
            $isSaved = $admins->save();
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
        $admins = User::findOrFail($id);
        return response()->view('cms.edit',compact('admins'));
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
        $validator=Validator($request->all(),[
            'name' => "required|string|min:3|max:50",
            // 'email' => "required|email|unique:admins,email",
            // 'password' => "required",
        ],[
            // 'email.required' => "الرجاء ادخال بريد الكتروني صجيح",
            // 'password.required' => "كلمة مرور",
        ]);
        if(!$validator->fails()){
            $admins = User::findOrFail($id);
            $admins->name = $request->get('name');
            $admins->email = $request->get('email');
            // $admins->password=Hash::make($request->get('password'));
            $isSaved = $admins->save();
            if($isSaved){       
                return response()->json(['message'=> $isSaved ? "Saved" : "Failed"],$isSaved ? 200 :400);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = User::destroy($id);
        return response()->json(['message'=>$admins ? "Deleted is Successfully":"Deleted is Failed"]);
    }
}
