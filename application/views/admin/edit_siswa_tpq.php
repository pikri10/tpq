

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    
                </div>
                
<div class="row col-lg-10">
                        <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="" method="post" >
                            <div class="form-group row">
                            <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $siswa['nik']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>">
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="ibu" name="ibu" value="<?= $siswa['ibu']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="ayah" name="ayah" value="<?= $siswa['ayah']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_ortu" class="col-sm-2 col-form-label">Nomor HP Orang Tua</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_ortu" name="nomor_ortu" value="<?= $siswa['nomor_ortu']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                            <input type="hidden" name="foto" value="<?= $siswa['foto']; ?>">
                                <label for="tahun_masuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?= $siswa['tahun_masuk']; ?>">
                                <input type="hidden" name="uang_gedung" value="<?= $siswa['uang_gedung']; ?>">
                                <input type="hidden" name="tagihan1" value="<?= $siswa['tagihan1']; ?>">
                                <input type="hidden" name="tagihan2" value="<?= $siswa['tagihan2']; ?>">
                                <input type="hidden" name="tagihan3" value="<?= $siswa['tagihan3']; ?>">
                                <input type="hidden" name="tagihan4" value="<?= $siswa['tagihan4']; ?>">
                                <input type="hidden" name="tagihan5" value="<?= $siswa['tagihan5']; ?>">
                                <input type="hidden" name="tagihan6" value="<?= $siswa['tagihan6']; ?>">
                                <input type="hidden" name="tabungan" value="<?= $siswa['tabungan']; ?>">
                                </div>
                            </div>
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                        <a href="<?= base_url('siswa/siswa_tpq'); ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
                </form>
                    
                </div>
            </div>
            <!-- End of Main Content -->

 