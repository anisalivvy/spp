<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

 <!-- Content Row -->
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Bulan Dibayar</th>
                            <th scope="col">Tahun Dibayar</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nama Petugas</th>
                            <th scope="col">Tahun Ajaran</th>
                            </tr>
                        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data["datatransaksi"] as $datatransaksi) : ?>
                    <tr>
                        <td><?= $datatransaksi['id_transaksi']; ?></td>
                        <td><?= $datatransaksi['tanggal_bayar']; ?></td>
                        <td><?= $datatransaksi["bulan_dibayar"]; ?></td>
                        <td><?= $datatransaksi["tahun_dibayar"]; ?></td>
                        <td><?= $datatransaksi["id_siswa"]; ?></td>
                        <td><?= $datatransaksi["id_petugas"]; ?></td>
                        <td><?= $datatransaksi["id_pembayaran"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

