@extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->
  <div class="container" style="margin-top:40px;">

      <div class="row">

          <div class="col-lg-3">

          <a class="navbar-brand" href="#">
          <img src="coursel/logo.png" alt="" height="150px" width="150px" style="margin-left: 40px;">
        </a>
              <div class="list-group">
                  <a href="/create" class="btn btn-primary btn-block"> Create new post </a>
                  <hr>
                  <a href="/categories/index" class="btn btn-primary btn-block"> show all categories </a>
                  
                  <a href="#" class="list-group-item">{{ ($categories) }}</a>
                  
              </div>

          </div>
          <!-- /.col-lg-3 -->
          

          <div class="col-lg-9">

              <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                          <img class="d-block img-fluid" src="/coursel/welcome.jpg" alt="First slide" >
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="/coursel/po.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>

              <div class="row">
                @foreach($posts as $post)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                            
                          <a href="#"><img class="card-img-top" src="/images/{{$post->image}}" alt="" height="280px" width="320px"></a>
                          <div class="card-body">
                              <h4 class="card-title">
                                  <a href="/show/{{$post->id}}">{{$post->title }}</a>
                              </h4>
                              <h5>Price : {{$post->prix}} DT</h5>
                              <p class="card-text">{{substr($post->body,0,50)}}{{ strlen($post->body) > 50 ? "...." : "" }}
                              </p>
                              <p>Posted : {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>
                              <p>by:
                                  @if (Auth::user()->id == $post->user->id)<a href="#">  YOU </a>
                                  @else
                                  <a href="#"> {{$post->user->name}}  </a>
                                @endif</p>
                              <p> </p>
                          </div>
                          <div class="card-footer">
                              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                          </div>
                      </div>  
                  </div>
                @endforeach
                  

              </div>
              <!-- /.row -->
            
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->
 
    
</div>
</div>
<div class="d-flex justify-content-center">
    {!! $posts->links() !!}
</div>
<br>
    
    
    
  @endsection