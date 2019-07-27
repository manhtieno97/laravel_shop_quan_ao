<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\formUserAdd;
use Validator;
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

    public function checkEmail(Request $request)
    {
        $validator=Validator::make($request->all(),[
        	'email'=>'bail|required|email|unique:user,email',
        ],[
            'email.required'=>'Bạn chưa nhập email !',
            'email.email'=>'Email nhập chưa đúng dạng !',
            'email.unique'=>'Email này đã được sử dụng !',
        ]);
        if($validator->passes()){
        	return json_encode(['success'=>'Check category name success.',
                                'status'=>true,]);
            
        }
        	return json_encode(['error'=>$validator->errors()->all(),
                                 'status'=>false,]);
    }
}
