
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UKBI Adaptif</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/') ?>dist/css/adminlte.min.css">
  <link href="<?php echo site_url('assets/') ?>plugins/toastr/toastr.css" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>UKBI</b> Adaptif</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login System</p>

      <form id="form">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="username" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group" id="captcha" style="text-align: center; margin-bottom:10px">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="captcha" placeholder="Captcha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo site_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('assets/') ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo site_url('assets/')?>dist/js/master.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/jquery.blockui/jquery.blockui.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/toastr/toastr.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":"<?php echo $this->security->get_csrf_hash()?>",
                }
            });
            setTimeout(function() {
                $('.card').removeClass('card-hidden');
            }, 700);
            RefreshCaptcha();
            $('#form').on("submit", function(e){
                e.preventDefault();
                Wait();
                setTimeout(() => {
                    $.ajax({
                        url: "<?php echo site_url('login') ?>",
                        data: new FormData($('#form')[0]),
                        type: 'post',
                        contentType: false,
                        processData: false,
                        async: false,
                        dataType: 'json',
                        success:function(data){
                            if (data.error == 0) {
                                $('[name=username]').attr('disabled', true);
                                $('[name=password]').attr('disabled', true);
                                $('[name=captcha]').attr('disabled', true);
                                setTimeout(function() {
                                    window.location.href = "<?php echo site_url() ?>dashboard";
                                }, 500);
                                toastr.success(data.message)
                            }else{
                                toastr.warning(data.message)    
                                RefreshCaptcha();
                            }               
                        },
                        error:function(data){
                            toastr.error('Gagal Login');
                            RefreshCaptcha();
                        }
                    });
                }, 250);
            });
        });

        function RefreshCaptcha() {
            $(".fa-refresh").addClass("fa-spin");
            $.ajax({
                url: "<?php echo site_url('login/refresh_captcha') ?>",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if (data.error == 0) {
                        $("#captcha").html(data.captcha);
                        $("[name=captcha]").val("");
                    }
                    setTimeout(() => {
                        $(".fa-refresh").removeClass("fa-spin");
                    }, 500)
                },
                error: function(data) {
                    alert("<?php echo lang('error_method') ?>");
                }
            });
        }
    </script>
</body>
</html>
