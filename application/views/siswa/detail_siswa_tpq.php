

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    
                </div>
                
<div class="row col-lg-10">
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $siswa['nik']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="ibu" name="ibu" value="<?= $siswa['ibu']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="ayah" name="ayah" value="<?= $siswa['ayah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_ortu" class="col-sm-2 col-form-label">Nomor HP Orang Tua</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_ortu" name="nomor_ortu" value="<?= $siswa['nomor_ortu']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun_masuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?= $siswa['tahun_masuk']; ?>" readonly>
                                </div>
                            </div>
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                        <a href="<?= base_url('tpq'); ?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>

                    
                </div>
            </div>
            <!-- End of Main Content -->

 