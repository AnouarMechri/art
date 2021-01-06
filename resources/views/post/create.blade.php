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
<form method="POST" action="store" class="submit-form" data-parsley-validate>
@csrf
  <label for="fname">First name:</label>
  <input type="text" id='title' name="title" required><br><br>
  <label for="fname">Slug:</label>
  <input type="text" id='slug' name="slug" required><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id='body' name="body" required maxlength="255"><br><br>
  <input type="submit" value="Submit">
</form>

@endsection