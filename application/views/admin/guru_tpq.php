

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    
                </div>
                <!-- /.container-fluid -->
                <nav class="nav nav-pills nav-fill">
  <a class="nav-link " href="<?= base_url('admin/daftar_tpq') ?>">TPQ</a>
  <a class="nav-link" href="<?= base_url('admin/daftar_madrasah') ?>">Madrasah</a>
  <a class="nav-link" href="<?= base_url('admin/daftar_tahfidz') ?>">Program Tahfidz</a>
</nav>
<div class="row col-lg-10">
                        <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('admin/daftar_tpq'); ?>" method="post" >
                            <div class="form-group row">
                                <label for="kode" class="col-sm-2 col-form-label">Kode Guru</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode" name="kode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nipy" class="col-sm-2 col-form-label">NIPY</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nipy" name="nipy">
                                </div>
                            </div>
                            
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Daftarkan</button>
                        </div>
                    </div>
                </div>
                </form>

                    
                </div>
            </div>
            <!-- End of Main Content -->

 