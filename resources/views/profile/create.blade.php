<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    @include('nav')
    <div class="container" style="margin-top:30px;">
    <div class="row">
        <form class="col s12" >
          <div class="row">
            <div class="input-field col s12">
                    <i class="material-icons prefix">local_offer</i>

              <input type="text" id="val" name="role" value="{{ old('role') }}" >
              <label for="val">Role</label>
              <span class="helper-text"></span>
            </div>
           
              <div class="file-field input-field col s12">
                    <i class="material-icons prefix">add_a_photo</i>

                    <div class="btn white" style="">

                        <input type="file" name="image">
                    </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload Picture">
                </div>
              </div>

              <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="about" name="about" class="materialize-textarea"></textarea>
                    <label for="about">about</label>
                  </div>
                  <div>
                      <input type="submit" value="Save profile" style="display:block; margin:0 auto; " class="btn teal">
                  </div>
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