<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryManagementController extends Controller
{
    function categories() {
        $categories = Category::all();
       return view('admin.categories',['data'=>$categories]);
    }

    function addCategoryForm(){
        return view('admin.addCategoryForm');
    }

    function addCategory(Request $req){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $category=new Category;
        $category->title =$req->title;
        $category->description =$req->description;
        $flag=$category->save();
        
        if($flag){
            return redirect()->route('admin.categories')->with('status','Category Added Successfully');

        }
    }
   
    function deleteCategory($id){
        $category=Category::destroy($id);
        if($category){
            return redirect()->route('admin.categories')->with('status','Category Deleted Successfully');
        }
    }

    function editCategoryForm($id){
        $category=Category::find($id);
        return view('admin.editCategoryForm',['category'=>$category]);
    }

    function editCategory(Request $req,$id){
        $req->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $category= Category::find($id);
        $category->title =$req->title;
        $category->description =$req->description;
        $flag=$category->save();
        if($flag){
            return redirect()->route('admin.categories')->with('status','Category Updated Successfully');

        }
    }
}
