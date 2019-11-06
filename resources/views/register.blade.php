<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
</head>
<body>
<div class="container bg-dark">
    <div class="row vh-100 d-flex align-items-center col justify-content-center">
        <div class="col-lg-6 offset-3">
            <div class="card bg-light rounded-lg">
                <div class="card-body ml-5 mr-5">
                    <div class="text-center">
                        <img src="{{asset('/img/trackey-logo.png')}}" width="120.97" height="51.92">
                    </div>
                    <div class="form-group mb-1">
                        <label for="nameInput"></label>
                        <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Name">
                    </div>
                    <div class="form-group mb-1">
                        <label for="emailInput"></label>
                        <input type="text" class="form-control" id="emailInput" name="emailInput" placeholder="Email">
                    </div>
                    <div class="form-group mb-1">
                        <label for="usernameInput"></label>
                        <input type="text" class="form-control" id="usernameInput" name="usernameInput" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="passwordInput"></label>
                        <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" id="keepSigned" >
                                <label class="form-check-label" for="keepSigned">Keep me signed in</label>
                            </div>
                        </div>
                        <div>
                            <a  class="ml-2 text-danger" href="">Already have an account ?</a>
                        </div>
                    </div>
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
