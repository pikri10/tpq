

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    
                </div>
                
<div class="row col-lg-10">
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="kode" class="col-sm-2 col-form-label">Kode Guru</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode" name="kode" value="<?= $guru['kode_guru']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $guru['nik']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled value="<?= $guru['jenis_kelamin']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" disabled value="<?= $guru['tempat_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" disabled value="<?= $guru['tanggal_lahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $guru['alamat']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= $guru['nomor_hp']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nipy" class="col-sm-2 col-form-label">NIPY</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nipy" name="nipy" value="<?= $guru['nipy']; ?>" disabled>
                                </div>
                            </div>
                            
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                            <a href="<?= base_url('tahfidz/guru'); ?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>

                    
                </div>
            </div>
            <!-- End of Main Content -->

 