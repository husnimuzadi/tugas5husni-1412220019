<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Barang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .table thead th {
            white-space: nowrap;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .action-buttons .btn {
            min-width: 10px;
            padding: 5px 4px;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <div class="card border border-primary">
            <div class="card-header bg-primary text-white">List Data Barang</div>
            <div class="card-body">
                <div class="button-container mb-3">
                    <button class="btn btn-primary mt-2 mb-3" onclick="window.location.href='<?php echo base_url('barang/tambah_barang'); ?>'"> <i class="fas fa-plus"></i>Tambah Barang</button>
                    <form action="<?php echo site_url('barang/search_barang'); ?>" method="post" class="row g-2">
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : ''; ?>" name="keyword" placeholder="Masukkan Keyword Pencarian...">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-80" type="submit"><i class="fas fa-search"></i> Cari</button>
                            <button class="btn btn-success w-80" type="button" onclick="window.location.href='<?php echo base_url('barang/data_barang'); ?>'"><i class="fas fa-sync-alt"></i> Reset</button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <?php if (empty($barang)): ?>
                        <div class="alert alert-warning" role="alert">
                            Tidak ada data barang yang ditemukan.
                        </div>
                    <?php else: ?>
                        <table class="table table-bordered table-hover mt-2">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center">Kode Barang</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Stok</th>
                                    <th class="text-center">Supplier</th>
                                    <th class="text-center">Tanggal Masuk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang as $brg): ?>
                                    <tr>
                                        <td><?php echo $brg['Kode_Barang']; ?></td>
                                        <td><?php echo $brg['Nama_Barang']; ?></td>
                                        <td><?php echo $brg['Kategori_Barang']; ?></td>
                                        <td><?php echo $brg['Deskripsi_Barang']; ?></td>
                                        <td><?php echo $brg['Harga_Jual']; ?></td>
                                        <td><?php echo $brg['Stok_Barang']; ?></td>
                                        <td><?php echo $brg['Supplier_Barang']; ?></td>
                                        <td><?php echo $brg['Tanggal_Masuk']; ?></td>
                                        <td class="text-center">
                                            <div class="action-buttons">
                                                <a href="<?php echo site_url('barang/ubah_barang/' . $brg['ID_Barang']); ?>" class="btn btn-warning btn-sm">Ubah</a>
                                                <a href="<?php echo site_url('barang/hapus_barang/' . $brg['ID_Barang']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
