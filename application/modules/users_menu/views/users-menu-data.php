<style type="text/css" media="screen">
  #DataTable tbody tr td:nth-child(1),
  #DataTable tbody tr td:nth-child(2),
  #DataTable tbody tr td:nth-child(7) {
      text-align: center;
  }
  .table-icon tr th{
      padding: 0px 3px;
  }
  .table-icon tr th i{
      font-size: 45pt;
  }
</style>
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
                    <button type="button" class="btn btn-primary" ng-click="Add()">Tambah Data</button>
                    <button type="button" class="btn btn-info" ng-click="Refresh()">Refresh</button>
                    <button type="button" class="btn btn-danger" id="DeleteSelected" ng-click="DeleteSelected()">Hapus Pilihan</button>
                </div>
                <table class="table table-bordered table-striped table-hover DataTable" id="DataTable" style="width: 100%">
                    <thead>
                        <tr>
                            <th width="1%" style="vertical-align: middle;" rowspan="2">No</th>
                            <th width="4%">#</th>
                            <th width="7%">Opsi</th>
                            <th width="20%">Kode Menu</th>
                            <th width="">Name Menu</th>
                            <th width="20%">Url</th>
                            <th width="5%">Sequence</th>
                            <th width="5%">Icon</th>
                        </tr>
                        <tr>
                            <th class="text-center">
                                <input type="checkbox" id="CheckAll" style="position: relative;left: 0px;opacity: 1;">
                            </th>
                            <th>#</th>
                            <th id="filter">kode_menu</th>
                            <th id="filter">name_menu</th>
                            <th id="filter">url</th>
                            <th id="filter">sequence</th>
                            <th id="filter">icon</th>
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
                      <label>Kode Menu</label>
                      <input type="text" class="form-control" name="kode_menu" ng-model="form.kode_menu" placeholder="Enter Kode Menu" required>
                    </div>
                    <div class="form-group">
                      <label>Nama Menu</label>
                      <input type="text" class="form-control" name="name_menu" ng-model="form.name_menu"  placeholder="Enter Nama Menu" required>
                    </div>
                    <div class="form-group">
                      <label>URL</label>
                        <input type="text" class="form-control" name="url" ng-model="form.url" placeholder="Enter URL" required>
                    </div>
                    <div class="form-group">
                      <label>Parent</label>
                      <select class="select2bs4" name="rel" ng-model="form.rel" style="width: 100%" required>
                          <option value="">Pilih</option>
                          <option value="0">Tidak Ada</option>
                          <?php foreach ($menu->result() as $d): ?>
                              <option value="<?php echo $d->id ?>"><?php echo $d->name_menu ?></option>
                              <?php foreach ($this->m->GetMenuSub($d->id)->result() as $s): ?>
                                  <option value="<?php echo $s->id ?>">===<?php echo $s->name_menu ?></option>
                                  <?php foreach ($this->m->GetMenuSub($s->id)->result() as $m): ?>
                                      <option value="<?php echo $m->id ?>">======<?php echo $m->name_menu ?></option>
                                  <?php endforeach ?>
                              <?php endforeach ?>
                          <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sequence</label>
                      <input type="text" class="form-control" name="sequence" ng-model="form.sequence" placeholder="Sequence" required>
                    </div>
                    <label>Icon</label>
                    <div class="form-group">
                        <div class="table-responsive">
                            <table class="table-icon">
                                <tr>
                                    <?php foreach ($icon as $value): ?>
                                        <th class="text-center">
                                            <i class="fa fa-<?php echo $value ?>"></i></br>
                                            <input type="radio" name="icon" value="<?php echo $this->model->select_data($value)?>">
                                        </th>
                                    <?php endforeach ?>
                                </tr>
                            </table>
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
                <div class="table-responsive">
                    <table class="table-detail table" style="width: 100%">
                        <tr>
                            <th width="8%">Kode Menu</th>
                            <th width="1%">:</th>
                            <th>{{detailData.kode_menu}}</th>
                        </tr>
                        <tr>
                            <th>Nama Menu</th>
                            <th>:</th>
                            <th>{{detailData.name_menu}}</th>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <th>:</th>
                            <th>{{detailData.url}}</th>
                        </tr>
                        <tr>
                            <th>Parent</th>
                            <th>:</th>
                            <th>{{detailData.parent_name}}</th>
                        </tr>
                        <tr>
                            <th>Sequence</th>
                            <th>:</th>
                            <th>{{detailData.sequence}}</th>
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
    var module_api = "<?php echo site_url() ?>users_menu/";
    var box1 = $('#box1');
    var box2 = $('#box2');
    var box3 = $('#box3');
    app.run(['$rootScope', '$http', '$window', '$timeout', '$filter', function ($rootScope, $http, $window, $timeout, $filter) {
    }])
    app.controller('MasterController', function ($scope, $compile, $timeout, $http, $rootScope, $filter) {
        $scope.form = {};
        $scope.filter = {};
        $scope.save_type = "Add";

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
                      }, 250);
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
                    "paging":false,
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
                        { "data": "kode_menu"},
                        { "data": "name_menu"},
                        { "data": "url"},
                        { "data": "sequence"},
                        { "data": "icon"},
                    ],
                    "columnDefs": [ 
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": [0,1,2],
                        },
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
                        $('[name=kode_menu]').val(d.kode_menu);
                        $('[name=name_menu]').val(ConvertNull(d.name_menu));
                        $('[name=url]').val(d.url);
                        $('[name=rel]').val(d.rel);
                        $('[name=sequence]').val(d.sequence);
                        $('input[name=icon]').filter('[value='+d.icon+']').prop('checked', true);
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
                }, 250);
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

    })

</script>