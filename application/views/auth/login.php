<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ready.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/demo.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .container {
            width: 100%;
            /* Ensure the container takes up the full width */
        }
    </style>
</head>

<body>
    <?php if ($this->session->flashdata('error')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo $this->session->flashdata('error'); ?>',
            });
        </script>
    <?php endif; ?>

    <div class="login-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"><b>Login</b></div>
                        <!-- image login  -->


                        <div class="card-body">
                            <div class="text-center">
                                <img src="<?= base_url('assets/') ?>img/login.png" alt="logo" width="300">
                            </div>
                            <!--   public function LoginController() -->
                            <form action="<?= base_url('login/LoginController') ?>" method="POST">
                                <div class="form-group">
                                    <!-- email -->
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                    <!-- Password -->
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>