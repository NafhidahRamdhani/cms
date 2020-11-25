<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use PDF;
class ManageUserController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
            });
    }

    public function manageUser(){
        $user = User::all();
        return view('manage.manageUser', ['user' => $user]);
    }
    public function add(){
        return view('manage.addUser');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');  
        }
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make ($request->password),
        'roles' => $request->roles,
        'image' => $image_name
    ]);
        return redirect('/manageUser'); 
    }
    public function edit($id){
        $user = User::find($id);
        return view('manage.editUser',['user'=>$user]);
    }
    public function update($id, Request $request){
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->roles = $request->roles;
        $user->image = $request->image;

        if($user->image && file_exists(storage_path('app/public/' . $user->image))){
            Storage::delete('public/'.$user->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $user->image = $image_name;
        $user->save();
        return redirect('/manageUser');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/manageUser');
    }
    public function coba_pdf(){
        $user = User::all();
        $pdf = PDF::loadview('Upload-Report.coba_pdf',['user'=>$user]);
        return $pdf->stream();
    }
}