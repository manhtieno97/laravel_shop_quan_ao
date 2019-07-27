<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\formUserAdd;
class UserController extends Controller
{
    public function getUserList()
    {
        $data['users']=user::orderBy('id','desc')->paginate(5);
    	return view('backend.users.user_list',$data);
    }
    public function getUserAdd()
    {
    	return view('backend.users.user_add');
    }
    public function postUserAdd(formUserAdd $request)
    {

    	$password=bcrypt($request->password);
    	$request->merge(['password'=>$password]);
        $image='user.png';
        if($request->img)
        {
        	$image=time().$request->img->getClientOriginalName();
        }
    	$request['image']=$image;
    	
        user::create($request->only('name','email','image','password','confirm_password'));
        if($request->img)
        {
        	$request->img->move('avatar',$image);
        }
    	return redirect()->route('user_list');
    }
}
