@extends('main')
@section ('title','|Create')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <h1>{{ $post->body }}</h1>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizental">
                <label>Url :</label>
                <p> <a href=" {{ route('pro.single', $post->slug) }}">  {{ route('pro.single', $post->slug) }}  </a> </p>

            </dl>
            <dl class="dl-horizental">
                <label>Create at :</label>
                <p> {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>

            </dl>
            <dl class="dl-horizental">
                <label>Updated at :</label>
                <p>{{ date( 'M j, Y H:i' , strtotime($post->updated_at)   )  }}</p>

            </dl>
            <div class="row">
                <div class="col-sm-6">
                    <a href="/edit/{{$post->id}}" class="btn btn-primary btn-block"> Edit </a>
                </div>

                <div class="col-sm-6">
                    <form action="/destroy/{{$post->id}}" method="DELETE" class="submit-form">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-col-md-12">
                    <a href="/index" class="btn btn-primary btn-block">
                        << Tout les postes </a> </div> </div> </div> </div> </div> @endsection