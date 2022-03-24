@extends('layout')

@section('title')
    Home
@endsection





@section('main')

<div class=" container  bg-info ml-5 " >
    <a class="btn btn-info" href="{{url("books/create")}}">create</a>

    @foreach ($Products as $item )

        <a href="{{url("project/show/{$item->id}")}}"><h1 class="text-danger ">{{$item->name}}</h1></a>

        <p>{{$item->description}}</p>
        <div class="d-flex container m-5 p-5 ">
          <a href="{{url("project/show/{$item->id}")}}">  <img src="{{asset("uploads/products/$item->image")}}" class="m-5 w-50" alt="44"></a>
        </div>
        <a class="btn btn-dark" href="{{url("books/edit/{$item->id}")}}">edit</a>

        <a class="btn btn-danger" href="{{url("books/delete/{$item->id}")}}">delete</a>
<hr>


    @endforeach


</div>

    <div class="container d-flex justify-content-center " > {{$Products->links()}}</div>
@endsection










