<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       body {
            background-color: #9A616D;
        }
        .form-card {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #343a40; /* Darker title color */
        }
        .form-label {
            font-weight: bold;
        }
        .text-danger {
            font-size: 0.8em;
        }
        .btn-dark {
            background-color: #343a40; /* Custom dark color */
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11">
                <h3 class="text-center mb-4" style="color:white">Ubah Data Baju</h3>
                <div class="form-card">
                    <h5 class="text-center mb-4">Data Baju Yang Akan Diubah</h5>
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM fashion WHERE id_baju='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <form method="post" action="update.php">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Id Baju<span class="text-danger"> *</span></label>
                                <input type="text" name="id_baju" class="form-control" value="<?php echo htmlspecialchars($d['id_baju']); ?>" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Nama Baju<span class="text-danger"> *</span></label>
                                <input type="text" name="nama_baju" class="form-control" value="<?php echo htmlspecialchars($d['nama_baju']); ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Model<span class="text-danger"> *</span></label>
                                <input type="text" name="model" class="form-control" value="<?php echo htmlspecialchars($d['model']); ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Warna<span class="text-danger"> *</span></label>
                                <input type="text" name="warna" class="form-control" value="<?php echo htmlspecialchars($d['warna']); ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Harga<span class="text-danger"> *</span></label>
                                <input type="number" name="harga" class="form-control" value="<?php echo htmlspecialchars($d['harga']); ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Stok<span class="text-danger"> *</span></label>
                                <input type="number" name="stok" class="form-control" value="<?php echo htmlspecialchars($d['stok']); ?>" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark me-2">Simpan</button>
                            <a href="tampilan.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
