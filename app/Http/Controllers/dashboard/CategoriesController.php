<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;  //1
class CategoriesController extends Controller
{

    public function index()
    {

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
          $category=Category::find($id);   // model name
          if($category== null){
            return view('dashboard.pages.categories.error.page-404');
          }
          return view('dashboard.pages.categories.show',compact('category'));
    }


    public function edit(string $id)
    {
        $category=Category::find($id);
        if($category==null){
            return view('dashboard.pages.categories.error.page-404');
        }

        else{

            if(auth()->user()->User_Type=='admin'){

                return view('dashboard.pages.categories.edit', compact('category'));

              }

        else{

            return view('dashboard.pages.categories.error.page-404');
        }

        }
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'           =>'required|string|unique:categories,title,max:255',
            'description'     =>'nullable|string|max:1080',
            'create_user_id'  => 'nullable|exists:users,id',
            'update_user_id'  => 'nullable|exists:users,id'
            ]);
            $category_old=Category::find($id);
            $category=Category::find($id);
            if( $category->title== $request->title){
                $category->title= $category->title;
            }
            else{
                $category->title= $request->title;
            }
            $category->description= $request->description;
            $category->update_user_id=auth()->user()->id;
            $category->save();
            return redirect()->route('categories.index')->with('update',"the category {$category_old->title} has been updated");

    }


    public function destroy(string $id)
    {


    }
}
