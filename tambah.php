<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #9A616D;
        }
        .form-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #5a2d36; /* Darker color for the heading */
        }
    </style>
</head>
<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="form-container">
            <h3 class="text-center">Tambah Data Baju</h3>
            <form method="post" action="inputdata.php">
                <div class="mb-3">
                    <label class="form-label">Id Baju</label>
                    <input class="form-control form-control-lg" type="text" name="id_baju" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Baju</label>
                    <input class="form-control form-control-lg" type="text" name="nama_baju" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Model</label>
                    <input class="form-control form-control-lg" type="text" name="model" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Warna</label>
                    <input class="form-control form-control-lg" type="text" name="warna" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input class="form-control form-control-lg" type="number" name="harga" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input class="form-control form-control-lg" type="number" name="stok" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark me-2">Simpan</button>
                    <form method="POST" action="tampilan.php">
                        <button type="submit" class="btn btn-dark">Tampil</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
