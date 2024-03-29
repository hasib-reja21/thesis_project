<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }
        @keyframes slideFromTopToBottom {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        #animated-content {
            animation: slideFromTopToBottom 1s ease-in-out;
        }
    </style>
</head>

<body>


    <section>

        <div class="vh-100"  ">
        
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5" id="animated-content">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                            <div class="text-center">
                <a href="#"><img style="border-radius: 10px; height:70px; width:70px;" src="https://i.ibb.co/WfR3xNJ/abs-3.jpg" alt="logo"></a>
            </div>

                                <h3 class="mb-5">Sign in</h3>

                                <div>
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>

                                    @endif
                                </div>

                                <form action="{{route('admin.login.post')}}" method="post">
                                    @csrf
                                    <div class=" mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Enter your email address" required />
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input  type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Enter your password" required />
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-md btn-block" type="submit">Login</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>