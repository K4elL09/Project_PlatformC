<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Kendaraan Masuk</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 40px;
        }

        h2 {
            margin-bottom: 5px;
        }

        form {
            border: 1px solid #ccc;
            padding: 15px;
            width: 400px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }

        .radio-group {
            margin-top: 5px;
        }

        .radio-group input {
            margin-right: 5px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 6px 15px;
        }

        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid gray;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ccc;
        }

        a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Parkiran Kendaraan Gedung XYZ</h2>
    <h4>Pencatatan Kendaraan Masuk</h4>

    <form action="/parkiran/simpan" method="post">
        <label>Plat Nomor</label>
        <input type="text" name="platnomor" maxlength="8" required>

        <label>Jenis Kendaraan</label>
        <div class="radio-group">
            <input type="radio" name="jenis" value="Mobil" checked> Mobil
            <input type="radio" name="jenis" value="Motor"> Motor
        </div>

        <label>Warna Kendaraan</label>
        <select name="warna">
            <option value="Merah">Merah</option>
            <option value="Kuning">Kuning</option>
            <option value="Hitam">Hitam</option>
            <option value="Silver">Silver</option>
            <option value="Coklat">Coklat</option>
            <option value="Putih">Putih</option>
        </select>

        <div class="mb-3">
        <input type="checkbox" name="pemilik" value="Karyawan"> Karyawan
        <input type="checkbox" name="pemilik" value="Tamu"> Tamu
        </div>

        <input type="submit" value="Simpan">
    </form>

    <table>
        <thead>
            <tr>
                <th>Plat No.</th>
                <th>Jenis Kendaraan</th>
                <th>Warna</th>
                <th>Pemilik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parkiran as $p): ?>
            <tr>
                <td><?= esc($p['platnomor']) ?></td>
                <td><?= esc($p['jenis']) ?></td>
                <td><?= esc($p['warna']) ?></td>
                <td><?= esc($p['pemilik']) ?></td>
                <td><a href="/parkiran/hapus/<?= $p['platnomor'] ?>">hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>