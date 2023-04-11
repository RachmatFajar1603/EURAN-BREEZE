<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <style> 

        *{
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        body{
            margin: 0 0 0 0;
            background-color: #E1DEDE;
        }
        .container{
            position: absolute;
            bottom: 150px;
            right: 200px;
            float: right;
            background-color:#426A4E;
            width: 350px;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border-radius: 5%;
        }   
        
        .col-auto{
            width: 100%;
            padding: px;
        }
        .h1{
            color: antiquewhite;
            font-weight: bold;
            font-size:3ch;
            padding: 10px 0;
            text-align: center;
        }

        .boton{
            
            margin: 30px 1px;
        }

        .login{
            font-size: small;
            width: 240px;
            text-align: center;
            border: none;
            border-radius: 5px;
            height: 30px;
        }

        img{
            width: 50%;
            margin: 0% 5%;
        }
    </style>
</head>
<body>

    <img src="{{ asset('images/logo.jpg') }}">

    <div class="container">
        <h1 class="h1">LOGIN</h1>
            <form class="form">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <input type="username" placeholder="Username" id="inputUsername6" class="form-control" aria-labelledby="passwordHelpInline" style="font-size:small;">
                    </div>
                    <div class="col-auto">
                    <input type="password" placeholder="Password"  id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline" style="font-size: small;">
                    </div>
                </div>

                  <div class="form-check" style="margin: 10px 0;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked" style="font-size:smaller;">
                      Remember me
                    </label>
                    <a href="#"  style="font-size:smaller; padding-left: 60px; text-decoration: none; "> Forgot password?</a>

                    <a href="/landingpage"><div class="boton">
                        <button type="button" class="login">Login</button>
                    </div></a>

                    <span style="font-size: smaller; padding-left: 30px;">dont have an account?</span> <a style="font-size: small; color: orangered; text-decoration: none;" href="/register">Register</a>
                  </div>
            </form>
    </div>
</body>
</html>