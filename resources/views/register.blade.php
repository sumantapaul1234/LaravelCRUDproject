<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h2>register member here</h2>
                <br>
                <!-- form action is register-user -->
                <form action="{{route('register-user')}}" method="post"> 
                    <!-- if values sumitted succesfully show successful -->
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <!-- if values are not sumitted succesfully show fail -->
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('danger')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="enter name" value="{{old('name')}}">
                        <!-- show validation msg here -->
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">mobile number</label>
                        <input type="number" class="form-control" name="phone" id="" placeholder="enter phone" value="{{old('phone')}}">
                        <!-- show validation msg here -->
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="enter password" value="{{old('password')}}">
                        <!-- show validation msg here -->
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">register</button>
                        
                        <button><a href="list" style="text-decoration: none;color: blue">show list </a></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </script>
</body>
</html>