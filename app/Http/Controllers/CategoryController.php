<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\support\Carbon;


class CategoryController extends Controller
{
    Public function Allcat(){


        $category = Category::latest()->paginate(5);
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


        public function CategoryEdit($id){
            $category = Category::findOrFail($id);
            return view('admin.category.category_edit',compact('category'));
    
        }  // end method
    
        public function CategoryUpdate(Request $request ,$id){
            Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            
    
            ]);
    
            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.category')->with($notification);

             }// end method

public function CategoryDelete($id){

    Category::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Category Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

} // end method 



}