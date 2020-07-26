<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UKBI | <?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('template/backend/load'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- /.navbar -->

  <?php $this->load->view('template/backend/header'); ?>
  <?php $this->load->view('template/backend/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($content); ?>

  </div>
  <?php $this->load->view('template/backend/footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  
$(document).ready(function() {
  $.ajaxSetup({
    dataType:'json',
    beforeSend: function (xhr)
    {
       xhr.setRequestHeader("auth_key","<?php echo $this->model->GetSes('key'); ?>"); 
    },
    data:{
        "<?php echo $this->security->get_csrf_token_name();?>":"<?php echo $this->security->get_csrf_hash()?>",
    }
  });
});
$(document).ready(function () {
  bsCustomFileInput.init();
});

  function Logout() {
    Swal.fire({
      title: 'Logout ?',
      text: "Yakin anda keluar aplikasi !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.value) { 
            Wait();
            setTimeout(() => {
              Done();
              window.location.href = "login";
            }, 250);
        }
    });
  }
</script>
</body>
</html>
