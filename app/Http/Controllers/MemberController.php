<?php

namespace App\Http\Controllers;

use App\Model\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function store(Request $request){
        $validatedData = $request->validate([
            'full_name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'message'=>'required|min:5|max:255'
        ]);
        Member::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'message'=>$request->message,

        ]);

        return redirect()->route('homepage')->with('success','created account success');
    }
}
