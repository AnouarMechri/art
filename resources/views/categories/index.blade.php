@extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->
  <div class="container" style="margin-top:40px;">

      <div class="row">

          <div class="col-lg-3">
              <div class="list-group">
                  <a href="/index" class="btn btn-primary btn-block"> Back to home </a>
                  <hr>
                 </div>
                 </div>
                
              <div class="row">
                @foreach($post as $p)
                @if($p->category_id == $category->id)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                            
                          <a href="/show/{{$p->id}}"><img class="card-img-top" src="/images/{{$p->image}}" alt="" height="280px" width="320px"></a>
                          <div class="card-body">
                              <h4 class="card-title">
                                  <a href="/show/{{$p->id}}">{{$p->title }}</a>
                              </h4>
                              <h5>Price : {{$p->prix}} DT</h5>
                              <p class="card-text">{{substr($p->body,0,50)}}{{ strlen($p->body) > 50 ? "...." : "" }}
                              </p>
                              <p>ped : {{ date( 'M j, Y H:i' , strtotime($p->created_at)   )  }} </p>
                              <p>by:
                                  @if (Auth::user()->id == $p->user->id)<a href="#">  YOU </a>
                                  @else
                                  <a href="/user/{{$p->user->name}} "> {{$p->user->name}}  </a>
                                @endif</p>
                              <p> </p>
                          </div>
                          <div class="card-footer">
                            <a href="/shop" role="button" > SEE IN SHOP </a>
                          </div>
                      </div>  
                  </div>
                  @endif
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

<br>
    
    
    
  @endsection