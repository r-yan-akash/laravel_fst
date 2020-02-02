<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h3>Add Teachers</h3>
    <hr>
    <form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        @method('POST')
{{--        alada kore bole dite hoi ki format  a data jasse server a. ok--}}
        <div class="form-group">
            <label>Teacher Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
            <div class="form-control-feedback alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Student ID</label>
            <input class="form-control" name="teacher_id">
            @error('teacher_id')
            <div class="form-control-feedback alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age">
            @error('age')
            <div class="form-control-feedback alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Save" class="form-control btn btn-success"  style="max-width: 100px;">
        </div>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
