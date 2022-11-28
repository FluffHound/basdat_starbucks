<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Membership</title>
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/Starbucks 50th Anniversary.mp4" type="video/mp4" /></video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container">
                <h1 class="fst-italic lh-1 mb-4">Membership</h1>
                <br>
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store_member') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Member</label>
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                            <div class="col">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <input type="number" name="nomor_telepon_member" class="form-control" id="inputEmail3" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender_member" id="gridRadios1" value="perempuan" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                    Perempuan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender_member" id="gridRadios2" value="laki-laki">
                                    <label class="form-check-label" for="gridRadios2">
                                    Laki-laki
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="inputPassword4" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <p>
                                    <input type="date" name="tanggal_lahir_member" />
                                </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Provinsi</label>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Provinsi">
                            </div>
                            <div class="col">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Kabupaten</label>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Kabupaten">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                <input type="text" name="alamat_member" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                            <div class="col">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                            <div class="col">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Input</button>
                    </div>
                </form>
                <!-- Submit success message-->
                <!---->
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
    <script src="./starbucks_resource/js/scripts.js "></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js "></script>
</body>

</html>