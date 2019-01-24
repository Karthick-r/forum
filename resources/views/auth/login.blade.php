<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    @include('nav')
    <div class="container" style="margin-top:30px;">

    <div class="row">
            <form class="col s12" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_box</i>
                  <input id="name" type="text" name="name" class="validate">
                  <label for="name">Your Name</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">security</i>
                  <input id="icon_telephone" type="password" name="password" class="validate">
                  <label for="icon_telephone">Password</label>
                </div>
                <input type="submit" value="Login" class="btn purple" style="display:block; margin:0 auto;">
              </div>
            </form>
          </div>
    </div>
                
            <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
            <script>
                $(document).ready(function() {
                    $('#summernote').summernote();
                    $('.sidenav').sidenav();
        
                  });
            </script>
        
        </body>
        </html>