<style>
#DataTable tbody tr td:nth-child(1),
#DataTable tbody tr td:nth-child(2),
#DataTable tbody tr td:nth-child(9),
#DataTable tbody tr td:nth-child(10) {
    text-align: center;
}
.table-child td {
  text-align: center;
}
</style>
<link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/jPlayer/dist/skin/blue.monday/css/jplayer.blue.monday.min.css"/>
<script src="<?php echo site_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/tinymce/tinymce.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/jPlayer/dist/jplayer/jquery.jplayer.min.js"></script>
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
                      <th width="">Dimensi</th>
                      <th width="">Tingkat</th>
                      <th width="">Nama Baterai</th>
                      <th width="">Karakter Butir</th>
                      <th width="">Teslet</th>
                      <th width="">Jumlah Soal</th>
                      <th width="">Nomor Pertama</th>
                    </tr>
                    <tr>
                      <th class="text-center">
                          <input type="checkbox" id="CheckAll" style="position: relative;left: 0px;opacity: 1;">
                      </th>
                      <th>#</th>
                      <th id="filter">nama_dimensi</th>
                      <th id="filter">nama_tingkat</th>
                      <th id="filter">nama_baterai</th>
                      <th id="filter">karakter_butir</th>
                      <th id="filter">teslet</th>
                      <th id="filter">jumlah_soal</th>
                      <th id="filter">nomor_awal_soal</th>
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
                      <label>Dimensi</label>
                      <select class="select2bs4" name="dimensi_tingkat_id" ng-model="form.dimensi_tingkat_id" required style="width: 100%;">
                        <option value="">Pilih</option>
                        <option value="{{value.id}}" ng-repeat="(key, value) in listDimensiTingkat">{{value.nama_dimensi+' '+value.nama_tingkat}}</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Baterai</label>
                      <input type="text" class="form-control" name="nama_baterai" ng-model="form.nama_baterai" placeholder="Enter Nama Baterai" required>
                    </div>
                    <div class="form-group">
                      <label>Karakter Butir</label>
                      <input type="text" class="form-control" name="karakter_butir" ng-model="form.karakter_butir" placeholder="Enter Karakter Butir" required>
                    </div>
                    <div class="form-group">
                      <label>Teslet</label>
                      <input type="text" class="form-control" name="teslet" ng-model="form.teslet" placeholder="Enter Teslet" required>
                    </div>
                    <div class="form-group">
                      <label>Urutan Baterai</label>
                      <input type="number" class="form-control" name="sequence" ng-model="form.sequence" placeholder="Enter Urutan" required>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Jumlah Soal</label>
                          <select class="select2bs4" name="jumlah_soal" ng-model="form.jumlah_soal" ng-disabled="save_type=='Update'" ng-change="GetEstimasiJawaban(form.jumlah_soal)" required style="width: 100%">
                            <option value="">Pilih</option>
                            <?php foreach ($listJumlahSoal->result() as $value): ?>
                              <option value="<?php echo $value->jumlah_soal ?>"><?php echo $value->jumlah_soal ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nomor Awal Soal</label>
                          <input type="number" class="form-control" name="nomor_awal_soal" ng-model="form.nomor_awal_soal" ng-disabled="save_type=='Update'">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="">Suara (untuk mendengarkan)</label>
                      <input type="file" class="form-control" name="suara" accept="audio/*">
                    </div>
                    <h5 class="text-center">Estimasi Jawaban</h5>
                    <div class="table-responsive" ng-show="form.jumlah_soal">
                      <table class="table table-bordered table-child">
                        <tr>
                          <th class="text-center" width="2%">No</th>
                          <th class="text-center" width="5%">1</th>
                          <th class="text-center" width="5%">2</th>
                          <th class="text-center" width="5%">3</th>
                          <th class="text-center" width="5%">4</th>
                          <th class="text-center" width="5%">5</th>
                          <th class="text-center" width="5%" ng-show="form.jumlah_soal >= 6">6</th>
                          <th class="text-center" width="5%" ng-show="form.jumlah_soal >= 7">7</th>
                          <th class="text-center" width="5%">Jumlah</th>
                          <th class="text-center">Nilai Estimasi Tetha</th>
                          <th class="text-center">Skor</th>
                        </tr>
                        <tbody>
                          <tr ng-repeat="(key, value) in listEstimasiJawaban">
                            <td>{{key+1}}.</td>
                            <td ng-class="{'bg-warning':value.no1 == '1'}">{{value.no1}}</td>
                            <td ng-class="{'bg-warning':value.no2 == '1'}">{{value.no2}}</td>
                            <td ng-class="{'bg-warning':value.no3 == '1'}">{{value.no3}}</td>
                            <td ng-class="{'bg-warning':value.no4 == '1'}">{{value.no4}}</td>
                            <td ng-class="{'bg-warning':value.no5 == '1'}">{{value.no5}}</td>
                            <td ng-class="{'bg-warning':value.no6 == '1'}" ng-show="form.jumlah_soal >= 6">{{value.no6}}</td>
                            <td ng-class="{'bg-warning':value.no7 == '1'}" ng-show="form.jumlah_soal >= 7">{{value.no7}}</td>
                            <td>{{value.jumlah}}</td>
                            <td><input type="hidden" name="estimasi_jawaban_id[]" value="{{value.id}}"><input type="number" class="form-control" name="tetha[]" value="{{value.tetha}}" autocomplete="off" step="0.01"></td>
                            <td><input type="number" class="form-control" name="skor[]" value="{{value.skor}}" autocomplete="off" step="0.00001"></td>
                          </tr>
                        </tbody>
                      </table>
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
                <div class="suara" ng-show="sound">
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                  <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                    <div class="jp-type-single">
                      <div class="jp-gui jp-interface">
                        <div class="jp-controls">
                          <button class="jp-play" role="button" tabindex="0">play</button>
                          <button class="jp-stop" role="button" tabindex="0">stop</button>
                        </div>
                        <div class="jp-progress">
                          <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                          </div>
                        </div>
                        <div class="jp-volume-controls">
                          <button class="jp-mute" role="button" tabindex="0">mute</button>
                          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                          <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                          </div>
                        </div>
                        <div class="jp-time-holder">
                          <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                          <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                          <div class="jp-toggles">
                            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                          </div>
                        </div>
                      </div>
                      <div class="jp-details">
                        <div class="jp-title" aria-label="title">&nbsp;</div>
                      </div>
                      <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </div>
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
                          <th>Jumlah Soal</th>
                          <th>:</th>
                          <td>{{detailData.jumlah_soal}}</td>
                      </tr>
                      <tr>
                          <th>Nomor Awal Soal</th>
                          <th>:</th>
                          <td>{{detailData.nomor_awal_soal}}</td>
                      </tr>
                  </table>
                </div>
                <div class="row">
                  <div class="col-md-4 offset-md-4">
                    <div class="card card-widget widget-user-2">
                      <div class="card-footer p-0">
                        <ul class="nav flex-column">
                          <li class="nav-item" ng-repeat="(key, value) in listBateraiSoal">
                            <span href="#" class="nav-link">
                              {{value.nomor_soal}}. {{(value.banksoal_id != '' && value.banksoal_id != null) ? 'NIS : '+value.nis : 'Belum ada soal' }}
                            </span>
                          </li>
                        </ul>
                      </div>
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
    var module_api = "<?php echo site_url() ?>baterai/";
    var box1 = $('#box1');
    var box2 = $('#box2');
    var box3 = $('#box3');
    app.run(['$rootScope', '$http', '$window', '$timeout', '$filter', function ($rootScope, $http, $window, $timeout, $filter) {
    }])
    app.controller('MasterController', function ($scope, $compile, $timeout, $http, $rootScope, $filter) {
        $scope.form = {};
        $scope.filter = {};
        $scope.save_type = "Add";
        $scope.sound = "";

        $scope.InitFunction = function(){
            $scope.GetDimensiTingkat();
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            });
            $scope.Box(1);            
            $("#jquery_jplayer_1").jPlayer({
              ready: function (event) {
                $(this).jPlayer("setMedia", {
                  title: "Sound",
                  m4a: $scope.sound,
                });
              },
              swfPath: "../../dist/jplayer",
              supplied: "m4a, oga",
              wmode: "window",
              useStateClassSkin: true,
              autoBlur: false,
              smoothPlayBar: true,
              keyEnabled: true,
              remainingDuration: true,
              toggleDuration: true
            });
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
                            d.nama_dimensi = $scope.filter.nama_dimensi;
                            d.nama_tingkat = $scope.filter.nama_tingkat;
                            d.nama_baterai = $scope.filter.nama_baterai;
                            d.karakter_butir = $scope.filter.karakter_butir;
                            d.teslet = $scope.filter.teslet;
                            d.jumlah_soal = $scope.filter.jumlah_soal;
                            d.nomor_awal_soal = $scope.filter.nomor_awal_soal;
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
                        { "data": "nama_dimensi"},
                        { "data": "nama_tingkat"},
                        { "data": "nama_baterai"},
                        { "data": "karakter_butir"},
                        { "data": "teslet"},
                        { "data": "jumlah_soal"},
                        { "data": "nomor_awal_soal"},
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
                        $('[name=dimensi_tingkat_id]').val(d.dimensi_tingkat_id);
                        $('[name=nama_baterai]').val(d.nama_baterai);
                        $('[name=karakter_butir]').val(d.karakter_butir);
                        $('[name=teslet]').val(d.teslet);
                        $('[name=jumlah_soal]').val(d.jumlah_soal);
                        $('[name=nomor_awal_soal]').val(d.nomor_awal_soal);
                        $('[name=sequence]').val(d.sequence);
                        $scope.form.jumlah_soal = d.jumlah_soal;
                        $scope.GetBateraiEstimasiJawaban(value);
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
                        $scope.GetBateraiSoal(value);
                        $scope.GetBateraiEstimasiJawaban(value);
                        if (ConvertNull(d.suara) != '') {
                          $("#jquery_jplayer_1").jPlayer("setMedia", {
                            m4a: base+'uploads/baterai/suara/'+d.suara, // Defines the mp3 url
                          });
                          $scope.sound = d.suara;
                        }else{
                          $scope.sound = "";
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
                  }
              },
              error:function(data){
                  if (data.message) {
                      toastr.error(data.message);
                  }else{
                      toastr.error("Error Get Dimensi Tingkat");
                  }
              }
          });
        }

        $scope.GetBateraiSoal = function(value){
          $scope.listBateraiSoal = [];
          $.ajax({
              url:module_api+"soal/",
              type:'GET',
              data:{
                baterai_id:value
              },
              success: function(data){
                  if (data.error == 0) {
                    $scope.listBateraiSoal = data.data;
                    $timeout(function(){
                      $('.select2bs4').select2({
                        theme: 'bootstrap4'
                      });
                    }, 0);
                  }else{
                    toastr.warning(data.message);
                  }
              },
              error:function(data){
                  if (data.message) {
                      toastr.error(data.message);
                  }else{
                      toastr.error("Error Get Baterai Soal");
                  }
              }
          });
        }

        $scope.GetEstimasiJawaban = function(jumlah_soal){
          $scope.listEstimasiJawaban = [];
          if (jumlah_soal != '') {
            $.ajax({
                url:base+"referensi/EstimasiJawaban",
                type:'GET',
                data:{
                  jumlah_soal:jumlah_soal
                },
                success: function(data){
                    if (data.error == 0) {
                      $scope.listEstimasiJawaban = data.data;
                      $timeout(function(){
                      }, 0);
                      $scope.$apply();
                    }else{
                      toastr.warning(data.message);
                    }
                },
                error:function(data){
                  toastr.error("Error Get Estimasi Jawaban");
                }
            });
          }
        }

        $scope.GetBateraiEstimasiJawaban = function(baterai_id){
          $scope.listEstimasiJawaban = [];
          if (baterai_id != '') {
            $.ajax({
                url:module_api+"estimasi_jawaban",
                type:'GET',
                data:{
                  baterai_id:baterai_id
                },
                success: function(data){
                    if (data.error == 0) {
                      $scope.listEstimasiJawaban = data.data;
                      $timeout(function(){
                      }, 0);
                      $scope.$apply();
                    }else{
                      toastr.warning(data.message);
                    }
                },
                error:function(data){
                  toastr.error("Error Get Baterai Estimasi Jawaban");
                }
            });
          }
        }

    })

</script>
