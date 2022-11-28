<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./starbucks_resource/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./starbucks_resource/css/membership.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="./starbucks_resource/assets/mp4/Starbucks 50th Anniversary.mp4" type="video/mp4" /></video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Starbucks Database</h1>
                <p class="mb-5">To inspire and nurture the human spirit – one person, one cup, and one neighborhood at a time and to establish Starbucks as the premier purveyor of the finest coffee in the world!</p>
                <div class="col">
                    <div class="card shadow-lg border-0 rounded">
                        <div class="card-header">
                            <h3 class="text-center font-weight-dark my-4" style="color:black">Register</h3>
                        </div>
                        <div class="card-body">
                            <form method='post' action="{{ route('register.custom') }}">
                                {{ csrf_field() }}
                                <div class="form-floating mb-3">
                                    <input name='name' class="form-control" id="text" type="text" placeholder="name@example.com" style="color: black;" />
                                    <label for="text" style="color:black">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name='username' class="form-control" id="inputEmail" type="text" placeholder="name@example.com" style="color: black;" />
                                    <label for="inputEmail" style="color:black">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name='password' class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                    <label for="inputPassword" style="color:black">Password</label>
                                </div>
                                <div class="form-group">
                                   <input type="submit" name="login" class="btn btn-primary" value="Register" />
                                </div>
                            </form>
                            <div>
                                <br>
                                <a href="{{ route('login') }}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage ">
                <div class="text-center mb-3 mt-2">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms ">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage ">
                <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="#! "><i class="fa fa-phone"></i></a>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js "></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js "></script>
</body>

</html>