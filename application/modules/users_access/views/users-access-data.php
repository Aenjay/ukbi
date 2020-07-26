<style type="text/css" media="screen">
  input[type=checkbox] {
      transform: scale(2);
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
                <form id="form">
                  <div class="form-group">
                      <button type="button" class="btn btn-info" ng-click="Refresh()">Refresh</button>
                  </div>
                  <div class="row">        
                    <div class="col-md-4 offset-md-4">
                        <div class="form-group">
                          <label>Users Level</label>
                          <select class="select2bs4" name="filter_users_level_id" ng-model="filter.users_level_id" ng-change="FilterTable()" style="width: 100%">
                            <option value="">Pilih</option>
                            <?php foreach ($listUsersLevel->result() as $value): ?>
                              <option value="<?php echo $value->id ?>"><?php echo $value->name_level ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-success btn-save-multiple" ng-click="Save()" ng-disabled="!filter.users_level_id"><?php echo lang('save') ?></button>
                        </div>
                    </div>
                  </div>

                  <table class="table table-bordered table-striped table-hover DataTable" id="DataTable" style="width: 100%">
                      <thead class="text-primary">
                          <tr>
                              <th width="1%" style="vertical-align: middle;" rowspan="2"><?php echo lang('number') ?></th>
                              <th width="5%" rowspan="2">Kode Menu</th>
                              <th rowspan="2">Nama Menu</th>
                              <th width="20%" rowspan="2">URL</th>
                              <th width="20%" rowspan="2">Urutan</th>
                              <th width="5%" rowspan="2">Icon</th>
                              <th width="5%"><?php echo lang('show') ?></th>
                              <th width="5%"><?php echo lang('add') ?></th>
                              <th width="5%"><?php echo lang('edit') ?></th>
                              <th width="5%"><?php echo lang('detail') ?></th>
                              <th width="5%"><?php echo lang('delete') ?></th>
                          </tr>
                          <tr>
                              <th>
                                  <input type="checkbox" id="CheckAllShow" style="position: relative;left: 0px;opacity: 1;">
                              </th>
                              <th>
                                  <input type="checkbox" id="CheckAllAdd" style="position: relative;left: 0px;opacity: 1;">
                              </th>
                              <th>
                                  <input type="checkbox" id="CheckAllEdit" style="position: relative;left: 0px;opacity: 1;">
                              </th>
                              <th>
                                  <input type="checkbox" id="CheckAllDetail" style="position: relative;left: 0px;opacity: 1;">
                              </th>
                              <th>
                                  <input type="checkbox" id="CheckAllDelete" style="position: relative;left: 0px;opacity: 1;">
                              </th>
                          </tr>
                      </thead>
                  </table>
                </form>
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
    var module_api = "<?php echo site_url() ?>users_access/";
    var box1 = $('#box1');
    var box2 = $('#box2');
    var box3 = $('#box3');
    app.run(['$rootScope', '$http', '$window', '$timeout', '$filter', function ($rootScope, $http, $window, $timeout, $filter) {
    }])
    app.controller('MasterController', function ($scope, $compile, $timeout, $http, $rootScope, $filter) {
        $scope.form = {};
        $scope.filter = {};

        $scope.InitFunction = function(){
            $scope.Box(1);
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
            $timeout(function() {
                table = $('#DataTable').DataTable({
                    'lengthMenu':[[10, 25, 50, 100, 200, 350, -1], [10, 25, 50, 100, 200, 350, "All"]],
                    "language": {
                        "lengthMenu": "<?php echo lang('show') ?> _MENU_ <?php echo lang('entries') ?>",
                        // "zeroRecords": "Tidak ada data",
                        "info": "<?php echo lang('showing') ?> _PAGE_ <?php echo lang('to') ?> _PAGES_",
                        // "infoEmpty": "No records available",
                        "infoEmpty":"<?php echo lang('is_empty_table') ?>",
                        "infoFiltered": "(<?php echo lang('filtered_from') ?> _MAX_ <?php echo lang('total_record') ?>)",
                        "search": "<?php echo lang('search') ?>",
                        "emptyTable": "<center><?php echo lang('no_data_table') ?></center>",
                        "processing":'<i class="fa fa-refresh fa-spin fa-3x fa-fw" style="font-size:20pt"></i>',
                        "paginate": {
                            "first":"<?php echo lang('first') ?>",
                            "last":"<?php echo lang('last') ?>",
                            "next":"<?php echo lang('next') ?>",
                            "previous":"<?php echo lang('previous') ?>"
                        },
                    },
                    'searching' : false,
                    'processing' : true,
                    'serverSide' : true,
                    "orderCellsTop": true,
                    "paging":false,
                    'ordering':false,
                    'ajax': {
                        url:module_api+'table',
                        type:"POST",
                        data:function(d){
                            d.users_level_id = $scope.filter.users_level_id;
                        },
                        "error":function (jqXHR) {
                            toastr.error('Error Load Data on Table');
                        }
                    },
                    "fnDrawCallback": function( oSettings ) {
                        $scope.CheckTotalChecked('#CheckAllShow', '#CheckSubShow');
                        $scope.CheckTotalChecked('#CheckAllAdd', '#CheckSubAdd');        
                        $scope.CheckTotalChecked('#CheckAllDetail', '#CheckSubDetail');
                        $scope.CheckTotalChecked('#CheckAllEdit', '#CheckSubEdit');
                        $scope.CheckTotalChecked('#CheckAllDelete', '#CheckSubDelete');                        
                        var CountData = (table.page.info().recordsTotal);
                        if (CountData > 0) {
                            $('.btn-save-multiple').fadeIn(0);
                        }else{
                            $(".btn-save-multiple").fadeOut(0);
                        }
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
                        { "data": "kode_menu"},
                        { "data": "name_menu"},
                        { "data": "url"},
                        { "data": "sequence"},
                        { "data": "icon"},
                        { "data": null, 
                            render:function(data, type, row, meta){
                                var checkedcheck = "checked";
                                if (row.show == '0') {
                                    checkedcheck = "";
                                }
                                var opsi = "<input type='checkbox' id='CheckSubShow' "+checkedcheck+" ng-click='CheckTotalChecked(\"#CheckAllShow\", \"#CheckSubShow\")' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                                return "<center>"+opsi+"</center>";
                            },
                        },
                        { "data": null, 
                            render:function(data, type, row, meta){
                                var checkedcheck = "checked";
                                if (row.add == '0') {
                                    checkedcheck = "";
                                }
                                var opsi = "<input type='checkbox' id='CheckSubAdd' "+checkedcheck+" ng-click='CheckTotalChecked(\"#CheckAllAdd\", \"#CheckSubAdd\")' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                                return "<center>"+opsi+"</center>";
                            },
                        },
                        { "data": null, 
                            render:function(data, type, row, meta){
                                var checkedcheck = "checked";
                                if (row.edit == '0') {
                                    checkedcheck = "";
                                }
                                var opsi = "<input type='checkbox' id='CheckSubEdit' "+checkedcheck+" ng-click='CheckTotalChecked(\"#CheckAllEdit\", \"#CheckSubEdit\")' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                                return "<center>"+opsi+"</center>";
                            },
                        },
                        { "data": null, 
                            render:function(data, type, row, meta){
                                var checkedcheck = "checked";
                                if (row.detail == '0') {
                                    checkedcheck = "";
                                }
                                var opsi = "<input type='checkbox' id='CheckSubDetail' "+checkedcheck+" ng-click='CheckTotalChecked(\"#CheckAllDetail\", \"#CheckSubDetail\")' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                                return "<center>"+opsi+"</center>";
                            },
                        },
                        { "data": null, 
                            render:function(data, type, row, meta){
                                var checkedcheck = "checked";
                                if (row.delete == '0') {
                                    checkedcheck = "";
                                }
                                var opsi = "<input type='checkbox' id='CheckSubDelete' "+checkedcheck+" ng-click='CheckTotalChecked(\"#CheckAllDelete\", \"#CheckSubDelete\")' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                                return "<center>"+opsi+"</center>";
                            },
                        },
                    ],
                });
                $('#DataTable').wrap("<div class='table-responsive'></div>");
                $("#CheckAllShow").click(function () {
                    $('#DataTable').find('input#CheckSubShow').not(this).prop('checked', this.checked);
                });
                $("#CheckAllAdd").click(function () {
                    $('#DataTable').find('input#CheckSubAdd').not(this).prop('checked', this.checked);
                });
                $("#CheckAllDetail").click(function () {
                    $('#DataTable').find('input#CheckSubDetail').not(this).prop('checked', this.checked);
                });
                $("#CheckAllEdit").click(function () {
                    $('#DataTable').find('input#CheckSubEdit').not(this).prop('checked', this.checked);
                });
                $("#CheckAllDelete").click(function () {
                    $('#DataTable').find('input#CheckSubDelete').not(this).prop('checked', this.checked);
                });
                $('#DeleteSelected').fadeOut(0);
            });
        }

        $scope.ResetValidation = function(){
            $('#form').find('.validation-field').remove();
        }

        $scope.Box = function(box) {
            if (box == 1) {
                addAnimate(box1);
                box1.fadeIn(0);
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

        $scope.CheckTotalChecked = function(all, sub) {
            var TotalOfCheckBoxRow = $('input'+sub).length;
            var TotalOfChecked = $('input'+sub+':checked').length;
            if (TotalOfChecked > 0) {
                if (TotalOfCheckBoxRow == TotalOfChecked) {
                    $(all).prop('checked', true);
                }else{
                    $(all).prop('checked', false);
                }
            }else{
                $(all).prop('checked', false);
            }
        }

        $scope.Save = function(){
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
                    var ValShow = [];
                    var ValAdd = [];
                    var ValDetail = [];
                    var ValEdit = [];
                    var ValDelete = [];
                    $('#CheckSubShow:checked').each(function() {
                        ValShow.push($(this).attr('data-id'));
                    });
                    $('#CheckSubAdd:checked').each(function() {
                        ValAdd.push($(this).attr('data-id'));
                    });
                    $('#CheckSubDetail:checked').each(function() {
                        ValDetail.push($(this).attr('data-id'));
                    });
                    $('#CheckSubEdit:checked').each(function() {
                        ValEdit.push($(this).attr('data-id'));
                    });
                    $('#CheckSubDelete:checked').each(function() {
                        ValDelete.push($(this).attr('data-id'));
                    });
                    Wait();
                    $timeout(function(){
                        $.ajax({
                            url: module_api+"save",
                            method:'post',
                            data:{access_show:ValShow, access_add:ValAdd, access_detail:ValDetail, access_edit:ValEdit, access_delete:ValDelete, users_level_id:$scope.filter.users_level_id},
                            success:function(data){
                                if (data.error == 0) {
                                    table.ajax.reload(null, false);
                                    toastr.success(data.message);
                                }else{
                                    toastr.warning(data.message)
                                }
                            },
                            error:function(data){
                              toastr.error("Error Function");
                            }
                        });
                    }, 250);
                }
            })
        }
    })
</script>