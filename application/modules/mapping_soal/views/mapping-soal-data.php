<style>
#DataTable tbody tr td:nth-child(1),
#DataTable tbody tr td:nth-child(2),
#DataTable tbody tr td:nth-child(3),
#DataTable tbody tr td:nth-child(4) {
    text-align: center;
}
.box-jawaban p{
  margin-bottom: 0;
}
#DataTable p {
  margin-bottom: 0px;
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
                    <!-- <button type="button" class="btn btn-primary" ng-click="Add()">Tambah Data</button> -->
                    <button type="button" class="btn btn-info" ng-click="Refresh()">Refresh</button>
                    <!-- <button type="button" class="btn btn-danger" id="DeleteSelected" ng-click="DeleteSelected()">Hapus Pilihan</button> -->
                </div>
                <div class="row">        
                  <div class="col-md-6 offset-md-3">
                      <div class="form-group">
                        <label>Dimensi</label>
                        <select class="select2bs4" name="filter_dimensi_tingkat_id" ng-model="filter.dimensi_tingkat_id" style="width: 100%" ng-change="GetBaterai(filter.dimensi_tingkat_id)">
                          <option value="">Pilih</option>
                          <option value="{{value.id}}" ng-repeat="(key, value) in listDimensiTingkat">{{value.nama_dimensi}} {{value.nama_tingkat}}</option>
                        </select>
                      </div>
                  </div>        
                  <div class="col-md-6 offset-md-3">
                      <div class="form-group">
                        <label>Baterai</label>
                        <select class="select2bs4" name="filter_baterai_id" ng-model="filter.baterai_id" ng-change="FilterTable()" style="width: 100%">
                          <option value="">Pilih</option>
                          <option value="{{value.id}}" ng-repeat="(key, value) in listBaterai">{{value.nama_baterai}} ~ {{value.karakter_butir}}</option>
                        </select>
                      </div>
                  </div>
                </div>
                <table class="table table-bordered table-striped table-hover DataTable" id="DataTable" style="width: 100%">
                  <thead>
                    <tr>
                      <th width="1%" style="vertical-align: middle;" rowspan="2">No</th>
                      <!-- <th width="2%">#</th> -->
                      <th width="5%">Opsi</th>
                      <th width="5%">Nomor Soal</th>
                      <th width="5%">NIS</th>
                      <th width="">Soal</th>
                    </tr>
                    <tr>
<!--                       <th class="text-center">
                          <input type="checkbox" id="CheckAll" style="position: relative;left: 0px;opacity: 1;">
                      </th> -->
                      <th>#</th>
                      <th id="filter">nomor_soal</th>
                      <th id="filter">nis</th>
                      <th id="filter">soal</th>
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
                    <input type="hidden" name="baterai_id">
                    <div class="form-group">
                      <label>Soal</label>
                      <select class="select2bs4" name="banksoal_id" ng-model="form.banksoal_id" ng-change="GetBankSoalDetailAdd(form.banksoal_id);" style="width: 100%">
                        <option value="">Pilih NIS</option>
                        <option value="{{value.id}}" ng-repeat="(key, value) in listBanksoal">{{value.nis}} ~ {{value.jenis_soal}}</option>
                      </select>
                    </div>
                    <div class="form-group text-center">
                      <button type="button" class="btn btn-warning" ng-click="Box(1)">Batal</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="row" ng-show="form.banksoal_id">
                      <div class="col-lg-4">
                        <div class="table-responsive">
                          <table class="table-detail table" style="width: 100%">
                              <tr>
                                  <th>NIS</th>
                                  <th>:</th>
                                  <td>{{detailSoalAdd.nis}}</td>
                              </tr>
                              <tr>
                                  <th>Jenis Soal</th>
                                  <th>:</th>
                                  <td>{{detailSoalAdd.jenis_soal}}</td>
                              </tr>
                              <tr>
                                  <th>Created By</th>
                                  <th>:</th>
                                  <td>{{detailSoalAdd.created_by}}</td>
                              </tr>
                              <tr>
                                  <th>Created Date</th>
                                  <th>:</th>
                                  <td>{{detailSoalAdd.created_date}}</td>
                              </tr>
                          </table>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="card card-primary">
                          <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3">Detail Soal</h3>
                          </div>
                          <div class="card-body box-jawaban">
                            <div class="callout callout-default" ng-show="detailSoalAdd.jenis_soal == 'Normal'">
                              <h5>Soal</h5>
                              <p class="soal"></p>
                            </div>
                            <div class="callout callout-default" ng-show="detailSoalAdd.jenis_soal == 'Pertanyaan 1 & 2'">
                              <h5>Pertanyaan 1</h5>
                              <p class="soal_x"></p>
                            </div>
                            <div class="callout callout-danger" ng-class="{'box-benar':detailSoalAdd.jawaban == 'a'}">
                              <h5>A</h5>
                              <p class="a"></p>
                            </div>
                            <div class="callout callout-info" ng-class="{'box-benar':detailSoalAdd.jawaban == 'b'}">
                              <h5>B</h5>
                              <p class="b"></p>
                            </div>
                            <div class="callout callout-default" ng-show="detailSoalAdd.jenis_soal == 'Pertanyaan 1 & 2'">
                              <h5>Pertanyaan 2</h5>
                              <p class="soal_y"></p>
                            </div>
                            <div class="callout callout-warning" ng-class="{'box-benar':detailSoalAdd.jawaban == 'c'}">
                              <h5>C</h5>
                              <p class="c"></p>
                            </div>
                            <div class="callout callout-success" ng-class="{'box-benar':detailSoalAdd.jawaban == 'd'}">
                              <h5>D</h5>
                              <p class="d"></p>
                            </div>
                          </div>
                        </div>
                      </div>
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
                <div class="row">
                  <div class="col-lg-4">
                    <div class="table-responsive">
                      <table class="table-detail table" style="width: 100%">
                          <tr>
                              <th width="8%">Dimensi</th>
                              <th width="1%">:</th>
                              <td>{{detailData.nama_dimensi}}</td>
                          </tr>
                          <tr>
                              <th>Tingkat</th>
                              <th>:</th>
                              <td>{{detailData.nama_tingkat}}</td>
                          </tr>
                          <tr>
                              <th>Nama Baterai</th>
                              <th>:</th>
                              <td>{{detailData.nama_baterai}}</td>
                          </tr>
                          <tr>
                              <th>Karakter Butir</th>
                              <th>:</th>
                              <td>{{detailData.karakter_butir}}</td>
                          </tr>
                          <tr>
                              <th>Teslet</th>
                              <th>:</th>
                              <td>{{detailData.teslet}}</td>
                          </tr>
                          <tr>
                              <th>Nomor Urut</th>
                              <th>:</th>
                              <td>{{detailData.nomor_soal}}</td>
                          </tr>
                          <tr>
                              <th>NIS</th>
                              <th>:</th>
                              <td>{{detailSoal.nis}}</td>
                          </tr>
                          <tr>
                              <th>Jenis Soal</th>
                              <th>:</th>
                              <td>{{detailSoal.jenis_soal}}</td>
                          </tr>
                          <tr>
                              <th>Created By</th>
                              <th>:</th>
                              <td>{{detailSoal.created_by}}</td>
                          </tr>
                          <tr>
                              <th>Created Date</th>
                              <th>:</th>
                              <td>{{detailSoal.created_date}}</td>
                          </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="card card-primary">
                      <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">Detail Soal</h3>
                      </div>
                      <div class="card-body box-jawaban">
                        <div class="callout callout-default" ng-show="detailSoal.jenis_soal == 'Normal'">
                          <h5>Soal</h5>
                          <p class="soal"></p>
                        </div>
                        <div class="callout callout-default" ng-show="detailSoal.jenis_soal == 'Pertanyaan 1 & 2'">
                          <h5>Pertanyaan 1</h5>
                          <p class="soal_x"></p>
                        </div>
                        <div class="callout callout-danger" ng-class="{'box-benar':detailSoal.jawaban == 'a'}">
                          <h5>A</h5>
                          <p class="a"></p>
                        </div>
                        <div class="callout callout-info" ng-class="{'box-benar':detailSoal.jawaban == 'b'}">
                          <h5>B</h5>
                          <p class="b"></p>
                        </div>
                        <div class="callout callout-default" ng-show="detailSoal.jenis_soal == 'Pertanyaan 1 & 2'">
                          <h5>Pertanyaan 2</h5>
                          <p class="soal_y"></p>
                        </div>
                        <div class="callout callout-warning" ng-class="{'box-benar':detailSoal.jawaban == 'c'}">
                          <h5>C</h5>
                          <p class="c"></p>
                        </div>
                        <div class="callout callout-success" ng-class="{'box-benar':detailSoal.jawaban == 'd'}">
                          <h5>D</h5>
                          <p class="d"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="soal" style="padding: 10px;" ng-show="detailSoal.jenis_soal == 'Normal'"></div>
                <div class="table-responsive">
                  <table class="table table-detail" style="width: 100%">
                    <tr ng-show="detailSoal.jenis_soal == 'Pertanyaan 1 & 2'">
                      <th width="5%">Pertanyaan 1</th>
                      <th width="1%">:</th>
                      <td class="soal_x"></td>
                    </tr>
                    <tr>
                      <th width="5%">Opsi A</th>
                      <th width="1%">:</th>
                      <td class="a"></td>
                    </tr>
                    <tr>
                      <th>Opsi B</th>
                      <th>:</th>
                      <td class="b"></td>
                    </tr>
                    <tr ng-show="detailSoal.jenis_soal == 'Pertanyaan 1 & 2'">
                      <th>Pertanyaan 2</th>
                      <th>:</th>
                      <td class="soal_y"></td>
                    </tr>
                    <tr>
                      <th>Opsi C</th>
                      <th>:</th>
                      <td class="c"></td>
                    </tr>
                    <tr>
                      <th>Opsi D</th>
                      <th>:</th>
                      <td class="d"></td>
                    </tr>
                    <tr>
                      <th>Jawaban</th>
                      <th>:</th>
                      <td>{{detailSoal.jawaban}}</td>
                    </tr>
                  </table>
                </div> -->
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
    var base = "<?php echo site_url() ?>";
    var module_api = "<?php echo site_url() ?>mapping_soal/";
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
            $scope.GetBankSoal();
            $scope.GetDimensiTingkat();
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
                      Wait();
                      $timeout(function(){
                          $.ajax({
                              url: module_api+"set_soal",
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
                    "paging":true,
                    'order':[],
                    'ajax': {
                        url:module_api+'table',
                        type:"POST",
                        data:function(d){
                            d.baterai_id = $scope.filter.baterai_id;
                            d.nomor_soal = $scope.filter.nomor_soal;
                            d.nis = $scope.filter.nis;
                            d.soal = $scope.filter.soal;
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
                        // { "data": "id", 
                        //     render:function(data, type, row, meta){
                        //         return "<input type='checkbox' id='CheckboxRow' ng-click='CheckTotalCheckedDelete()' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                        //     },
                        // },
                        { "data": "opsi"},
                        { "data": "nomor_soal"},
                        { "data": "nis"},
                        { "data": "soal"},
                    ],
                    "columnDefs": [ 
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": [0,1],
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

        $scope.SetSoal = function(value) {
            $scope.ResetForm();
            $.ajax({
                url:base+"baterai/soal?id="+value,
                type:'GET',
                success:function(data){
                    if (data.error == 0) {
                        var d = data.data[0];
                        $('[name=id]').val(d.id);
                        $('[name=baterai_id]').val(d.baterai_id);
                        $('[name=banksoal_id]').val(d.banksoal_id);
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
                url:base+"baterai/soal?id="+value,
                type:'GET',
                success: function(data){
                    if (data.error == 0) {
                        var d = data.data[0];
                        $scope.detailData = d;
                        $scope.GetBankSoalDetail(d.banksoal_id);
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

        $scope.GetDimensiTingkat = function(){
          $scope.listDimensiTingkat = [];
          $.ajax({
              url:base+"dimensi/tingkat",
              type:'GET',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listDimensiTingkat = data.data;
                    $timeout(function(){
                      $('.select2bs4').select2({
                        theme: 'bootstrap4'
                      });
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

        $scope.GetBaterai = function(dimensi_tingkat_id){
          $scope.listBaterai = [];
          if (dimensi_tingkat_id != '') {
            $.ajax({
                url:base+"baterai/where",
                type:'GET',
                data:{
                  dimensi_tingkat_id:dimensi_tingkat_id,
                },
                success: function(data){
                    if (data.error == 0) {
                      $scope.listBaterai = data.data;
                      $timeout(function(){
                        $('.select2bs4').select2({
                          theme: 'bootstrap4'
                        });
                      }, 0);
                      $scope.$apply();
                    }
                },
                error:function(data){
                    toastr.error('<?php echo lang('error_method') ?>')        
                }
            });
          }else{
            $timeout(function(){
              $('.select2bs4').select2({
                theme:'bootstrap4'
              })
            }, 0);
            $scope.$apply();
          }
        }

        $scope.GetBankSoal = function(){
          $scope.listBanksoal = [];
          $.ajax({
              url:base+"banksoal/where",
              type:'GET',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listBanksoal = data.data;
                    $timeout(function(){
                      $('.select2bs4').select2({
                        theme: 'bootstrap4'
                      });
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

        $scope.GetBankSoalDetail = function(value){
          $scope.detailSoal = [];
          $.ajax({
              url:base+"banksoal/where",
              type:'GET',
              data:{
                id:value,
              },
              success: function(data){
                  if (data.error == 0) {
                    $scope.detailSoal = data.data[0];
                    $('.a').html(ConvertNull(data.data[0].a));
                    $('.b').html(ConvertNull(data.data[0].b));
                    $('.c').html(ConvertNull(data.data[0].c));
                    $('.d').html(ConvertNull(data.data[0].d));
                    $('.e').html(ConvertNull(data.data[0].e));
                    if (data.data[0].jenis_soal == 'Normal') {
                      $('.soal').html(ConvertNull(data.data[0].soal));
                    }else if (data.data[0].jenis_soal == 'Pertanyaan 1 & 2') {
                      $('.soal_x').html(ConvertNull(data.data[0].soal_x));
                      $('.soal_y').html(ConvertNull(data.data[0].soal_y));
                    }
                    $timeout(function(){
                      $('.select2bs4').select2({
                        theme: 'bootstrap4'
                      });
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

        $scope.GetBankSoalDetailAdd = function(value){
          $scope.detailSoalAdd = [];
          $.ajax({
              url:base+"banksoal/where",
              type:'GET',
              data:{
                id:value,
              },
              success: function(data){
                  if (data.error == 0) {
                    $scope.detailSoalAdd = data.data[0];
                    $('#box2 .a').html(ConvertNull(data.data[0].a));
                    $('#box2 .b').html(ConvertNull(data.data[0].b));
                    $('#box2 .c').html(ConvertNull(data.data[0].c));
                    $('#box2 .d').html(ConvertNull(data.data[0].d));
                    $('#box2 .e').html(ConvertNull(data.data[0].e));
                    if (data.data[0].jenis_soal == 'Normal') {
                      $('#box2 .soal').html(ConvertNull(data.data[0].soal));
                    }else if (data.data[0].jenis_soal == 'Pertanyaan 1 & 2') {
                      $('#box2 .soal_x').html(ConvertNull(data.data[0].soal_x));
                      $('#box2 .soal_y').html(ConvertNull(data.data[0].soal_y));
                    }
                    $timeout(function(){
                      $('.select2bs4').select2({
                        theme: 'bootstrap4'
                      });
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

    })

</script>
