<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\support\Carbon;


class CategoryController extends Controller
{
    Public function Allcat(){


        $category = Category::latest()->get();
        return view('admin.category.index',compact('category'));


    }

    public function CategoryStore(Request $request){

        $request->validate([
             'category_name' => 'required',
         ],[
             'category_name.required' => 'Input Category Name',
         ]);


         Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
 	     'created_at' => Carbon::now(),
    
            ]);
            $notification = array(
                'message' => 'Category Inserted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
        } // end method 
    


}