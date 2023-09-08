<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
   public function index(){
    $members=Member::all();
    return response()->json($members);
   }
   public function show($id){
    $members=Member::find($id);
    return response()->json($members);

   }
}
