<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

<!-- Content Row -->
    <!-- <div class="row"> -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah</button>
</div>

<!-- modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="judulTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datasiswa/tambahDataSiswa" method="post">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn">
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon">
                        </div>
                        <div class="form-group" >
                            <label>Kelas</label>
                                <select name="" class="form-control">
                                <option selected>Pilih</option>
                                    <?php foreach ($data["kelas"] as $kelas): ?>
                                    <option value="<?= $kelas['id_kelas']; ?>"><?= $kelas['nama_kelas']; ?></option>
                                    <?php endforeach; ?> 
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="id pengguna">Pengguna</label>
                            <select name="" id="" class="form-control">
                            <option selected>Pilih</option>
                                <?php foreach ($data["datapengguna"] as $datapengguna): ?>
                                    <option value="<?= $datapengguna['id_pengguna']; ?>"><?= $datapengguna['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id pembayaran">Tahun Ajaran</label>
                            <!-- <input type="text" class="form-control" id="id_pembayaran" name="id_pembayaran"> -->
                            <select name="id_pembayaran" id="" class="form=control">
                                <?php foreach ($data["datapembayaran"] as $datapembayaran): ?>
                                    <option value="<?= $datapembayaran['id_pembayaran']; ?>"><?= $datapembayaran['tahun_ajaran']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">NISN</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Pengguna</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data["datasiswa"] as $datasiswa) : ?>
                    <tr>
                        <td><?= $datasiswa["nisn"]; ?></td>
                        <td><?= $datasiswa["nis"]; ?></td>
                        <td><?= $datasiswa["nama"]; ?></td>
                        <td><?= $datasiswa["alamat"]; ?></td>
                        <td><?= $datasiswa["telepon"]; ?></td>
                        <td><?= $datasiswa["id_kelas"]; ?></td>
                        <td><?= $datasiswa["id_pengguna"]; ?></td>
                        <td><?= $datasiswa["id_pembayaran"]; ?></td>
                        <td class="text-center">
                        <a href="<?= BASE_URL; ?>datasiswa/ubah/<?= $datasiswa['id_siswa']; ?>" class="btn btn-primary mx-2">edit</a>
                        <a href="<?= BASE_URL; ?>datasiswa/hapus/<?= $datasiswa['id_siswa']; ?>" class="btn btn-danger mx-2" onclick="return confirm('yakin?');">delete</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>