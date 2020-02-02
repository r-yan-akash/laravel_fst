<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <a href="{{route('myinfo.create')}}" class="btn btn-primary">Add info</a>
    {{--    start-auth-logout--}}
        <a class="btn btn-warning" href="{{ route('logout') }}"
           onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        {{--        end-auth-logout--}}
    <hr>
    @if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Departments</th>
            <th>Roll</th>
            <th>image</th>
            <th>Status</th>
            <th>....</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($myinfos as $key=>$myinfo)
            <td>{{$key+1}}</td>
            <td>{{$myinfo->name}}</td>
            <td>{{$myinfo->department->department_name}}</td>
            <td>{{$myinfo->roll}}</td>
            <td><img src="{{asset('storage/uploads/myinfo/'.$myinfo->image)}}" alt="" height="100px" width="80px"></td>
            <td>
                @if($myinfo->status==1)
                    {{'Active'}}
                    @else
                    {{'Deactivated'}}
                @endif
            </td>
            <td>
            <a href="{{route('myinfo.edit',$myinfo->id)}}"
               class="btn btn-primary">Edit</a>|

                <form action="{{url('myinfo/'.$myinfo->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
