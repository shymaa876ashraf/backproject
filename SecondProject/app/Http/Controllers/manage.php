<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;
use App\Category;

class manage extends Controller
{
    //
    public function addcategory(Request $request)
    {
        if($request->isMethod('post'))
        {
            $category=new Category();
            $category->name=$request->input('name');
            $category->image=$request->input('image');
            $category->save();

        }
        return view('addcategory');
    }
    public function addproduct(Request $request)
    {
        if($request->isMethod('post'))
        {
            $product=new Product();
            $product->id=$request->input('id');
            $product->name=$request->input('name');
            $product->numberofcopies=$request->input('numberofcopies');
            $product->image=$request->input('image');
            $product->price=$request->input('price');
            $product->description=$request->input('description');
            $product->cat_id=$request->input('cat_id');

            $product->save();
        }
        
        return view('addproduct');
    }
    public function deletecategory(Category $id)
    {
           $id->delete();
           return back();
    }
    public function deleteproduct(Product $id)
    {
           $id->delete();
           return view('showpro');
    }
    public function updatcat(Request $request){
        if($request->isMethod('POST')){
              $val =Category::find($request->input("old_id"));
              $val->id=$request->input("new_id");
              $val->name=$request->input("name");
              $val->image=$request->input("image");
              $val->save();
        }
        return view('editcat');
           } 
           public function updatpro(Request $request){
            if($request->ismethod("post"))
                 {
                  //$val =  product::find($req->input("old_id"));
                  $val =Product::where("id",$request->input("old_id"))->first();
                  $val->id=$request->input("new_id");
                  $val->name=$request->input("name");
                  $val->numberofcopies=$request->input("numberofcopies");
                  $val->image=$request->input("image");
                  $val->price=$request->input("price");
                  $val->description=$request->input("description");
                  $val->cat_id=$request->input("cat_id");

                  $val->save(); 
                  }
                     return view('edittproduct');
                }
        
    

}
