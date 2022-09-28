 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style2.css">
  </head>
  <body>
    <div class="container-fluid">  

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row ">  
            <div class="col-md-6 d-none d-md-block">  
                <img src="asset/illus_bg.png" class="img-fluid" style="min-width: 670px; height: 640px; margin-left:-20px;" />  
            </div>  
            <div class="col-md-6 bg-white my-5">  
                <div class="d-grid gap-2 col-6 mx-auto">
                    <img src="asset/logo.png" alt="logo_klambimu" class="pb-2 w-75" style="margin-left: 20px;">
                    <h5 class="pb-2 fw-bolder text-center" style="color: #948869;">Welcome Back to Our Website!</h5>  
                </div>
                <div class="pb-2 fw-bolder">
                    <h3>Login</h3></div>
                    <div class="form-style">  
                        <form action="/login" method="post">
                            @csrf  
                            <div class="form-group pb-3">
                                <label class="fw-bolder" style="color: #948869;">Email</label>
                                <input type="text" name='email' id='email' placeholder="Enter Your email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus required>
                                @error('email')
                                <span class="invalid-feedback">
                                    {{ $message }}    
                                </span>   
                                @enderror 
                            </div>  
                            <div class="form-group pb-1"> 
                                <label class="fw-bolder" style="color: #948869;">Password</label>
                                <input type="password" name="password" id='password' placeholder="Enter your password" class="form-control">
                                <span class="invalid-feedback"></span>
                            </div>  
                            <div class="d-grid gap-2 mr-4 pb-2 d-md-flex justify-content-md-end" style="padding-right: 30px;">
                                <a href="#" class="me-md-2">Forget Password?</a>
                            </div>
                            <div class="pb-2 "></div> 
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn fw-bolder rounded" type="submit" value="Login" style="background-color: #008037; color:white;">
                            </div>
                        </form> 
                    <div class="pt-4 text-center">  
                        Don't have an account? <a href="/register">Registration here</a>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>