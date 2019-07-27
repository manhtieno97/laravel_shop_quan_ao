<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\formCategoryAdd;
use App\Http\Requests\formCategoryEdit;
class CategoryController extends Controller
{
    public function getCategory()
    {
        $data['category']=category::orderBy('id','desc')->paginate(5);
        return view('backend.category.category',$data);
    }
    public function getCategoryAdd()
    { 
        return view('backend.category.cat_add');
    }
    public function postCategoryAdd(formCategoryAdd $request)
    { 
        $slug=str_slug($request->name);
        $request['cat_slug']=$slug;
        category::create($request->all());
        return redirect()->route('category_index');
    }
    public function getCategoryEdit($id)
    {
        $data['cat_edit']=category::find($id);
        return view('backend.category.cat_edit',$data);
    }
    public function postCategoryEdit(formCategoryEdit $request,$id)
    {
        $slug=str_slug($request->name);
        $request['cat_slug']=$slug;
        $request->offsetUnset('_token');//or $request->only('name','status');
        category::where('id',$id)->update($request->all());
        return redirect()->route('category_index');
    }
    public function getCategoryDelete($id)
    {
        category::find($id)->delete();
        return redirect()->back();
    }public function searchCategory(Request $request)
    {
        $search=($request->search) ? ($request->search) : '';
        $data['category']=category::orderBy('id','desc')->where('name','like','%'.$search.'%')->paginate(5);
        return view('backend.category.category',$data);
    }
}
