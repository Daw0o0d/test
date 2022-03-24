@extends('layout')





@section('main')




<div class="bg-info container p-5 m-5">
    <form method="POST" action="{{url("books/update/{$e2f4->id}")}}" enctype="multipart/form-data" >

        @csrf

        <input type="text" class="form-control my-3 " value="{{$e2f4->name}}" name="name" placeholder="name" >

        <input type="text" class="form-control my-3" name="description" value="{{$e2f4->description}}" placeholder="description" >

        <input type="file" class="form-control my-3 " name="image" placeholder="image" >

        <input type="integer" class="form-control my-3" name="votes" value="{{$e2f4->votes}}" placeholder="votes" >

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container  " >{{$arrange->links()}}</div>
@endsection
