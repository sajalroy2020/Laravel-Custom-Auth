<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
  </head>
  <body>
    <section class=" py-5" style="background-color: #eee;">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-2">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <p class="text-center h3 fw-bold mb-4 mx-1 mx-md-4 mt-4">Sign up</p>
                        <form class="mx-1 mx-md-4" action="{{route('user-Register')}}" method="post">
                            @csrf

                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif

                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example1c">Your Name</label>
                                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example4cd">Phone</label>
                                    <div class="text-danger">@error('phone') {{$message}} @enderror</div>
                                    <input type="number" name="phone" class="form-control" />
                                </div>
                            </div>
            
                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example3c">Your Email</label>
                                    <div class="text-danger">@error('email') {{$message}} @enderror</div>
                                    <input type="email" name="email" class="form-control" />
                                </div>
                            </div>
            
                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example4c">Password</label>
                                    <div class="text-danger">@error('password') {{$message}} @enderror</div>
                                    <input type="password" name="password" class="form-control" />
                                </div>
                            </div>
            
                            <div class="form-check d-flex justify-content-center mb-3">
                                <label class="form-check-label" for="form2Example3">
                                    You are already Register <a href="login"> Login here !</a>
                                </label>
                            </div>
            
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button class="btn btn-primary btn-lg">Register</button>
                            </div>
        
                        </form>
        
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
        
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
        
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>