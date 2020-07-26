<style>
#DataTable tbody tr td:nth-child(1),
#DataTable tbody tr td:nth-child(2),
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
<script src="<?php echo site_url('assets/') ?>plugins/tinymce/tinymce.js"></script>
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
                      <th width="2%">#</th>
                      <th width="5%">Opsi</th>
                      <th width="5%">NIS</th>
                      <th width="5%">Jenis Soal</th>
                      <th width="">Soal</th>
                    </tr>
                    <tr>
                      <th class="text-center">
                          <input type="checkbox" id="CheckAll" style="position: relative;left: 0px;opacity: 1;">
                      </th>
                      <th>#</th>
                      <th id="filter">nis</th>
                      <th id="filter">jenis_soal</th>
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
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>NIS</label>
                          <input type="number" class="form-control" name="nis" ng-model="form.nis" placeholder="Enter NIS" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Jenis Soal</label>
                          <select class="select2bs4" name="jenis_soal" ng-model="form.jenis_soal" style="width: 100%" required>
                            <option value="">Pilih</option>
                            <option value="Normal">Normal</option>
                            <option value="Pertanyaan 1 & 2">Pertanyaan 1 & 2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div ng-show="form.jenis_soal == 'Normal'">
                      <div class="form-group">
                        <label class="">Soal</label>
                        <textarea class="texteditor" name="normal_soal" id="normal_soal" ng-model="form.soal"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="">Opsi A</label>
                        <textarea class="texteditor" name="normal_a" id="normal_a" ng-model="form.normal_a"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="">Opsi B</label>
                        <textarea class="texteditor" name="normal_b" id="normal_b" ng-model="form.normal_b"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="">Opsi C</label>
                        <textarea class="texteditor" name="normal_c" id="normal_c" ng-model="form.normal_c"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="">Opsi D</label>
                        <textarea class="texteditor" name="normal_d" id="normal_d" ng-model="form.normal_d"></textarea>
                      </div>
                    </div>
                    <div ng-show="form.jenis_soal == 'Pertanyaan 1 & 2'">
                      <div class="form-group">
                        <label class="">Pertanyaan 1</label>
                        <textarea class="texteditor" name="xy_soal_x" id="xy_soal_x" ng-model="form.xy_soal_x"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="">Opsi A</label>
                            <textarea class="texteditor" name="xy_a" id="xy_a" ng-model="form.xy_a"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="">Opsi B</label>
                            <textarea class="texteditor" name="xy_b" id="xy_b" ng-model="form.xy_b"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="">Pertanyaan 2</label>
                        <textarea class="texteditor" name="xy_soal_y" id="xy_soal_y" ng-model="form.xy_soal_y"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="">Opsi C</label>
                            <textarea class="texteditor" name="xy_c" id="xy_c" ng-model="form.xy_c"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="">Opsi D</label>
                            <textarea class="texteditor" name="xy_d" id="xy_d" ng-model="form.xy_d"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group" ng-show="form.jenis_soal">
                      <label class="">Jawaban</label>
                      <select class="select2bs4" style="width: 100%" name="jawaban" ng-model="form.jawaban" required>
                        <option value="">Pilih</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                      </select>
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
                <div class="row">
                  <div class="col-md-4 offset-md-4">
                    <table class="table table-detail">
                      <tr>
                        <th width="5%">NIS</th>
                        <th width="1%">:</th>
                        <td>{{detailData.nis}}</td>
                      </tr>
                      <tr>
                        <th>Jenis Soal</th>
                        <th>:</th>
                        <td>{{detailData.jenis_soal}}</td>
                      </tr>
                      <tr>
                        <th>Created By</th>
                        <th>:</th>
                        <td>{{detailData.created_by}}</td>
                      </tr>
                      <tr>
                        <th>Created Date</th>
                        <th>:</th>
                        <td>{{detailData.created_date}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Detail Soal</h3>
                  </div>
                  <div class="card-body box-jawaban">
                    <div class="callout callout-default" ng-show="detailData.jenis_soal == 'Normal'">
                      <h5>Soal</h5>
                      <p class="soal"></p>
                    </div>
                    <div class="callout callout-default" ng-show="detailData.jenis_soal == 'Pertanyaan 1 & 2'">
                      <h5>Pertanyaan 1</h5>
                      <p class="soal_x"></p>
                    </div>
                    <div class="callout callout-danger" ng-class="{'box-benar':detailData.jawaban == 'a'}">
                      <h5>A</h5>
                      <p class="a"></p>
                    </div>
                    <div class="callout callout-info" ng-class="{'box-benar':detailData.jawaban == 'b'}">
                      <h5>B</h5>
                      <p class="b"></p>
                    </div>
                    <div class="callout callout-default" ng-show="detailData.jenis_soal == 'Pertanyaan 1 & 2'">
                      <h5>Pertanyaan 2</h5>
                      <p class="soal_y"></p>
                    </div>
                    <div class="callout callout-warning" ng-class="{'box-benar':detailData.jawaban == 'c'}">
                      <h5>C</h5>
                      <p class="c"></p>
                    </div>
                    <div class="callout callout-success" ng-class="{'box-benar':detailData.jawaban == 'd'}">
                      <h5>D</h5>
                      <p class="d"></p>
                    </div>
                  </div>
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
    var base = "<?php echo site_url() ?>";
    var module_api = "<?php echo site_url() ?>banksoal/";
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
            tinymce.init({
              selector: '.texteditor',
              plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools',
              'FMathEditor',
              ],
              convert_urls: false,  
              toolbar1: 'styleselect fontselect fontsizeselect | forecolor backcolor | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | FMathEditor',
              toolbar2: '| responsivefilemanager | print preview media | forecolor backcolor emoticons ',
              image_advtab: true,
              external_filemanager_path:"<?php echo site_url() ?>responsive_filemanager/filemanager/",
              filemanager_title:"Responsive Filemanager" ,
              external_plugins: { "filemanager" : "<?php echo site_url() ?>responsive_filemanager/filemanager/plugin.min.js"},
              convert_urls : false,
              setup: function (editor) {
                  editor.on('change', function (e) {
                      editor.save();
                  });
              }
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
                    "paging":true,
                    'order':[],
                    'ajax': {
                        url:module_api+'table',
                        type:"POST",
                        data:function(d){
                            d.nis = $scope.filter.nis;
                            d.jenis_soal = $scope.filter.jenis_soal;
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
                        { "data": "id", 
                            render:function(data, type, row, meta){
                                return "<input type='checkbox' id='CheckboxRow' ng-click='CheckTotalCheckedDelete()' data-id='"+row.id+"' style='position: relative;left: 0px;opacity: 1;'/>";
                            },
                        },
                        { "data": "opsi"},
                        { "data": "nis"},
                        { "data": "jenis_soal"},
                        { "data": "soal"},
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
            tinymce.get('normal_soal').setContent("");
            tinymce.get('normal_a').setContent("");
            tinymce.get('normal_b').setContent("");
            tinymce.get('normal_c').setContent("");
            tinymce.get('normal_d').setContent("");
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
                        $('[name=nis]').val(d.nis);
                        $scope.form.jenis_soal = d.jenis_soal;
                        $scope.form.jawaban = d.jawaban;
                        if (d.jenis_soal == 'Normal') {
                          tinymce.get('normal_soal').setContent(data.data[0].soal);
                          tinymce.get('normal_a').setContent(data.data[0].a);
                          tinymce.get('normal_b').setContent(data.data[0].b);
                          tinymce.get('normal_c').setContent(data.data[0].c);
                          tinymce.get('normal_d').setContent(data.data[0].d);
                        }
                        if (d.jenis_soal == 'Pertanyaan 1 & 2') {
                          tinymce.get('xy_soal_x').setContent(data.data[0].soal_x);
                          tinymce.get('xy_soal_y').setContent(data.data[0].soal_y);
                          tinymce.get('xy_a').setContent(data.data[0].a);
                          tinymce.get('xy_b').setContent(data.data[0].b);
                          tinymce.get('xy_c').setContent(data.data[0].c);
                          tinymce.get('xy_d').setContent(data.data[0].d);
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
                        $('.a').html(ConvertNull(data.data[0].a));
                        $('.b').html(ConvertNull(data.data[0].b));
                        $('.c').html(ConvertNull(data.data[0].c));
                        $('.d').html(ConvertNull(data.data[0].d));
                        $('.e').html(ConvertNull(data.data[0].e));
                        if (d.jenis_soal == 'Normal') {
                          $('.soal').html(ConvertNull(d.soal));
                        }else if (d.jenis_soal == 'Pertanyaan 1 & 2') {
                          $('.soal_x').html(ConvertNull(d.soal_x));
                          $('.soal_y').html(ConvertNull(d.soal_y));
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
