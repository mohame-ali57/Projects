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
            return redirect()->route('dashboard.pages.categories.error.page-404');
          }
          return view('dashboard.pages.categories.show',compact('category'));
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {


    }
}
