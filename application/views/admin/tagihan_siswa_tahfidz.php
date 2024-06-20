

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
                                <label for="uang_gedung" class="col-sm-2 col-form-label">Uang Gedung</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="uang_gedung" name="uang_gedung" value="<?= $siswa['uang_gedung']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan1" class="col-sm-2 col-form-label">Tagihan Bulan ke-1</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan1" name="tagihan1" value="<?= $siswa['tagihan1']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan2" class="col-sm-2 col-form-label">Tagihan Bulan ke-2</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan2" name="tagihan2" value="<?= $siswa['tagihan2']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan3" class="col-sm-2 col-form-label">Tagihan Bulan ke-3</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan3" name="tagihan3" value="<?= $siswa['tagihan3']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan4" class="col-sm-2 col-form-label">Tagihan Bulan ke-4</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan4" name="tagihan4" value="<?= $siswa['tagihan4']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan5" class="col-sm-2 col-form-label">Tagihan Bulan ke-5</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan5" name="tagihan5" value="<?= $siswa['tagihan5']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tagihan6" class="col-sm-2 col-form-label">Tagihan Bulan ke-6</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="tagihan6" name="tagihan6" value="<?= $siswa['tagihan6']; ?>">
                                </div>
                            </div>
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                        <a href="<?= base_url('siswa/siswa_tahfidz'); ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
                </form>
                    
                </div>
            </div>
            <!-- End of Main Content -->

 