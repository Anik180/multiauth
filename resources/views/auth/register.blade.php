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
      <div class="container";>
         <form class="col-md-4 col-md-offset-4"; method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group ">
               <label >Name</label>
               <input type="text" class="form-control" id="name"   name="name" :value="old('name')" required autofocus aria-describedby="emailHelp" placeholder="Enter name">
            </div>
            <div class="form-group">
               <label >Email</label>
               <input type="email" class="form-control" id="email" 
                  name="email"
                  required  placeholder="email">
            </div>
            <div class="form-group">
               <label >Password</label>
               <input type="password" class="form-control" id="password" 
                  name="password"
                  required autocomplete="new-password" placeholder="password">
            </div>
            <div class="form-group">
               <label >Confirm Password</label>
               <input type="password" class="form-control" id="password_confirmation " 
                  name="password_confirmation"
                  required  placeholder="Confirm Password">
            </div>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            <button type="submit" class="btn btn-primary">SignUp</button>
         </form>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>