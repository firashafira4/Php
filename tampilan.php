<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #9A616D;
        }
        .oval-table {
            border-radius: 60px;
            overflow: hidden;
            margin: 60px 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }
        .table {
            background-color: white;
        }
        th {
            background-color: #f5f5f5;
        }
        .btn-custom {
            background-color: #5a2d36;
            color: white;
        }
        .btn-custom:hover {
            background-color: #7a4e56;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h1 class="text-white">List Data Baju</h1>
            <p class="text-white">Kelola Data Baju Anda Dengan Mudah</p>
        </div>
        <div class="oval-table">
            <div class="p-3">
                <form method="POST" action="tambah.php" class="mb-4">
                    <button type="submit" class="btn btn-custom">Tambah</button>
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Baju</th>
                            <th>Nama Baju</th>
                            <th>Model</th>
                            <th>Harga</th>
                            <th>Warna</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM fashion");
                        while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($d['id_baju']); ?></td>
                                <td><?php echo htmlspecialchars($d['nama_baju']); ?></td>
                                <td><?php echo htmlspecialchars($d['model']); ?></td>
                                <td><?php echo htmlspecialchars($d['harga']); ?></td>
                                <td><?php echo htmlspecialchars($d['warna']); ?></td>
                                <td><?php echo htmlspecialchars($d['stok']); ?></td>
                                <td>
                                    <a role="button" class="btn btn-custom" href="ubah1.php?id=<?php echo $d['id_baju']; ?>">UBAH</a>
                                    <a role="button" class="btn btn-danger" href="delete.php?id=<?php echo $d['id_baju']; ?>">HAPUS</a>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
