<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    public function category(){
    	return view('categories.category');
    }

    public function addCategory(Request $request){
    	$this->validate($request,[
    		'category' => 'required'
    	]);
    	$category = new Category;
    	$category->category = $request->input('category');
    	$category->save();
    	return redirect('/category')->with('response','Category Added Successfully');
    }
}
