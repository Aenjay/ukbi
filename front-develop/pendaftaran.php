<?php include "header.php"; ?>
<style type="text/css">
   .custom-block .custom-control-label {
       width: 100%;
        padding: 0; 
       background-color: #f8f9fa;
       border: 2px solid #e9ecef;
       border-radius: .2rem;
       cursor: pointer;
   }
</style>
<link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick.css">
<link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick-theme.css">

                <div class="bg-body-light">
                     <div class="content content-full">
                         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                             <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2"><i class="fa fa-info-circle"></i> Pendaftaran Peserta Ujian</h1>
                             <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item">Beranda</li>
                                     <li class="breadcrumb-item active" aria-current="page">Pendaftaran Peserta Ujian</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>
                <!-- END Hero -->
                <!--   <div class="bg-white">
                    <div class="content content-full">
                      <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                        <div>
                            <img class="img-fluid" src="assets/media/photos/photo21.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="assets/media/photos/photo23.jpg" alt="">
                        </div>
                      </div>
                   </div>
                </div> -->

                <!-- Page Content -->
                <div class="bg-white">
                    <div class="content content-full">
                     <div class="row">
                        <div class="col-12">
                           <div class="block block-transparent text-left animated fadeIn">
                                 <div class="block-content">
                                     
                                    <div class="js-wizard-simple block block block-rounded block-bordered">
                                        <!-- Step Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab"><span class="badge badge-pill badge-dark">1</span> &nbsp; Isi Data Peserta</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab"><span class="badge badge-pill badge-dark">2</span> &nbsp; Informasi Akun</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#wizard-progress-step3" data-toggle="tab"><span class="badge badge-pill badge-dark">3</span> Pratinjau</a>
                                            </li>
                                        </ul>
                                        <!-- END Step Tabs -->

                                        <!-- Form -->
                                        <form action="sukses.php" method="POST">
                                            <!-- Wizard Progress Bar -->
                                            <div class="block-content block-content-sm">
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
                                                            <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Anda Mendaftar Sebagai</h3>
                                                        </div>
                                                        <div class="block-content">
                                                            <div class="form-group row items-push mb-0">
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block1" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block1">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Pelajar SD setara</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block2" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block2">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Pelajar SMP</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block3" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block3">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Pelajar SMA</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block4" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block4">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Guru</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block5" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block5">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Dosen</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block6" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block6">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Peneliti</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block7" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block7">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Penyuluh</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block8" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block8">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Penerjemah/juru bahasa</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block9" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block9">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Editor</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block10" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block10">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Wartawan/penulis</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block11" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block11">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Pegawai swasta lain</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="custom-control custom-block custom-control-primary mb-1">
                                                                        <input type="radio" class="custom-control-input" id="example-rd-custom-block12" name="example-rd-custom-block">
                                                                        <label class="custom-control-label" for="example-rd-custom-block12">
                                                                            <span class="d-block font-w400 text-center my-3">
                                                                                <span class="font-size-h5 font-w600">Pegawai negeri lain</span>
                                                                            </span>
                                                                        </label>
                                                                        <span class="custom-block-indicator">
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="block block-themed">
                                                             <div class="block-header bg-muted">
                                                                 <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Detail Tes UKBI</h3>
                                                             </div>
                                                             <div class="block-content">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label" for="example-hf-email">Jenis Tes</label>
                                                                            <div class="col-sm-8">
                                                                                  <select class="form-control" id="example-select" name="example-select">
                                                                                     <option value="0">Pilih Jenis Tes</option>
                                                                                     <option value="1">Tulis</option>
                                                                                     <option value="2">Luring</option>
                                                                                     <option value="3">Daring</option>
                                                                                 </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label" for="example-hf-password">Tujuan Mengikuti Tes</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control" id="example-select" name="example-select">
                                                                                     <option value="0">Pilih Tujuan Mengikuti Tes</option>
                                                                                     <option value="1">Tes Mandiri</option>
                                                                                     <option value="2">CPNS</option>
                                                                                     <option value="3">Beasiswa</option>
                                                                                     <option value="3">Sertifikasi</option>
                                                                                     <option value="3">Syarat Kelulusan</option>
                                                                                     <option value="3">Syarat Administrasi</option>
                                                                                 </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label" for="example-hf-password">Pilih Lokasi Ujian Anda </label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control select2 select2-hidden-accessible" id="tukbiSelect" name="tukbi" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                                                                                                                    <option value="">Pilih daerah TUKBI</option>
                                                                                                                                                <option value="1">Aceh</option><option value="5323c75a-f9ef-11e9-8d57-005056a509ab">Australia</option><option value="bad635d8-bb03-11e8-933c-005056a509ab">Bali</option><option value="2a736b7e-bb03-11e8-933c-005056a509ab">Bangka Belitung</option><option value="2b804b73-67aa-11e8-9714-005056a509ab">Banten</option><option value="24b0276a-66fb-11e8-9714-005056a509ab">Bengkulu</option><option value="6ea8a024-bb04-11e8-933c-005056a509ab">Gorontalo</option><option value="2">Jakarta</option><option value="efeb40a3-bb02-11e8-933c-005056a509ab">Jambi</option><option value="5">Jawa Barat</option><option value="94d8675b-bb03-11e8-933c-005056a509ab">Jawa Tengah</option><option value="a8eef983-bb03-11e8-933c-005056a509ab">Jawa Timur</option><option value="fb222ae3-bb03-11e8-933c-005056a509ab">Kalimantan Barat</option><option value="14efdbf6-bb04-11e8-933c-005056a509ab">Kalimantan Selatan</option><option value="05cf31fa-bb04-11e8-933c-005056a509ab">Kalimantan Tengah</option><option value="27fce6c6-bb04-11e8-933c-005056a509ab">Kalimantan Timur</option><option value="e753914a-bb02-11e8-933c-005056a509ab">Kepulauan Riau</option><option value="5dea1f38-a0b3-11e9-8d57-005056a509ab">Lab Uji Coba</option><option value="573d7e10-bb03-11e8-933c-005056a509ab">Lampung</option><option value="951664bf-bb04-11e8-933c-005056a509ab">Maluku</option><option value="ce138a56-bb04-11e8-933c-005056a509ab">Maluku Utara</option><option value="db3824f3-bb03-11e8-933c-005056a509ab">Nusa Tenggara Barat</option><option value="efcb118d-bb03-11e8-933c-005056a509ab">Nusa Tenggara Timur</option><option value="83bb4688-bb05-11e8-933c-005056a509ab">Papua</option><option value="874e4c5b-bb03-11e8-933c-005056a509ab">PPSDK Sentul</option><option value="d231bdd7-bb02-11e8-933c-005056a509ab">Riau</option><option value="aff3b71b-bb01-11e8-933c-005056a509ab">Sulawesi Selatan dan Barat</option><option value="7b1938ae-bb04-11e8-933c-005056a509ab">Sulawesi Tengah</option><option value="8e428269-bb04-11e8-933c-005056a509ab">Sulawesi Tenggara</option><option value="65a470e1-bb04-11e8-933c-005056a509ab">Sulawesi Utara</option><option value="92c1ac1b-bb02-11e8-933c-005056a509ab">Sumatera Barat</option><option value="f8934d80-bb02-11e8-933c-005056a509ab">Sumatera Selatan</option><option value="77144175-bb02-11e8-933c-005056a509ab">Sumatera Utara</option><option value="6">Yogyakarta</option></select>
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        </div>
                                                         <div class="block block-themed">
                                                             <div class="block-header bg-muted">
                                                                 <h3 class="block-title"><i class="fas fa-chevron-circle-right"></i> &nbsp; Data Peserta Ujian</h3>
                                                             </div>
                                                             <div class="block-content">
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-email">Foto Diri (pasfoto berwarna terbaru, maksimal 500 KB)</label>
                                                                      <div class="col-sm-8">
                                                                           <input type="file" name="" id="" class="form-control">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Foto Kartu Identitas (KTP, paspor, atau identitas lain)</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="file" name="" id="" class="form-control">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)" required="required" pattern="" title="">
                                                                          <small id="emailHelp" class="form-text text-muted">Pastikan nomor kartu sesuai dengan foto yang Anda unggah.</small>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Nomor Kartu Identitas (KTP, Paspor, atau identitas lain)" required="required" pattern="" title="">
                                                                          <small id="emailHelp" class="form-text text-muted">Pastikan nama Anda benar untuk dicetak di sertifikat hasil ujian.</small>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Jenis Kelamin</label>
                                                                      <div class="col-sm-8">
                                                                          <div class="form-check">
                                                                              <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                                                                              <label class="form-check-label" for="example-radios-default1">Laki-laki</label>
                                                                          </div>
                                                                          <div class="form-check">
                                                                              <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                                                                              <label class="form-check-label" for="example-radios-default2">Perempuan</label>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Tempat Lahir</label>
                                                                      <div class="col-sm-4">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Tempat lahir" required="required" pattern="" title="">
                                                                      </div>
                                                                      <div class="col-sm-4">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Tanggal Lahir" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Nomor Telepon</label>
                                                                      <div class="col-sm-2">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Kode Negara" required="required" pattern="" title="">
                                                                      </div>
                                                                      <div class="col-sm-4">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Masukan Nomor Telepon" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Alamat</label>
                                                                      <div class="col-sm-8">
                                                                          <textarea name="alamat" id="input" class="form-control" rows="3" required="required"></textarea>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Pendidikan Terakhir</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Pendidikan Terakhir" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Pekerjaan</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Pekerjaan" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Instansi</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Instansi" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Kewarganegaraan</label>
                                                                      <div class="col-sm-8">
                                                                           <select class="form-control" id="example-select" name="example-select">
                                                                              <option value="0">Kewarganegaraan</option>
                                                                              <option value="1">Amerika Serikat</option>
                                                                              <option value="2">Australia</option>
                                                                              <option value="3">Filipina</option>
                                                                              <option value="3">India</option>
                                                                              <option value="3">Jepang</option>
                                                                              <option value="3">Malaysia</option>
                                                                              <option value="3">Mesir</option>
                                                                              <option value="3">Prancis</option>
                                                                              <option value="3">Singapura</option>
                                                                              <option value="3">Thailand</option>
                                                                              <option value="3">Tiongkok</option>
                                                                          </select>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label class="col-sm-4 col-form-label" for="example-hf-password">Bahasa Ibu</label>
                                                                      <div class="col-sm-8">
                                                                          <input type="text" name="" id="input" class="form-control" value="" placeholder="Bahasa Ibu" required="required" pattern="" title="">
                                                                      </div>
                                                                  </div>
                                                             </div>
                                                        </div>
                                                        
                                                </div>
                                                
                                                <!-- END Step 1 -->

                                                <!-- Step 2 -->
                                                <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">

                                                   <div class="alert alert-info">
                                                      Harap masukkan informasi akun Anda dengan benar untuk dapat digunakan dalam mengerjakan soal ujian, melihat hasil ujian, dan mendaptakan informasi terbaru terkait ujian yang Anda ikuti.
                                                   </div>

                                                   <div class="form-group row">
                                                       <label class="col-sm-4 col-form-label" for="example-hf-password">Pos-el</label>
                                                       <div class="col-sm-8">
                                                           <input type="text" name="" id="input" class="form-control" value="" placeholder="Masukkan Pos-el" required="required" pattern="" title="">
                                                       </div>
                                                   </div>
                                                   <div class="form-group row">
                                                       <label class="col-sm-4 col-form-label" for="example-hf-password">Kata Sandi</label>
                                                       <div class="col-sm-8">
                                                           <input type="text" name="" id="input" class="form-control" value="" placeholder="Kata Sandi" required="required" pattern="" title="">
                                                       </div>
                                                   </div>
                                                   <div class="form-group row">
                                                       <label class="col-sm-4 col-form-label" for="example-hf-password">Konfirmasi Kata Sandi</label>
                                                       <div class="col-sm-8">
                                                           <input type="text" name="" id="input" class="form-control" value="" placeholder="Konfirmasi Kata Sandi" required="required" pattern="" title="">
                                                       </div>
                                                   </div>
                                                </div>
                                                <!-- END Step 2 -->

                                                <!-- Step 3 -->
                                                <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th width="270px">Lokasi Ujian (TUKBI)</th>
                                                                <td width="3px">:</td>
                                                                <td>
                                                                    <span id="tukbiTerpilih">Bali</span>
                                                                </td>
                                                            </tr>
                                                        <tr><th width="270px">Terdaftar Sebagai</th>
                                                        <td width="3px">:</td>
                                                        <td>
                                                            <span id="sebagaiDisplay">WNA</span>
                                                        </td>
                                                        </tr><tr>
                                                            <th width="270px">Jenis Tes</th>
                                                            <td width="3px">:</td>
                                                            <td>
                                                                <span id="jenisTesTerpilih">Tulis</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="270px">Tujuan Tes</th>
                                                            <td width="3px">:</td>
                                                            <td>
                                                                <span id="tujuanTesTerpilih">Tes Mandiri</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="270px">Paket Terpilih</th>
                                                            <td width="3px">:</td>
                                                            <td>
                                                                <span id="paketTerpilih">3</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Lengkap (beserta gelar)</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="namaLengkapDisplay">Ujang Udin</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor Kartu Identitas</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="kitasDisplay">12313123123</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Jenis Kelamin</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="genderDisplay">Laki-laki</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tempat, Tanggal Lahir</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="tempatLahirDisplay">asdasd</span>,
                                                                <span id="ttl">05-08-1990</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kewarganegaraan</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="kewarganegaraanDisplay">Prancis</span>
                                                            </td>
                                                        </tr>
                                                        <tr id="bahasaContainer">
                                                            <th>Bahasa Ibu</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="bahasaDisplay">bahasa</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Alamat</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="alamatDisplay">Kampung Ciomas</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor Telepon</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="noTelpDisplay">(62) 546546234234</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pendidikan Terakhir</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="pendidikanDisplay">S1</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pekerjaan</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="pekerjaanDisplay">Web Developer</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Instansi</th>
                                                            <td>:</td>
                                                            <td>
                                                                <span id="instansiDisplay">Kreasimedia</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END Step 3 -->
                                            </div>
                                            <!-- END Steps Content -->

                                            <!-- Steps Navigation -->
                                            <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-secondary" data-wizard="prev">
                                                            <i class="fa fa-angle-left mr-1"></i> Previous
                                                        </button>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <button type="button" class="btn btn-secondary" data-wizard="next">
                                                            Next <i class="fa fa-angle-right ml-1"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
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
                <!-- END Page Content -->
            
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

<?php include "footer.php"; ?>