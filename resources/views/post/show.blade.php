@extends('main')
@section ('title','|Create')
@section('content')
<div class="row justify-content-center">
    
    <div class="col-md-5 " style=" margin: 100px 0px 100px 0px;">
                <div class="row col-sm-6">
                <a href="/index" class="btn btn-primary btn-block" style="margin-bottom: 20px" >
                    << Tout les postes </a>
                </div>  

        <div class="card" style="width: 18rem;">
        <img src="/images/{{$post->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Category: {{$post->category->name}} </li>
                 
            <li class="list-group-item"> Price : {{$post->prix}} DT </li>
            <li class="list-group-item">By: @if (Auth::user()->id == $post->user->id)<a href="/user/{{$post->user->name}}">  YOU </a>
                                  @else
                                  <a href="/user/{{$post->user->name}}"> {{$post->user->name}}  </a>
                                @endif </li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
<div class="col-md-4" style=" margin: 100px 0px 100px 0px;">
    <div class="well">
        <dl class="dl-horizental">
            <label>Url :</label>
            <p> <a href=" {{ route('pro.single', $post->slug) }}"> {{ route('pro.single', $post->slug) }} </a> </p>

        </dl>
        <dl class="dl-horizental">
            <label>Posted :</label>
            <p> {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>

        </dl>
        @if( $post->created_at ==$post->updated_at )
       
        @else
        <dl class="dl-horizental">
            <label>Updated  :</label>
            <p>{{ date( 'M j, Y H:i' , strtotime($post->updated_at)   )  }}</p>

        </dl>
        @endif
        @if (Auth::user()->id == $post->user->id)
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
        @endif
       </div> </div> </div> @endsection