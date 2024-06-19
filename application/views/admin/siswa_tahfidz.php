

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    
                    <div class="row">
                      <div class="col-lg">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tahun Masuk</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($siswa as $siswa) : ?>
                                <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $siswa['nis']; ?></td>
                                <td><?= $siswa['nama']; ?></td>
                                <td><?= $siswa['alamat']; ?></td>
                                <td><?= $siswa['tahun_masuk']; ?></td>
                                <td>
                                    <a href="<?= base_url('tahfidz/detail_siswa/') . $siswa['id']; ?>" class="badge badge-primary">detail</a>
                                </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->