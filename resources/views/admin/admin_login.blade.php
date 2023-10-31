<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>Login</title>
   </head>
   <body>
    <h2>Admin Login</h2>
      <div class="container";>
         <form class="col-md-4 col-md-offset-4"; method="POST" action="{{ route('admin.login') }}">
            @csrf
            @if(Session::has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>{{ session::get('error') }}</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
           </div>
           @endif
            <div class="form-group ">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" class="form-control" id="email"   name="email" :value="old('email')" required autofocus aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" id="password" 
                  name="password"
                  required autocomplete="current-password" placeholder="Password">
            </div>
            <div class="form-group form-check">
               <input type="checkbox" for="remember_me" name="remember" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Remember</label>
            </div>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
            </a>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>