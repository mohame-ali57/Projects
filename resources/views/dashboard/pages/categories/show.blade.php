@extends('dashboard.layouts.master')

@section('title',"Show Category ($category->title)")

@section('main-content')
<div class="container text-center my-5 mb-2 single-category p-1">
<main id="main" class="main mt-3">
    <div class="bg-dark shadow-lg p-5 rounded text-info  mx-auto">
        <h3>{{$category->id}}</h3>
        <h2>{{$category->title ?? 'NULL'}}</h2>
        <p>{{$category->description ?? 'NULL'}}</p>
        <hr>
        <div>
            <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success mx-1"><i class="fa-solid fa-edit"></i>Edit</a>
                <button class="btn btn-danger mx-1" type="submit"><i class="fa-solid fa-trash-alt p-1"></i>Delete</button>
                <p class="mt-4">
                    <a href="{{route('categories.index')}}" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i>Return To</a>
                    <a href="" class="btn btn-warning"></a>
                </p>
            </form>
        </div>
    </div>
</main>
</div>

@endsection
