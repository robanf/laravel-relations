@extends('layouts.app')
@section('content')

<div class="container">
@if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li> 
                    @endforeach
                </ul>
            </div>
        @endif

<form action="{{route('admin.posts.update',$post->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="titolo" class="form-label">titolo</label>
      <input type="string" class="form-control" name="title" id="titolo" value="{{$post->title}}" aria-describedby="emailHelp">
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$post->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection