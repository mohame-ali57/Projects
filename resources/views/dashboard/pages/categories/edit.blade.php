@extends('dashboard.layouts.master')

@section('title',"Edit_Category ($category->title)")

@section('main-content')
<main id="main" class="main mt-3 py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-md mb-4">
<strong class="card-title fs-2">Edit Category(<span class="text-primay">{{$category->title}}</span>)</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('categories.update' , $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.categories.form')
                            <button type="submit" class="btn btn-primary btn-md px-4 py-1 font-weight-bold fs-4">Update</button>
                            <a href="{{route('categories.index')}}" class="btn btn-dark btn-md px-2 py-2">Return To Category</a>
                            <a href="{{url()->previous()}}" class="btn btn-light btn-md px-2 py-2">Go Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
