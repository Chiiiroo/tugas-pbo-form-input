<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kelompok - Form Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Input Data Mahasiswa</h2>
        <p>Silakan isi form di bawah ini dengan benar.</p>
        
        <form action="" method="POST">
            <div class="input-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" placeholder="Contoh: Ichi">
            </div>

            <div class="input-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" placeholder="Contoh: 235150...">
            </div>

            <div class="input-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Sistem Informasi / Ilmu Komputer">
            </div>

            <button type="submit" name="submit">Simpan Data</button>
        </form>

        <?php include 'includes/functions.php'; ?>
    </div>
</body>
</html>