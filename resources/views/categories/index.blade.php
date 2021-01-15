@extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="container">
    <div class="row" style=" margin: 100px 0px 100px 0px;">
    <div class="col-md-8" >
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->created_at }}</td>
    </tr>
   @endforeach
  </tbody>
</table>
    </div>
    <div class="col-md-3">
<div class="well">  


<form method="POST" action="categories/store" class="submit-form" enctype="multipart/form-data" data-parsley-validate>
@csrf
  <label for="category">category name:</label>
  <input type="text" id='name' name="name" required><br><br>

  <input type="submit" value="Create new category" class="btn btn-success">
</form>


</div>   



        
    </div>
    </div>
  </div>
  @endsection