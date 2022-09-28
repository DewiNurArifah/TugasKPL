<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Regist demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style2.css">
  </head>
  <body>
    <div class="container-fluid">  
        <div class="row">  
            <div class="col-md-6 d-none d-md-block">  
                <img src="asset/illus_bg.png" class="img-fluid" style="min-width: 700px; height: 750px; margin-left:-20px;" />  
            </div>  
            <div class="col-md-6 bg-white" style="padding-left: 50px;">  
                <div class="d-grid gap-2 col-6 mx-auto">
                    <img src="asset/logo.png" alt="logo_klambimu" class=" w-75" style="margin-left: 20px;">
                    <h5 class="pb-2 fw-bolder text-center" style="color: #948869;">Welcome Back to Our Website!</h5> 
                </div>
                <div class="pb-2 fw-bolder">
                    <h3 class="title">Create Account</h3></div>
                    <div class="form-style">  
                    <form action="/register" method="POST">
                        @csrf
                        <div class="user-details">
                        <div class="input-box">
                            <span for="name" class="details">Name</span>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name">
                            @error('name')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span for="username" class="details">Username</span>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username">
                            @error('username')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="number" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Date Birth</span>
                            <input type="date" placeholder="Enter your date" required>
                        </div> --}}
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" class="form-control @error('name') is-invalid @enderror" id="password" placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" placeholder="Confirm your password" required>
                        </div> --}}
                    </div>
                    <!-- <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div> -->
                    <div class="button">
                        <input type="submit" value="Register">
                        <span><h5 style="font-weight: 400; font-size: 17px; margin-left: 180px;">Do you have an account? <a href="/login"> Login here </a></h5></span>
                    </div>
                </form>
                        
                    </div>  
                </div>  
            </div>  
        </div>  
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>