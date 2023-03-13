<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

<!-- Content Row -->
    <!-- <div class="row"> -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah</button>
</div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulTambah">Tambah Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapetugas/tambahDataPetugas" method="post">
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                        </div>
                        <div class="form-group">
                            <label for="id_pengguna">Pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                <?php foreach ($data['datapengguna'] as $datapengguna): ?>
                                    <option value="<?= $datapengguna['id_pengguna']; ?>"><?= $datapengguna['username']; ?></option>
                                    <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" id="id_pengguna" class="form-control" name="id_pengguna"> -->
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

    <!-- modal ubah -->
<div class="modal fade" id="formModalUbah" tabindex="-1" role="dialog" aria-labelledby="judulTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulTambah">Ubah Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapetugas/ubahDataPetugas" method="post">
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= $datapetugas["nama_petugas"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_pengguna">Pengguna</label>
                            <input type="text" id="id_pengguna" class="form-control" name="id_pengguna">
                        </div>
                </div>
                <div class="modal-footer d-sm-flex align-items-center justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama Petugas</th>
                            <th scope="col">Pengguna</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data["datapetugas"] as $datapetugas) : ?>
                    <tr>
                        <td><?= $datapetugas["id_petugas"]; ?></td>
                        <td><?= $datapetugas["nama_petugas"]; ?></td>
                        <td><?= $datapetugas["username"]; ?></td>
                        <td class="text-center">
                        <a href="<?= BASE_URL; ?>datapetugas/ubah/<?= $datapetugas['id_petugas']; ?>" class="btn btn-primary mx-2" data-toggle="modal" data-target="#formModalUbah">edit</a>
                        <a href="<?= BASE_URL; ?>datapetugas/hapus/<?= $datapetugas['id_petugas']; ?>" class="btn btn-danger mx-2" onclick="return confirm('yakin?');">delete</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>