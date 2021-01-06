@extends('main')
@section ('title','|Create')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/update/{{$post->id}}" method="POST" class="submit-form">
 @csrf
 

<div class="row">

    <div class="col-md-8">
    <label for="fname">title:</label><br>
    <input type="text" name="title" value="{{$post->title}}" class="form-control" style="height:50px; width:400px" placeholder="title"><br>
    <label for="fname">slug:</label><br>
    <input type="text" name="slug" value="{{$post->slug}}" class="form-control" style="height:50px; width:400px" placeholder="slug"><br>
    <label for="fname">body:</label><br>
    <input type="text" name="body" value="{{$post->body}}" class="form-control" style="height:50px; width:400px" placeholder="body"><br>
</div>
<div class="col-md-4">
    <div class="well">
        <dl class="dl-horizental">
            <dt>Create at :</dt>
            <dd>{{ date( 'M j, Y H:i' , strtotime($post->updated_at)   )  }} </dd>

        </dl>
        <dl class="dl-horizental">
            <dt>Updated at :</dt>
            <dd>{{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }}</dd>

        </dl>
        <div class="row">
            <div class="col-sm-6">
            <button type="submit" class="btn btn-success btn-block">Save changes</button>
            </div>

            <div class="col-sm-6">
                <a href="/show/{{$post->id}}" class="btn btn-danger btn-block"> Cancel</a>
            </div>
        </div>
    </div>
    </div>
</form>
</div>



@endsection