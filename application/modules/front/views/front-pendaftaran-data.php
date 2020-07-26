<style type="text/css">
    .custom-block .custom-control-label {
        width: 100%;
        padding: 0; 
        background-color: #f8f9fa;
        border: 2px solid #e9ecef;
        border-radius: .2rem;
        cursor: pointer;
    }
    .table-detail tr th{
      white-space: nowrap;
    }   
    .validation-field {
        font-size: 9pt;
        color: red;
    }
    .s_nopendaftaran {
        /*padding: 10px 20px;*/
        color: black;
        font-family: Consolas, monaco, monospace;
        font-weight: bold;
        letter-spacing: 10px;
    }
    @media (min-width: 768px) {
        .s_nopendaftaran {
            font-size: 40pt;
        }
    }
    .box-disabled {
        pointer-events: none;
        /*background: */
    }

    @media (max-width: 768px) {
        .s_nopendaftaran {
            font-size: 15pt;
        }
    }
</style>
<link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/slick-carousel/slick.css">
<link rel="stylesheet" href="<?php echo site_url() ?>assets/front/js/plugins/slick-carousel/slick-theme.css">
<!-- <link rel="stylesheet" href="<?php echo site_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.css"> -->
<link href="<?php echo site_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<link href="<?php echo site_url('assets/') ?>plugins/toastr/toastr.css" rel="stylesheet">
<script src="<?php echo site_url('assets/') ?>plugins/angular/angular.js"></script>
<!-- <script src="<?php echo site_url('assets/') ?>plugins/sweetalert2/sweetalert2.js"></script> -->
<script src="<?php echo site_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo site_url('assets/') ?>plugins/toastr/toastr.js"></script>
<script src="<?php echo site_url('assets/')?>dist/js/master.js"></script>

<!--sweetalert-->

<div ng-app="ModuleController" ng-controller="MasterController" ng-init="InitFunction()">
  <div class="bg-body-light">
       <div class="content content-full">
           <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
               <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2"><i class="fa fa-info-circle"></i> Pendaftaran Peserta Ujian</h1>
               <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item">Beranda</li>
                       <li class="breadcrumb-item active" aria-current="page">Pendaftaran Peserta Ujian {{position}}</li>
                   </ol>
               </nav>
           </div>
       </div>
  </div>
  <div class="bg-white">
      <div class="content content-full">
       <div class="row">
          <div class="col-12">
             <div class="block block-transparent text-left animated fadeIn">
                   <div class="block-content">
                       
                      <div class="js-wizard-simple-s block block block-rounded block-bordered">
                          <!-- Step Tabs -->
                          <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" ng-class="{'disabled':is_finish}" href="#wizard-progress-step1" data-toggle="tab" ng-click='position = 1'><span class="badge badge-pill badge-dark">1</span> &nbsp; Isi Data Peserta</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" ng-class="{'disabled':(position == '1' && !pernah_2) || is_finish}" href="#wizard-progress-step2" data-toggle="tab" ng-click='position = 2'><span class="badge badge-pill badge-dark">2</span> &nbsp; Informasi Akun</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" ng-class="{'disabled':((position == '1' || position == '2') && !pernah_3) || is_finish}" href="#wizard-progress-step3" data-toggle="tab" ng-click='position = 3'><span class="badge badge-pill badge-dark">3</span> Pratinjau</a>
                                  <!-- <a class="nav-link"  href="#wizard-progress-step3" data-toggle="tab" ng-click='position = 3'><span class="badge badge-pill badge-dark">3</span> Pratinjau</a> -->
                              </li>
                          </ul>
                          <!-- END Step Tabs -->

                          <!-- Form -->
                          <form id="form">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <!-- Wizard Progress Bar -->
                              <div class="block-content block-content-sm" ng-show="!is_finish">
                                  <div class="progress" data-wizard="progress" style="height: 8px;">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                              <!-- END Wizard Progress Bar -->

                              <!-- Steps Content -->
                              <div class="block-content block-content-full tab-content" style="min-height: 300px;">
                                  <!-- Step 1 -->
                                  <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                      <div class="block block-themed">
                                          <div class="block-header bg-muted">
                                              <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Anda Mendaftar Sebagai : {{filteredJenisPeserta.nama_jenis_peserta}}</h3>
                                          </div>
                                          <div class="block-content">
                                              <div class="form-group row items-push mb-0">
                                                  <div class="col-md-3" ng-repeat="(key, value) in listJenisPeserta">
                                                      <div class="custom-control custom-block custom-control-primary mb-1" ng-click="FilteredJenisPeserta(value.id)">
                                                          <input type="radio" class="custom-control-input" id="example-rd-custom-block{{key+1}}" name="jenis_peserta_id" value="{{value.id}}" ng-required="position == '1'" ng-model="form.jenis_peserta_id">
                                                          <label class="custom-control-label" for="example-rd-custom-block{{key+1}}">
                                                              <span class="d-block font-w400 text-center my-3">
                                                                  <span class="font-size-h5 font-w600">{{value.nama_jenis_peserta}}</span>
                                                              </span>
                                                          </label>
                                                          <span class="custom-block-indicator">
                                                              <i class="fa fa-check"></i>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group row text-center">
                                                  <center><span class="jenis_peserta_id"></span></center>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="block block-themed">
                                          <div class="block-header bg-muted">
                                              <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Pilih Sesi</h3>
                                          </div>
                                          <div class="block-content">
                                              <div class="form-group row items-push mb-0">
                                                  <div class="col-md-4" ng-repeat="(key, value) in listDimensi">
                                                      <div class="custom-control custom-block custom-control-primary mb-1">
                                                          <input type="checkbox" class="custom-control-input" id="dimensi-rd-custom-block{{key+1}}" name="peserta_dimensi[]" value="{{value.id}}">
                                                          <label class="custom-control-label" for="dimensi-rd-custom-block{{key+1}}">
                                                              <span class="d-block font-w400 text-center my-3">
                                                                  <span class="font-size-h5 font-w600">{{value.nama_dimensi}}</span>
                                                              </span>
                                                          </label>
                                                          <span class="custom-block-indicator">
                                                              <i class="fa fa-check"></i>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group row text-center">
                                                  <center><span class="jenis_peserta_id"></span></center>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="block block-themed">
                                           <div class="block-header bg-muted">
                                               <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Detail Tes UKBI</h3>
                                           </div>
                                           <div class="block-content">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Jenis Tes</label>
                                                    <div class="col-sm-8">
                                                          <select class="form-control" name="jenis_tes_id" ng-model="form.jenis_tes_id" ng-change="FilteredJenisTes(form.jenis_tes_id)" ng-required="position == '1'">
                                                             <option value="">Pilih Jenis Tes</option>
                                                             <option value="{{value.id}}" ng-repeat="(key, value) in listJenisTes">{{value.nama_jenis_tes}}</option>
                                                         </select>
                                                         <span class="jenis_tes_id"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Tujuan Mengikuti Tes</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="tujuan_tes_id" ng-model="form.tujuan_tes_id" ng-change="FilteredTujuanTes(form.tujuan_tes_id)" ng-required="position == '1'">
                                                             <option value="">Pilih Tujuan Mengikuti Tes</option>
                                                             <option value="{{value.id}}" ng-repeat="(key, value) in listTujuanTes">{{value.nama_tujuan_tes}}</option>
                                                         </select>
                                                         <span class="tujuan_tes_id"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Lokasi Ujian Anda </label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control select2 select2-hidden-accessible" name="lokasi_ujian_id" ng-model="form.lokasi_ujian_id" ng-change="FilteredLokasiUjian(form.lokasi_ujian_id);GetJadwalUjian(form.lokasi_ujian_id)" ng-required="position == '1'">
                                                            <option value="">Pilih daerah TUKBI</option>
                                                            <option value="{{value.id}}" ng-repeat="(key, value) in listLokasiUjian">{{value.nama_lokasi_ujian}}</option>
                                                        </select>
                                                         <span class="lokasi_ujian_id"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Jadwal Ujian </label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control select2 select2-hidden-accessible" name="jadwal_ujian_id" ng-model="form.jadwal_ujian_id" ng-change="FilteredJadwalUjian(form.jadwal_ujian_id);" ng-required="position == '1'">
                                                            <option value="">Pilih Jadwal Ujian</option>
                                                            <option value="{{value.id}}" ng-repeat="(key, value) in listJadwalUjian">{{value.tanggal}}</option>
                                                        </select>
                                                         <span class="jadwal_ujian_id"></span>
                                                    </div>
                                                </div>
                                           </div>
                                      </div>
                                      <div class="block block-themed">
                                           <div class="block-header bg-muted">
                                               <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Data Peserta Ujian</h3>
                                           </div>
                                           <!-- <form id="account"> -->
                                             <div class="block-content">
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Foto Diri (pasfoto berwarna terbaru, maksimal 500 KB)</label>
                                                      <div class="col-sm-8">
                                                           <input type="file" name="foto_diri" id="" class="form-control" ng-required="position == '1'">
                                                           <span class="foto_diri"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Foto Kartu Identitas (KTP, paspor, atau identitas lain)</label>
                                                      <div class="col-sm-8">
                                                          <input type="file" name="foto_identitas" id="" class="form-control" ng-required="position == '1'">
                                                          <span class="foto_identitas"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" name="nomor_identitas" class="form-control" placeholder="Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)" ng-required="position == '1'" ng-model="form.nomor_identitas">
                                                          <small id="emailHelp" class="form-text text-muted">Pastikan nomor kartu sesuai dengan foto yang Anda unggah.</small>
                                                          <span class="nomor_identitas"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Lengkap" ng-required="position == '1'" ng-model="form.nama_peserta">
                                                          <span class="nama_lengkap"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                                      <div class="col-sm-8">
                                                          <div class="form-check">
                                                              <input class="form-check-input" type="radio" id="example-radios-default1" name="jenis_kelamin" value="Laki-laki" ng-model="form.jenis_kelamin">
                                                              <label class="form-check-label" for="example-radios-default1">Laki-laki</label>
                                                          </div>
                                                          <div class="form-check">
                                                              <input class="form-check-input" type="radio" id="example-radios-default2" name="jenis_kelamin" value="Perempuan" ng-model="form.jenis_kelamin">
                                                              <label class="form-check-label" for="example-radios-default2">Perempuan</label>
                                                          </div>
                                                          <span class="jenis_kelamin"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                      <div class="col-sm-4">
                                                          <input type="text" name="tempat_lahir" class="form-control" value="" placeholder="Tempat lahir" ng-required="position == '1'" ng-model="form.tempat_lahir">
                                                          <span class="tempat_lahir"></span>
                                                      </div>
                                                      <div class="col-sm-4">
                                                          <input type="date" name="tanggal_lahir" class="form-control" value="" placeholder="Tanggal Lahir" ng-required="position == '1'" ng-model="form.tanggal_lahir">
                                                          <span class="tanggal_lahir"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Nomor Telepon</label>
                                                      <div class="col-sm-2">
                                                          <input type="text" name="telp_kode_negara" class="form-control" placeholder="Kode Negara" ng-required="position == '1'" ng-model="form.telp_kode_negara">
                                                          <span class="telp_kode_negara"></span>
                                                      </div>
                                                      <div class="col-sm-4">
                                                          <input type="text" name="telp_nomor" class="form-control" placeholder="Masukan Nomor Telepon" ng-required="position == '1'" ng-model="form.telp_nomor">
                                                          <span class="telp_nomor"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Provinsi </label>
                                                      <div class="col-sm-8">
                                                          <select class="form-control select2 select2-hidden-accessible" name="provinsi_id" ng-change="FilteredProvinsi(form.provinsi_id);GetKota(form.provinsi_id)" ng-model="form.provinsi_id" ng-required="position == '1'">
                                                              <option value="">Pilih Provinsi</option>
                                                              <option value="{{value.id}}" ng-repeat="(key, value) in listProvinsi">{{value.nama_provinsi}}</option>
                                                          </select>
                                                          <span class="provinsi_id"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Kota </label>
                                                      <div class="col-sm-8">
                                                          <select class="form-control select2 select2-hidden-accessible" name="kota_id" ng-change="FilteredKota(form.kota_id)" ng-model="form.kota_id" ng-required="position == '1'">
                                                              <option value="">Pilih Kota</option>
                                                              <option value="{{value.id}}" ng-repeat="(key, value) in listKota">{{value.nama_kota}}</option>
                                                          </select>
                                                          <span class="kota_id"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Alamat</label>
                                                      <div class="col-sm-8">
                                                          <textarea name="alamat" name="alamat" class="form-control" rows="3" ng-required="position == '1'" ng-model="form.alamat"></textarea>
                                                          <span class="alamat"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                                      <div class="col-sm-8">
                                                          <select class="form-control select2 select2-hidden-accessible" name="jenjang_pendidikan_id" ng-change="FilteredJenjangPendidikan(form.jenjang_pendidikan_id)" ng-model="form.jenjang_pendidikan_id" ng-required="position == '1'">
                                                              <option value="">Pilih Jenjang Pendidikan</option>
                                                              <option value="{{value.id}}" ng-repeat="(key, value) in listJenjangPendidikan">{{value.nama_jenjang_pendidikan}}</option>
                                                          </select>
                                                          <span class="jenjang_pendidikan_id"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" ng-required="position == '1'" ng-model="form.pekerjaan">
                                                          <span class="pekerjaan"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Instansi</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" name="instansi" class="form-control" placeholder="Instansi" ng-required="position == '1'" ng-model="form.instansi">
                                                          <span class="instansi"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                                      <div class="col-sm-8">
                                                           <select class="form-control" name="country_id" ng-model="form.country_id" ng-change="FilteredCountry(form.country_id)">
                                                              <option value="">Pilih</option>
                                                              <option value="{{value.country_id}}" ng-repeat="(key, value) in listCountry" ng-model="form.country_id">{{value.name}}</option>
                                                          </select>
                                                          <span class="country_id"></span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Bahasa Ibu</label>
                                                      <div class="col-sm-8">
                                                          <input type="text" name="bahasa_ibu" class="form-control" ng-model="form.bahasa_ibu" ng-required="position == '1'" placeholder="Bahasa Ibu">
                                                          <span class="bahasa_ibu"></span>
                                                      </div>
                                                  </div>
                                             </div>
                                           <!-- </form> -->
                                      </div>
                                  </div>
                                  
                                  <!-- END Step 1 -->

                                  <!-- Step 2 -->
                                  <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">

                                     <div class="alert alert-info">
                                        Harap masukkan informasi akun Anda dengan benar untuk dapat digunakan dalam mengerjakan soal ujian, melihat hasil ujian, dan mendaptakan informasi terbaru terkait ujian yang Anda ikuti.
                                     </div>

                                     <div class="form-group row">
                                         <label class="col-sm-4 col-form-label">Pos-el</label>
                                         <div class="col-sm-8">
                                             <input type="email" name="email" class="form-control" ng-model="form.email" placeholder="Masukkan Pos-el" ng-required="position == '2'">
                                             <span class="email"></span>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label class="col-sm-4 col-form-label">Kata Sandi</label>
                                         <div class="col-sm-8">
                                             <input type="password" name="password" class="form-control" placeholder="Kata Sandi" ng-required="position == '2'">
                                             <span class="password"></span>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label class="col-sm-4 col-form-label">Konfirmasi Kata Sandi</label>
                                         <div class="col-sm-8">
                                             <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Kata Sandi" ng-required="position == '2'">
                                             <span class="confirm_password"></span>
                                         </div>
                                     </div>
                                  </div>
                                  <!-- END Step 2 -->

                                  <!-- Step 3 -->
                                  <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                    <div ng-show="is_finish">
                                     <div class="alert alert-info">
                                        Selamat Anda Berhasil Mendaftar !!! <br>
                                        Silahkan konfirmasi Email anda.
                                     </div>
                                     <div class="form-group text-center">
                                      <span class="s_nopendaftaran" ng-show="nopendaftaran && is_finish">{{nopendaftaran}}</span><br>
                                       <a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-success"> Daftar Ulang</a>
                                       <a href="<?php echo site_url('login') ?>" class="btn btn-primary"> Masuk</a>
                                     </div>
                                    </div>
                                    <div class="table-responsive">
                                      <table class="table table-detail">
                                          <tbody>
                                              <tr>
                                                  <th width="10%">Lokasi Ujian (TUKBI)</th>
                                                  <th width="1%">:</th>
                                                  <td>{{filteredLokasiUjian.nama_lokasi_ujian}} <span class="lokasi_ujian_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Terdaftar Sebagai</th>
                                                  <th>:</th>
                                                  <td>{{filteredJenisPeserta.nama_jenis_peserta}} <span class="jenis_peserta_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Jenis Tes</th>
                                                  <th>:</th>
                                                  <td>{{filteredJenisTes.nama_jenis_tes}} <span class="jenis_tes_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Tujuan Tes</th>
                                                  <th>:</th>
                                                  <td>{{filteredTujuanTes.nama_tujuan_tes}} <span class="tujuan_tes_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Jadwal Ujian</th>
                                                  <th>:</th>
                                                  <td>{{filteredJadwalUjian.tanggal}} <span class="jadwal_ujian"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Nomor Kartu Identitas</th>
                                                  <th>:</th>
                                                  <td>{{form.nomor_identitas}} <span class="nomor_identitas"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Nama Lengkap (beserta gelar)</th>
                                                  <th>:</th>
                                                  <td>{{form.nama_peserta}} <span class="nama_peserta"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Jenis Kelamin</th>
                                                  <th>:</th>
                                                  <td>{{form.jenis_kelamin}} <span class="jenis_kelamin"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Tempat Lahir</th>
                                                  <th>:</th>
                                                  <td>{{form.tempat_lahir}} <span class="tempat_lahir"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Tanggal Lahir</th>
                                                  <th>:</th>
                                                  <td>{{form.tempat_lahir}} <span class="tanggal_lahir"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Kewarganegaraan</th>
                                                  <th>:</th>
                                                  <td>{{filteredCountry.name}} <span class="lokasi_ujian_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Provinsi</th>
                                                  <th>:</th>
                                                  <td>{{filteredProvinsi.nama_provinsi}} <span class="provinsi_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Kota</th>
                                                  <th>:</th>
                                                  <td>{{filteredKota.nama_kota}} <span class="kota_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Alamat</th>
                                                  <th>:</th>
                                                  <td>{{form.alamat}} <span class="alamat"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Nomor Telepon</th>
                                                  <th>:</th>
                                                  <td>({{form.telp_kode_negara}}) {{form.telp_nomor}} <span class="telp_nomor"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Jenjang Pendidikan</th>
                                                  <th>:</th>
                                                  <td>{{filteredJenjangPendidikan.nama_jenjang_pendidikan}} <span class="jenjang_pendidikan_id"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Pekerjaan</th>
                                                  <th>:</th>
                                                  <td>{{form.pekerjaan}} <span class="pekerjaan"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Instansi</th>
                                                  <th>:</th>
                                                  <td>{{form.instansi}} <span class="instansi"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Bahasa Ibu</th>
                                                  <th>:</th>
                                                  <td>{{form.bahasa_ibu}} <span class="bahasa_ibu"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Email</th>
                                                  <th>:</th>
                                                  <td>{{form.email}} <span class="email"></span></td>
                                              </tr>
                                              <tr>
                                                  <th>Password & Confirm Password</th>
                                                  <th>:</th>
                                                  <td>(Tertutup) <span class="password"></span> <span class="confirm_password"></span></td>
                                              </tr>
                                          </tbody>
                                      </table>
                                    </div>
<!--                                     <div class="col-xl-6 offset-md-3">
                                        <div class="block block-rounded block-bordered">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Sesi Tes</h3>
                                            </div>
                                            <div class="block-content">
                                                <ul class="list-group push">
                                                    <li class="list-group-item" ng-repeat="(key, value) in listDimensi">{{value.nama_dimensi}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div ng-show="!is_finish">
                                      <div class="form-group" id="captcha" style="text-align: center; margin-bottom:10px">
                                      </div>
                                      <div class="col-md-4 offset-md-4">
                                        <div class="form-group row">
                                             <input type="text" name="captcha" class="form-control" ng-model="form.captcha" placeholder="Masukkan Captcha" ng-required="position == '3'" style="text-transform:uppercase;">
                                             <span class="captcha"></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- END Step 3 -->
                              </div>
                              <!-- END Steps Content -->

                              <!-- Steps Navigation -->
                              <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                                  <div class="row">
                                      <div class="col-6">
                                          <button type="button" class="btn btn-secondary" data-wizard="prev" ng-show="!is_finish">
                                              <i class="fa fa-angle-left mr-1"></i> Previous
                                          </button>
                                      </div>
                                      <div class="col-6 text-right">
                                          <button type="button" class="btn btn-secondary" data-wizard="next" ng-show="!is_finish">
                                              Next <i class="fa fa-angle-right ml-1"></i>
                                          </button>
                                          <button type="submit" class="btn btn-primary d-none" data-wizard="finish" ng-show="!is_finish">
                                              <i class="fa fa-check mr-1"></i> Submit
                                          </button>
                                      </div>
                                  </div>
                              </div>
                              <!-- END Steps Navigation -->
                          </form>
                          <!-- END Form -->
                      </div>

                   </div>
               </div>
          </div>
       </div>

          <!-- END People and Tickets -->
      </div>
  </div>
  <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content rounded overflow-hidden bg-image" style="background-image: url('assets/media/photos/photo24.jpg');">
              <div class="row">
                  <div class="col-md-5">
                      <div class="p-3 text-right text-md-left">
                          <a class="font-w600 text-white" href="#" data-dismiss="modal" aria-label="Close">
                              <i class="fa fa-share text-danger-light mr-1"></i> Skip Intro
                          </a>
                      </div>
                  </div>
                  <div class="col-md-7">
                      <div class="bg-white shadow-lg">
                          <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                              <div class="p-4">
                                  <i class="fa fa-award fa-3x text-muted my-4"></i>
                                  <h3 class="font-size-h2 font-w300 mb-2">Selamat Datang di Pendaftaran Peserta Ujian</h3>
                                  <p class="text-muted">
                                      Sebelum mendaftar, ada beberapa hal yang harus Anda perhatikan.
                                  </p>
                                  <button type="button" class="btn btn-hero btn-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                      Selanjutnya <i class="fa fa-arrow-right ml-1"></i>
                                  </button>
                              </div>
                              <div class="slick-slide p-4">
                                  <h3 class="font-size-h2 font-w300 mb-2">Berkas yang Diperlukan</h3>
                                  <ol type="a" style="padding-left: 16px;">
                                      <li>Pasfoto berwarna terbaru</li>
                                      <li>Hasil pindai kartu identitas (kartu tanda penduduk, kartu tanda mahasiswa, atau paspor)</li>
                                      <li>Nomor telepon dan alamat pos-el aktif untuk verifikasi pendaftaran ujian</li>
                                   </ol>
                                  <h3 class="font-size-h2 font-w300 mb-2">Tahap Pendaftaran</h3>
                                  <p class="text-muted">
                                      Pendaftaran terdiri atas tiga bagian pengisian, yaitu mengisi biodata diri, mengisi informasi akun, dan mengisi paket ujian yang akan diikuti.
                                  </p>
                                  <button type="button" class="btn btn-hero btn-success mb-4" data-dismiss="modal" aria-label="Close">
                                      Saya Mengerti <i class="fa fa-check ml-1"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
    var app = angular.module('ModuleController',[]);
    var table = "";
    var base_api = "<?php echo site_url() ?>";
    var module_api = "<?php echo site_url('front/pendaftaran/') ?>";; 
    // }

    app.run(['$rootScope', '$http', '$window', '$timeout', '$filter', function ($rootScope, $http, $window, $timeout, $filter) {
    }])
    app.controller('MasterController', function ($scope, $compile, $timeout, $http, $rootScope, $filter) {

        $scope.nopendaftaran = "";
        $scope.position = 1;
        $scope.pernah_2 = false;
        $scope.pernah_3 = false;
        $scope.is_finish = false;
        $scope.InitFunction = function(){

          $scope.GetJenisPeserta();
          $scope.GetJenisTes();
          $scope.GetTujuanTes();
          $scope.GetLokasiUjian();
          $scope.GetJadwalUjian();
          $scope.GetCountry();
          $scope.GetJenjangPendidikan();
          $scope.GetDimensi();
          $scope.RefreshCaptcha();
          $scope.GetProvinsi();
          $timeout(function(){

            $('.js-wizard-simple-s').bootstrapWizard({
              onTabShow: (tab, nav, index) => {
                  let percent = ((index + 1) / nav.find('li').length) * 100;

                  // Get progress bar
                  let progress = nav.parents('.block').find('[data-wizard="progress"] > .progress-bar');

                  // Update progress bar if there is one
                  if (progress.length) {
                      progress.css({ width: percent + 1 + '%' });
                  }
              },
              onNext: (tab, nav, index) => {
                if (!$('#form')[0].checkValidity()){
                  $('#form').find(':submit').click();
                  console.log('disini'); 
                  return false;
                }else{
                  $scope.position = index+1;
                  $('.js-wizard-simple-s').find("a[href*='wizard-progress-step"+(index+1)+"']").removeClass('disabled');
                  $timeout(function(){
                    $('.js-wizard-simple-s').find("a[href*='wizard-progress-step"+(index+1)+"']").trigger('click');
                    console.log('disana'+(index+1)); 
                    return true;
                  }, 600);
                  if (index + 1 == 2) {
                    $scope.pernah_2 = true;
                  }
                  if (index + 1 == 3) {
                    $scope.pernah_3 = true;
                  }
                }
              },
            });
          }, 0);
          $('#form').on("submit", function(event){
              // $('.js-wizard-simple-s').find("a[href*='wizard-progress-step2']").trigger('click');
              event.preventDefault();
              $scope.ResetValidation();
              swal({
                title: "Pendaftaran akan dikirim ?",
                text: "Pastikan data sudah benar !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-warning",
                confirmButtonText: "Ok",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true,
                showLoaderOnConfirm: true
              },
              function(isConfirm) {
                if (isConfirm) {
                    $timeout(function(){
                        $.ajax({
                            url: module_api,
                            data: new FormData($('#form')[0]),
                            type: 'post',
                            contentType: false,
                            processData: false,
                            async: false,
                            dataType: 'json',
                            success:function(data){
                                if (data.error == 0) {
                                    $scope.ResetForm();
                                    toastr.success(data.message);
                                    $scope.is_finish = true;
                                    $scope.nopendaftaran = data.nopendaftaran;
                                    $timeout(function(){
                                    }, 0);
                                }else if (data.error == 1) {
                                    $.each(data.error_validation, function(key, value){
                                        ValidationFieldClass('.'+key, value);
                                    });
                                    toastr.warning(data.message);
                                    $scope.RefreshCaptcha();
                                    $('[name=captcha]').val("");
                                }else{
                                    toastr.warning(data.message);
                                    $scope.RefreshCaptcha();
                                    $('[name=captcha]').val("");
                                }
                                swal.close();
                            },
                            error:function(data){
                                toastr.error(data.message);
                                swal.close();
                                $scope.RefreshCaptcha();
                                $('[name=captcha]').val("");        
                            }
                        });
                    }, 300);
                  }
              });
          });
        }

        $scope.ResetForm = function(){
            $('#form')[0].reset();
            // $scope.form = {};
            $scope.ResetValidation();
            $timeout(function() {
            });
        }

        $scope.ResetValidation = function(){
            $('#form').find('.validation-field').remove();
        }

        $scope.GetJenisPeserta = function(){
          $scope.listJenisPeserta = [];
          $.ajax({
              url:base_api+"api/ref/jenisPeserta",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listJenisPeserta = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Jenis Peserta')
              }
          });
        }

        $scope.GetJenisTes = function(){
          $scope.listJenisTes = [];
          $.ajax({
              url:base_api+"api/ref/jenisTes",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listJenisTes = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Jenis Tes')
              }
          });
        }

        $scope.GetTujuanTes = function(){
          $scope.listTujuanTes = [];
          $.ajax({
              url:base_api+"api/ref/tujuanTes",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listTujuanTes = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Tujuan Tes')
              }
          });
        }

        $scope.GetLokasiUjian = function(){
          $scope.listLokasiUjian = [];
          $.ajax({
              url:base_api+"api/ref/lokasiUjian",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listLokasiUjian = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Lokasi Ujian')
              }
          });
        }

        $scope.GetJadwalUjian = function(value=''){
          $scope.listJadwalUjian = [];
          if (value != '') {
            $.ajax({
                url:base_api+"api/ref/jadwalUjian",
                type:'GET',
                dataType:'json',
                data:{lokasi_ujian_id:value},
                success: function(data){
                    if (data.error == 0) {
                      $scope.listJadwalUjian = data.data;
                      $timeout(function(){
                      }, 0);
                      $scope.$apply();
                    }else{
                      console.log(data.message);
                    }
                },
                error:function(data){
                  console.log('Error Get Jadwal Ujian Tes')
                }
            });
          }else{
            $timeout(function(){
            }, 0);
          }
        }

        $scope.GetJenjangPendidikan = function(){
          $scope.listJenjangPendidikan = [];
          $.ajax({
              url:base_api+"api/ref/jenjangPendidikan",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listJenjangPendidikan = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Lokasi Ujian')
              }
          });
        }

        $scope.GetCountry = function(){
          $scope.listCountry = [];
          $.ajax({
              url:base_api+"api/ref/country",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listCountry = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Country')
              }
          });
        }

        $scope.GetProvinsi = function(){
          $scope.listProvinsi = [];
          $.ajax({
              url:base_api+"api/ref/provinsi",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listProvinsi = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Provinsi')
              }
          });
        }

        $scope.GetKota = function(value=''){
          $scope.listKota = [];
          if (value != '') {
            $.ajax({
                url:base_api+"api/ref/kota",
                type:'GET',
                dataType:'json',
                data:{provinsi_id:value},
                success: function(data){
                    if (data.error == 0) {
                      $scope.listKota = data.data;
                      $timeout(function(){
                      }, 0);
                      $scope.$apply();
                    }else{
                      console.log(data.message);
                    }
                },
                error:function(data){
                  console.log('Error Get Provinsi')
                }
            });
          }else{
            $timeout(function(){
            }, 0);
          }
        }

        $scope.GetDimensi = function(){
          $scope.listDimensi = [];
          $.ajax({
              url:base_api+"api/ref/dimensi",
              type:'GET',
              dataType:'json',
              success: function(data){
                  if (data.error == 0) {
                    $scope.listDimensi = data.data;
                    $timeout(function(){
                    }, 0);
                    $scope.$apply();
                  }else{
                    console.log(data.message);
                  }
              },
              error:function(data){
                console.log('Error Get Dimensi')
              }
          });
        }

        $scope.RefreshCaptcha = function() {
            $(".fa-refresh").addClass("fa-spin");
            $.ajax({
                url: module_api+"refresh_captcha",
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

        $scope.FilteredJenisPeserta = function(jenis_peserta_id){
          $scope.filteredJenisPeserta = $filter('filter')($scope.listJenisPeserta, function(item){return item.id == jenis_peserta_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredJenisTes = function(jenis_tes_id){
          $scope.filteredJenisTes = $filter('filter')($scope.listJenisTes, function(item){return item.id == jenis_tes_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredTujuanTes = function(tujuan_tes_id){
          $scope.filteredTujuanTes = $filter('filter')($scope.listTujuanTes, function(item){return item.id == tujuan_tes_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredLokasiUjian = function(lokasi_ujian_id){
          $scope.filteredLokasiUjian = $filter('filter')($scope.listLokasiUjian, function(item){return item.id == lokasi_ujian_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredJadwalUjian = function(jadwal_ujian_id){
          $scope.filteredJadwalUjian = $filter('filter')($scope.listJadwalUjian, function(item){return item.id == jadwal_ujian_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredCountry = function(country_id){
          $scope.filteredCountry = $filter('filter')($scope.listCountry, function(item){return item.country_id == country_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredJenjangPendidikan = function(jenjang_pendidikan_id){
          $scope.filteredJenjangPendidikan = $filter('filter')($scope.listJenjangPendidikan, function(item){return item.id == jenjang_pendidikan_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredProvinsi = function(provinsi_id){
          $scope.filteredProvinsi = $filter('filter')($scope.listProvinsi, function(item){return item.id == provinsi_id;})[0];
          $timeout(function(){
          }, 0);
        }

        $scope.FilteredKota = function(kota_id){
          $scope.filteredKota = $filter('filter')($scope.listKota, function(item){return item.id == kota_id;})[0];
          $timeout(function(){
          }, 0);
        }

    })

</script>