<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./admin/assets/images/car.png"
    />
    <!-- Custom CSS -->
    <link
      href="./admin/assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="./admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="./admin/dist/css/style.min.css" rel="stylesheet" />

    <style>
        .main-section{
            background: #141619 !important;
            /* background: #1f262d; */
            width: 100% !important;
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
  </head>

  <body >

        <!-- Login 13 - Bootstrap Brain Component -->
        <section class="main-section w-100 h-100">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="text-center">
                            <h1>Login</h1>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row gy-2 overflow-hidden">
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                <label for="email" class="form-label">Email</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                            </div>
                            
                            <div class="col-12">
                            <div class="d-grid my-3">
                                <button class="btn btn-secondary btn-lg" type="submit">Log in</button>
                            </div>
                            </div>
                            <div class="col-12">
                            <p class="m-0 text-secondary text-center">Don't have an account? <a href="{{ route('register_form') }}" class="link-primary text-decoration-none">Sign up</a></p>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="./admin/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="./admin/assets/libs/moment/min/moment.min.js"></script>
    <script src="./admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="./admin/dist/js/pages/calendar/cal-init.js"></script>
  </body>
</html>
