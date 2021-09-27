<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">

    <!-- Notification css (Toastr) -->
    <link href="<?php echo base_url() ?>assets/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>


<body class="authentication-bg">


    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="">
                            <span><img style="opacity: 0;" src="<?php echo base_url() ?>assets/images/logo-dark.png" alt="" height="80"></span>
                        </a>
                        <p class="text-muted mt-2 mb-4" style="opacity: 0;">Login</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Register for Agency</h4>
                            </div>

                            <form action="<?php echo base_url() ?>auth/authenticate" method="POST">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Agent Code</label>
                                    <input class="form-control" type="text" id="xxx" required="" placeholder="Enter your ID">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="yyy">Agent name</label>
                                    <input class="form-control" type="text" required="" id="yyy" autocomplete="off" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="yyy">Mobile Number</label>
                                    <input class="form-control" type="text" required="" id="yyy" autocomplete="off" placeholder="Enter your password">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email</label>
                                    <input class="form-control" type="text" id="xxx" required="" placeholder="Enter your ID">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="yyy">Account</label>
                                    <input class="form-control" type="password" required="" id="yyy" autocomplete="off" placeholder="Enter your password">
                                </div>

                                <!-- <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> -->

                                <div class="form-group mb-0 text-center">
                                    <a href="<?php echo base_url() ?>dashboard/index" class="btn btn-success btn-block" id="login-btn-2"> Submit </a>

                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <!-- <p> <a href="pages-recoverpw.html" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>Forgot your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p> -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- Vendor js -->
    <script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

    <!-- Toastr js -->
    <script src="<?php echo base_url() ?>assets/libs/toastr/toastr.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }


        function login(e) {
            e.preventDefault();
            $('#login-btn').html('Please wait ... <i class="fas fa-spinner fa-spin"></i>');
            $('#login-btn').attr("disabled", true);
            $('#xxx').attr("disabled", true);
            $('#yyy').attr("disabled", true);

            var xxx = $('#xxx').val();
            var yyy = $('#yyy').val();
            var myData = {
                xxx: xxx,
                yyy: yyy,
            };

            $.ajax({
                type: 'POST',
                url: "<?php echo base_url() ?>auth/authenticate",
                data: myData,
                dataType: "json",
                success: function(res) {
                    if (res.status) {

                        window.location.href = "<?php echo base_url('auth') ?>";

                    } else {
                        toastr["error"](res.data);
                        $('#login-btn').text('Log in');
                        $('#login-btn').attr("disabled", false);
                        $('#xxx').attr("disabled", false);
                        $('#yyy').attr("disabled", false);
                    }

                },
                error: function(request, status, error) {
                    toastr["error"]("Server Error !");
                    $('#login-btn').text('Log in');
                    $('#login-btn').attr("disabled", false);
                    $('#xxx').attr("disabled", false);
                    $('#yyy').attr("disabled", false);
                }
            });
        }
    </script>

</body>

</html>