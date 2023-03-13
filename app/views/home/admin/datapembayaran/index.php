<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pembayaran</h1>
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
                    <h5 class="modal-title" id="judulTambah">Tambah Data Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapembayaran/tambahDataPembayaran" method="post">
                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran">
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="nominal" id="nominal" class="form-control" name="nominal">
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
                    <h5 class="modal-title" id="judulTambah">Ubah Data Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL ?>datapembayaran/ubahDataPembayaran" method="post">
                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran">
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="nominal" id="nominal" class="form-control" name="nominal">
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
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data["datapembayaran"] as $datapembayaran): ?>
                    <tr>
                        <td><?= $datapembayaran["id_pembayaran"]; ?></td>
                        <td><?= $datapembayaran["tahun_ajaran"]; ?></td>
                        <td><?= $datapembayaran["nominal"]; ?></td>
                        <td class="text-center">
                        <a href="<?= BASE_URL; ?>datapembayaran/ubah/<?= $datapembayaran['id_pembayaran']; ?>" class="btn btn-primary mx-2" data-toggle="modal" data-target="#formModalUbah">edit</a>
                        <a href="<?= BASE_URL; ?>datapembayaran/hapus/<?= $datapembayaran['id_pembayaran']; ?>" class="btn btn-danger mx-2" onclick="return confirm('yakin?');">delete</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>