<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src='{{ asset('/assets/images/banner/test7.png') }}' alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />


                            </div>

                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                
                                <div class="card-body p-4 p-lg-5 text-black">
                                   

                                    @if ($errors->any() || session('message'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            @endif
                                            @if (session('message'))
                                                <li>{{ session('message') }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                                    <form action={{ route('login') }} method="post">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">
                                                <img src='{{ asset('/assets/images/logo/logo.png') }}' alt="logo" />
                                            </span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            admin account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" name='email' />
                                            <label class="form-label " for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name='password' />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <center>
                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block"
                                                    type="submit">Login</button>
                                            </div>



                                            <a href="{{route('/')}}" class="small text-muted">LAPRINT</a>
                                        </center>
                                    </form>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
