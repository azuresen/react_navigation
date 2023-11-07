<?php
$koneksi = mysqli_connect("localhost","root","","db_music");
if(isset($_POST["simpan"])) {
    // echo $_POST["nama"];
    // echo "<br>" ;
    // echo $_POST["genre"];
    // echo $_POST["sampul"];
    // die;
    // tambah($_POST["nama"]);
    $nama = $_POST["nama"];
    $genre = $_POST["genre"];
    $sampul = $_POST["sampul"];
    // echo $nama;
    // echo "<br>";
    // echo $genre;
    // echo "<br>";
    // echo $sampul;
    $insert = "INSERT INTO tbl_album VALUES ('','$nama','$genre','$sampul')";
    // jalankan perintah insert ,dengan mengunakan variable ($) $koneksi dan perintah mysqli_query
    mysqli_query($koneksi,$insert);
    // lakukan oengecekan aapakah data berhasil disimpan pada data base 
    // mysqli_affected_row, fungsimya untuk melakukan pada data base 
    if(mysqli_affected_rows($koneksi)) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            // perintah dibawah ini mengunakan pada pindah halaman pada java script 
            document.location.href ='index.php';
        </script>
        ";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding:0;
            margin:0;
            font-family:sans-serif;
        }
        fieldset{
            background-color:grey;
        }

        form {
            color:black;
        }
    </style>
</head>
<body>
    <!-- method = " post " atribut metod digunakan untuk menentukan method HTTP yang akan digunakan saat mengirimkan data formulir. dalam  kode ini atribut method tetap kan ke "post" ini yang berati data formulir akan dikirimkan ke server mengunakan metode HTTP post ini sering digunakan untuk mengirim  data yang lebih besar dan komplex seperti formulirnpengisian data  -->
<h1>Form Tambah Album</h1>
    <fieldset style = "width:300px;"> 
    <form action = "" method = "POST">
    <label for="Name">Nama Album:</label>
    <input type="hidden" id ="nama" name ="nama"><br><br>

    <label for="genre">Genre</label>
    <input type="text" id = "genre" name ="genre"><br><br>

    <label for="sampul">sampul</label> 
    <input type="text" id = "sampul" name ="sampul"><br><br>

    <input type="submit" value= "submit" name = "simpan">
    </form>
    </fieldset> 
   
    
</body>
</html>
