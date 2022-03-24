@extends('layout');

@section('title')
CREATION
@endsection



@section('main')

<div class="container  m-5" >

    @if ($errors->any())

        <div class="bg-danger form-control ">
            @foreach ($errors->all() as $err)
                <p>{{$err}}</p>
            @endforeach
        </div>
    @endif





    <form method="POST" action="{{url("books/store")}}" enctype="multipart/form-data">

        @csrf

        <input type="text" class="form-control my-3 " name="name" placeholder="name" >

        <input type="file" class="form-control my-3 " name="image" placeholder="image" >

        <input type="text" class="form-control my-3" name="description" placeholder="description" >

        <input type="integer" class="form-control my-3" name="votes" placeholder="votes" >

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
