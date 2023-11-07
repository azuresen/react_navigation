<?php
// mengunakan  "require untuk mengimpor atau menghubungkannya  "file function.php" yang berisi difinisi fungsi fungsi yang akan digunakan 
require 'function.php';
// mengunakan fungsi query (yang ada didalam file 'function.php') mengambil data dari tabel "nama_table" dalam database hasilnya disimpan dalam variable "$data"
$data = query("SELECT * FROM tbl_album");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagu</title>
    <style>
        body {
            padding:0;
            margin:0;
            font-family:sans-serif;
        }
        table {
            background-color:green;
        }
        img {
            width:100px;
        }
        button a {
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>

    <h1>Daftar Album</h1>
    <button><a href="tambah.php"> Tambah Album</a></button>
    <table border="1" cellpading = "5" cellspacing = "10">
		<tr>
			<th>No</th>
			<th>Nama Album</th>
			<th>Genre</th>
			<th>Sampul</th>
            <th>Aksi</th>
            
		</tr>
        <!-- baris ini menginisialisasi variable $i dengan nilai 1 ini mungkin digunakan untuk menghitung baris dalam table --> 
		<?php $i = 1; ?>
        <!-- memulai loop foreanch untuk menginterasi melalui setiap elemen dalam array $data setiap elemen akan disimpan dalam variable $rows -->
        <?php foreach ($data as $row) : ?>
        <tr>
            <!-- mencetak nilai variable $i didalam sel tabel ini mungkin digunakan untuk menampilkan nomor baris -->
            <td><?= $i; ?></td>
            <!-- mencetak nilai dari kolom 1 dalama array $row didalam sel tabel -->
            <td><?= $row["nm_album"]; ?></td>
             <!-- mencetak nilai dari kolom 2 dalama array $row didalam sel tabel -->
            <td><?= $row["genre"]; ?></td>
            <!-- mencetak nilai dari kolom 3 dalama array $row didalam sel tabel -->
            <td><img src="assets/<?= $row["sampul"]; ?>" alt=""></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" value=<?= $row["nm_album"]?>/>
        </form>
        </tr>
        <!-- menambahkan 1 ke variable 1 $i,mungkin untuk menghitung nomor baris berikutnya -->
        <?php $i++; ?> 
        <!-- menghitung loop foreach yang telah dimulai sebelumnya-->
        <?php endforeach; ?>
	
	</table>
</body>
</html>