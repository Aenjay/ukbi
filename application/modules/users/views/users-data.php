
<link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<script src="<?php echo site_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<div ng-app="ModuleController" ng-controller="MasterController" ng-init="InitFunction()">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $module ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $module ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row" id="box1" style="display: none;">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">List Data</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <?php if ($this->model->CheckAllowAccess($this->kode_menu, "add")): ?>
                      <button type="button" class="btn btn-primary" ng-click="Add()">Tambah Data</button>
                    <?php endif ?>
                    <button type="button" class="btn btn-info" ng-click="Refresh()">Refresh</button>
                    <?php if ($this->model->CheckAllowAccess($this->kode_menu, "delete")): ?>
                      <button type="button" class="btn btn-danger" id="DeleteSelected" ng-click="DeleteSelected()">Hapus Pilihan</button>
                    <?php endif ?>
                </div>
                <table class="table table-bordered table-striped table-hover DataTable" id="DataTable" style="width: 100%">
                  <thead>
                    <tr>
                      <th width="1%" style="vertical-align: middle;" rowspan="2">No</th>
                      <th width="2%">#</th>
                      <th width="5%">Opsi</th>
                      <th width="">Nama User</th>
                      <th width="5%">Email</th>
                      <th width="5%">Level</th>
                      <th width="5%">Status</th>
                    </tr>
                    <tr>
                      <th class="text-center">
                          <input type="checkbox" id="CheckAll" style="position: relative;left: 0px;opacity: 1;">
                      </th>
                      <th>#</th>
                      <th id="filter">name_user</th>
                      <th id="filter">email</th>
                      <th id="filter">name_level</th>
                      <th>
                        <select class="form-control" name="filter_status" ng-model="filter.status" ng-change="FilterTable()">
                          <option value="">Pilih</option>
                          <option value="Aktif">Aktif</option>
                          <option value="Nonaktif">Nonaktif</option>
                        </select>
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="box2" style="display: none;">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">{{ (save_type == 'Add') ? 'Tambah Data' : 'Edit Data'}}</h3>
              </div>
                <div class="card-body">
                  <form id="form">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" name="id">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name_user" ng-model="form.name_user" placeholder="Enter Nama" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" ng-model="form.email"  placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                      <label>No. Hp</label>
                      <input type="text" class="form-control" name="no_hp" ng-model="form.no_hp"  placeholder="Enter No. Hp">
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                      <select class="select2bs4" name="users_level_id" ng-model="form.users_level_id" required style="width: 100%;">
                        <option value="">Pilih</option>
                        <?php foreach ($listUsersLevel->result() as $value): ?>
                          <option value="<?php echo $value->id ?>"><?php echo $value->name_level ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select class="select2bs4" name="status" ng-model="form.status" required style="width: 100%;">
                        <option value="">Pilih</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" ng-model="form.password" placeholder="Password" ng-required="save_type == 'Add'">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password" ng-model="form.confirm_password"  placeholder="Confirm Password" ng-required="form.password">
                    </div>
                    <div class="form-group">
                      <label>File Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="file">
                          <label class="custom-file-label">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group text-center">
                      <button type="button" class="btn btn-warning" ng-click="Box(1)">Batal</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <div class="row" id="box3" style="display: none;">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Detail Data</h3>
              </div>
              <div class="card-body">
                <div class="form-group text-center">
                  <button class="btn btn-warning" ng-click="Box(1)">Kembali</button>
                </div>
                <center>
                    <div class="col-md-2" style="margin-bottom: 20px;">
                        <img ng-src="{{file_last}}" class="img-thumbnail">
                    </div>
                </center>
                <div class="table-responsive">
                    <table class="table-detail table" style="width: 100%">
                        <tr>
                            <th width="8%">Nama</th>
                            <th width="1%">:</th>
                            <th>{{detailData.name_user}}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <th>{{detailData.email}}</th>
                        </tr>
                        <tr>
                            <th>No. Hp</th>
                            <th>:</th>
                            <th>{{detailData.no_hp}}</th>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <th>:</th>
                            <th>{{detailData.name_level}}</th>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>:</th>
                            <th>{{detailData.status}}</th>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
    var app = angular.module('ModuleController',[]);
    var table = "";
    var module_api = "<?php echo site_url() ?>users/";
    var box1 = $('#box1');
    var box2 = $('#box2');
    var box3 = $('#box3');
    app.run(['$rootScope', '$http', '$window', '$timeout', '$filter', function ($rootScope, $http, $window, $timeout, $filter) {
    }])
    app.controller('MasterController', function ($scope, $compile, $timeout, $http, $rootScope, $filter) {
        $scope.form = {};
        $scope.filter = {};
        $scope.save_type = "Add";
        $scope.file_last = "<?php echo site_url('assets/dist/img/no-foto.png') ?>";

        $scope.InitFunction = function(){
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
            $scope.Box(1);
            $('#form').on("submit", function(event){
                event.preventDefault();
                Swal.fire({
                  title: 'Save Data?',
                  text: "Pastikan data sudah benar !",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes'
                }).then((result) => {
                  if (result.value) { 
                      var url;
                      if ($scope.save_type == "Add") {
                          var url = "add"
                      }else{
                          var url = "update"
                      }
                      Wait();
                      $timeout(function(){
                          $.ajax({
                              url: module_api+url,
                              data: new FormData($('#form')[0]),
                              type: 'post',
                              contentType: false,
                              processData: false,
                              async: false,
                              dataType: 'json',
                              success:function(data){
                                  if (data.error == 0) {
                                      $scope.ResetForm();
                                      table.ajax.reload(null, false);
                                      $scope.Box(1);
                                      toastr.success(data.message);
                                  }else if (data.error == 1) {
                                      $.each(data.error_validation, function(key, value){
                                          // ValidationPopover('[name='+key+']', value);
                                          ValidationField('[name='+key+']', value);
                                      });
                                      toastr.warning(data.message);
                                  }else{
                                      toastr.warning(data.message);
                                  }
                              },
                              error:function(data){
                                  toastr.error(data.message);
                              }
                          });
                      }, 300);
                    }
                });
            });
            $timeout(function() {
                table = $('#DataTable').DataTable({
                    'lengthMenu':[[10, 25, 50, 100, 200, 350, -1], [10, 25, 50, 100, 200, 350, "All"]],
                    "language": {
                      // "lengthMenu": "Menampilkan _MENU_ data / page",
                      // "zeroRecords": "Tidak ada data",
                      // "info": "Menunjukan halaman _PAGE_ dari _PAGES_",
                      // "infoEmpty": "No records available",
                      // "infoFiltered": "(filtered from _MAX_ total records)",
                      // "search": "Cari",
                      "emptyTable": "<center>No data available in table</center>",
                      "processing":'<i class="fa fa-sync fa-spin fa-3x fa-fw" style="font-size:20pt"></i>',
                    },
                    'searching' : true,
                    'processing' : true,
                    'serverSide' : true,
                    "orderCellsTop": true,
                    "paging":true,
                    'order':[],
                    'ajax': {
                        url:module_api+'table',
                        type:"POST",
                        data:function(d){
                            d.name_user = $scope.filter.name_user;
                            d.email = $scope.filter.email;
                            d.name_level = $scope.filter.name_level;
                            d.status = $scope.filter.status;
                        },
                        "error":function (jqXHR) {
                            toastr.error('Error Load Data on Table');
                        }
                    },
                    "fnDrawCallback": function( oSettings ) {
                        $('#DataTable').find('input:checkbox').prop('checked', false);
                        $scope.CheckTotalCheckedDelete();
                    },
                    "createdRow":function(row, data, index){
                        $compile(row)($scope);
                    },
                    "columns": [
                        {   "data": null,
                            render: function (data, type, row, meta) {
                                return +meta.row + meta.settings._iDisplayStart + 1;
                            },
                        },
                        { "data": "id", 
                            render:function(data, type, row, meta){
                                return "<input type='checkbox' id='CheckboxRow' ng-click='CheckTotalCheckedDelete()' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                            },
                        },
                        { "data": "opsi"},
                        { "data": "name_user"},
                        { "data": "email"},
                        { "data": "name_level"},
                        { "data": "status"},
                    ],
                    "columnDefs": [ 
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": [0,1,2],
                        },  
                        <?php if (!$this->model->CheckAllowPermission($this->kode_menu, "delete")): ?>
                            {
                                "targets": [1],
                                "visible": false
                            }
                        <?php endif ?>
                    ],
                });
                $('#DataTable').wrap("<div class='table-responsive'></div>");
                $('#DataTable #filter').each( function () {
                    $(this).html($compile('<input type="text" class="form-control" placeholder="Search Column" style="width:100%;" ng-model="filter.'+$(this).text()+'" ng-keyup="FilterTable()"/>')($scope));
                });
                $('#DeleteSelected').fadeOut(0);
                $("#CheckAll").click(function () {
                    $('#DataTable').find('input:checkbox').not(this).prop('checked', this.checked);
                    $scope.CheckTotalCheckedDelete();
                });
            });
        }

        $scope.Reset = function(){
            if ($scope.save_type == "Update") {
                $scope.ResetForm();
            }
            $timeout(function(){
                $('.select2bs4').select2({
                  theme: 'bootstrap4'
                });
            });
        }

        $scope.ResetValidation = function(){
            $('#form').find('.validation-field').remove();
        }

        $scope.ResetForm = function(){
            $('#form')[0].reset();
            $scope.form = {};
            $scope.ResetValidation();
            $timeout(function() {
                $('.select2bs4').select2({
                  theme: 'bootstrap4'
                });
            });
        }

        $scope.Box = function(box) {
            if (box == 1) {
                addAnimate(box1);
                box1.fadeIn(0);         
                box2.fadeOut(0);
                box3.fadeOut(0);
            }else if(box == 2){
                addAnimate(box2, 'slideInRight');
                box1.fadeOut(0);
                box2.fadeIn(0);
            }else if(box == 3){
                addAnimate(box3, 'slideInRight');
                box1.fadeOut(0);
                box3.fadeIn(0);
            }
        }

        $scope.Refresh = function(){
            $('#btn-refresh').find('i').addClass('fa-spin');
            $scope.filter = {};
            $('#DataTable thead tr input').val("");
            $('#btn-refresh').find('i').removeClass('fa-spin');
            $timeout(function(){
                table.search("").draw();
                $('.select2bs4').select2({
                  theme: 'bootstrap4'
                });
            });
        }

        $scope.FilterTable = function(){
            table.ajax.reload(null, true);
        }

        $scope.CheckTotalCheckedDelete = function() {
            var TotalOfCheckBoxRow = $('input#CheckboxRow').length;
            var TotalOfChecked = $('input#CheckboxRow:checked').length;
            if (TotalOfChecked > 0) {
                $('#DeleteSelected').fadeIn(0);
                if (TotalOfCheckBoxRow == TotalOfChecked) {
                    $('#CheckAll').prop('checked', true);
                }else{
                    $('#CheckAll').prop('checked', false);
                }
            }else{
                $('#DeleteSelected').fadeOut(0);
                $('#CheckAll').prop('checked', false);
            }
        }

        $scope.Add = function(){
            $scope.Box(2);
            $scope.Reset();
            $scope.save_type = "Add";
            $('[name=password]').attr('required', true);
        }

        $scope.Edit = function(value) {
            $scope.ResetForm();
            $.ajax({
                url:module_api+"where?id="+value,
                type:'GET',
                success:function(data){
                    if (data.error == 0) {
                        var d = data.data[0];
                        $('[name=id]').val(d.id);
                        $('[name=name_user]').val(d.name_user);
                        $('[name=email]').val(ConvertNull(d.email));
                        $('[name=no_hp]').val(ConvertNull(d.no_hp));
                        $('[name=users_level_id]').val(ConvertNull(d.users_level_id));
                        $('[name=status]').val(ConvertNull(d.status));
                        if (d.file != '' && d.file) {
                            $scope.file_last = "<?php echo site_url('uploads/users/foto/') ?>"+d.file;
                        }else{
                            $scope.file_last = "<?php echo site_url('assets/dist/img/no-foto.png') ?>";
                        }
                        $scope.save_type = "Update";
                        $timeout(function(){
                            $('.select2bs4').select2({
                              theme: 'bootstrap4'
                            });
                            $scope.Box(2);
                        });
                        $scope.$apply();
                    }else{
                        toastr.warning(data.message);
                    }
                },
                error:function(data){
                    toastr.error('<?php echo lang('error_method') ?>')
                }
            });
        }

        $scope.Detail = function(value){
            $scope.detailData = {};
            $.ajax({
                url:module_api+"where?id="+value,
                type:'GET',
                success: function(data){
                    if (data.error == 0) {
                        var d = data.data[0];
                        $scope.detailData = d;
                        if (d.file != '' && d.file) {
                            $scope.file_last = "<?php echo site_url('uploads/users/foto/') ?>"+d.file;
                        }else{
                            $scope.file_last = "<?php echo site_url('assets/dist/img/no-foto.png') ?>";
                        }
                        $timeout(function(){
                            $scope.Box(3);
                        }, 0);
                        $scope.$apply();
                    }else{
                        toastr.warning(data.message);        
                    }
                },
                error:function(data){
                    toastr.error('<?php echo lang('error_method') ?>')        
                }
            });
        }

        $scope.Delete = function(value) {
            Swal.fire({
              title: 'Hapus Data ?',
              text: "",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
            }).then((result) => {
              if (result.value) { 
                Wait();
                $timeout(function(){
                    $.ajax({
                        url:module_api+"delete/"+value,
                        method:'delete',
                        success:function(data){
                            if (data.error == 0) {
                                table.ajax.reload(null, false);
                                toastr.success(data.message);        
                            }else{
                                toastr.warning(data.message);        
                            }
                        },
                        error:function(data){
                            toastr.error("Error Function");        
                        }
                    });
                }, 300);
              }
            });
        }

        $scope.DeleteSelected = function(){
            Swal.fire({
              title: 'Hapus Data ?',
              text: "Data yang dipilih akan dihapus !",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
            }).then((result) => {
              if (result.value) {        
                    var ValChecked = [];
                    $('#CheckboxRow:checked').each(function() {
                        ValChecked.push($(this).attr('data-id'));
                    });
                    $.ajax({
                        url: module_api+"delete_selected",
                        method:'post',
                        data:{id:ValChecked},
                        success:function(data){
                            if (data.error == 0) {
                                table.ajax.reload(null, false);
                                toastr.success(data.message);        
                            }else{
                                toastr.warning(data.message);        
                            }
                        },
                        error:function(data){
                            toastr.error("Error Function");        
                        }
                    });
                }
            })
        }

        $scope.ResetPassword = function(value) {
            swal({
                title: "",
                text: "<?php echo lang('reset_password') ?> ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "<?php echo lang('yes') ?>",
                cancelButtonText: "<?php echo lang('no') ?>",
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',  
                focusConfirm:true,    
                closeOnClickOutside:false,
                showLoaderOnConfirm: true,
                buttonsStyling: false,
            }).then((result) => {
                if (result.value) {
                    Wait();
                    $timeout(function(){
                        $.ajax({
                            url:module_api+"reset/"+value,
                            method:'put',
                            success:function(data){
                                if (data.error == 0) {
                                    table.ajax.reload(null, false);
                                    Swal.fire(
                                        '<?php echo lang('reset_password') ?>!',
                                        '<?php echo lang('success_reset_password') ?> <br><br> <b>'+data.password+'</b>',
                                        'success'
                                    )
                                }else{
                                    notify('warning', data.message);
                                }
                            },
                            error:function(data){
                                notify('danger', '<?php echo lang('error_method') ?>')
                            }
                        });
                    }, 300);
                }
            });
        }

        $scope.LoginAs = function(value) {
            swal({
                title: "",
                text: "<?php echo lang('login_as') ?> ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "<?php echo lang('yes') ?>",
                cancelButtonText: "<?php echo lang('no') ?>",
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',  
                focusConfirm:true,    
                closeOnClickOutside:false,
                showLoaderOnConfirm: true,
                buttonsStyling: false,
            }).then((result) => {
                if (result.value) {
                    Wait();
                    $timeout(function(){
                        $.ajax({
                            url:module_api+"login_as/"+value,
                            method:'post',
                            success:function(data){
                                if (data.error == 0) {
                                    notify('success', data.message);
                                    $timeout(function(){
                                        window.location.href = "<?php echo site_url() ?>dashboard";
                                    }, 1000);
                                }else{
                                    notify('warning', data.message);
                                }
                            },
                            error:function(data){
                                notify('danger', '<?php echo lang('error_method') ?>')
                            }
                        });
                    }, 300);
                }
            });
        }

    })

</script>
