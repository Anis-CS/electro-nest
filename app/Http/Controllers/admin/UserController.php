<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index',[
            'users' => User::all()
        ]);
    }

    public function create(){
        return view('admin.user.add');
    }

    public function store(Request $request){
        User::saveInfo($request);
        return back()->with('message', 'User info Added successfully.');
    }
    public function edit($id){
        return view('admin.user.edit',['user'=>User::find($id)]);
    }
    public function update($request,$id){
        User::saveInfo($request,$id);
        return back()->with('message', 'User info Added successfully.');
    }
}
