<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class ="d-sm-flex align-items-center justify-content-between mb-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah</button>
    </div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulTambah">Tambah Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapengguna/tambahDataPengguna" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option selected>Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer d-sm-flex align-items-center justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>


    <!-- modal -->
<div class="modal fade" id="formModalUbah" tabindex="-1" role="dialog" aria-labelledby="judulTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulTambah">Ubah Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapengguna/ubahDataPengguna" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option selected>Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer d-sm-flex align-items-center justify-content-between">
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
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data["datapengguna"] as $datapengguna) : ?>
                    <tr>
                        <td><?= $datapengguna["id_pengguna"]; ?></td>
                        <td><?= $datapengguna["username"]; ?></td>
                        <td><?= $datapengguna["password"]; ?></td>
                        <td><?= $datapengguna["role"]; ?></td>
                        <td class="text-center">
                        <a href="<?= BASE_URL; ?>datapengguna/ubah/<?= $datapengguna['id_pengguna']; ?>" class="btn btn-primary mx-2" data-toggle="modal" data-target="#formModalUbah">edit</a>
                        <a href="<?= BASE_URL; ?>datapengguna/hapus/<?= $datapengguna['id_pengguna']; ?>" class="btn btn-danger mx-2" onclick="return confirm('yakin?');">delete</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>