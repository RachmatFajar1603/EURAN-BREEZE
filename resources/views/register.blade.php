<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!doctype html>
</head>

<body style="background-color: #CDCDCD;">   
    <section class="min-h-screen flex items-center">
        <!--Image-->
   <div class="w-1/2 md:block hidden">
    <img class="sm:block hidden" src="{{ asset('images/logo.jpg') }}" alt="logo">
   </div>
        <!--login-->
        <div class="flex rounded-2xl shadow-lg max-w-3xl p-5 items-center" style="background-color: #426A4E;">

            <!--FORM   -->
            <div class="md: w-1/2 px-16" style="float:left">
                <h2 class="font-bold text-2xl text-white" style=" width: 300px; height: 60px; margin-left: 100px; padding-left: 57px;">Sign up</h2>

                <div class="mt-5">
                  <input type="text" placeholder="Username" class="border border-gray-400 py-1 px-2 w-full rounded-lg" style="width: 400px;">
                </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full rounded-lg" style="width: 400px;">
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Phone number" class="border border-gray-400 py-1 px-2 w-full rounded-lg" style="width: 400px;">
                  </div>
                  <div class="mt-5 w-">
                    <input type="text" placeholder="Address" class="border border-gray-400 py-1 px-2 rounded-lg w-full" style="width: 400px;">
                  </div>
                  <div class="mt-5">
                    <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full rounded-lg " style="width: 400px;">
                  </div>
                  <div class="mt-5">
                    <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full rounded-lg" style="width: 400px;">
                  </div>
                  
                  <div class="mt-5" style="padding-left: 47px;">
                    <a href="/">   
                        <button class="w-full py-3 text-center text-white rounded-lg hover:scale-110 duration-300" style="width: 300px; background-color: #CDCDCD; color: black;">Register</button>
                    </a>
                  </div>

                  <div class="mt-3 text-xs flex justify-between items-center " style="width: 400px; padding-left: 130px;">
                    <p style="color:white">you have an account ? <span class="py-2 px-5 rounded-xl hover:scale-110 duration-300 pl-0" ><a style="color: orangered;" href="/">Login</a></span></p> 
                </div>
            </div>

          
        </div>
           

    </section>

</body>
</html>