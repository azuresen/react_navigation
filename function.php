<!-- ini tag untuk membuka php  -->
<?php  

// membuat koneksi database
// dolar adalah membuat variable 
$koneksi = mysqli_connect("localhost","root","","db_music");

// // memngambil data table pada data base yang ingin dihubungkan dimana data itu menjadi array 
// $result = mysqli_query ($koneksi,"SELECT * From tbl_album");

// // kita akan merubah data dari $ result menjadi array numering 
// $data = mysqli_fetch_row($result);

// mencoba memanggil/menampilkan data yang dimiliki oleh table tersebut 
// echo($data[1]);

// // untuk menampilkan panjang data nilai data tipe data
// var_dump($data[2]); 

// buatlah sebuah function dengan nama query , dimana function query ini membawa  parameter ($query) tabel yang diikirim dari argument pada file lain yang memanggil atau mengunakan function query ini
function query($query) 
{
    // mengunakan variable global "$koneksi yang seharusnya telah didefinisikan di tempat lain dalam kode untuk menghubungkan ke data base
    global $koneksi;
    //menjalankan query sql yang diterima sebagai argumen ke data base yang ditentukkan dalam "$koneksi" menyimpan hasilmya didalam variable $result 
    $result = mysqli_query($koneksi,$query);
    // membuat array kosong '$rows' untuk menyimpan data dari datABASE
    $rows = [];
    // mengunakan loop while untuk mengambil setiap baris data dari hasil query dan menyimpannya dalam array '$rows'
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // mengambil array '$rows' yang berisi hasil data dari query 
    return $rows;
}

// buat sebuah function dengan nama tambah dimana function query ini membawa parameter {$data} yang dikirimkan dari argument pada file lain yang memanggil atau mengunakan function query
function tambah($data) {
    // // mengunakan variable  global '$conn' seharusnya didefiniiskan ditempat kode untuk menghubungkan ke data base 
    // global $koneksi; 
    // // mengambil dan membersihkan data dari array ' data  ' mengunakan fungsi 'htmlspesial chars, yang membantu mencegah serangan injeksi sql dan html 

    // $nm_album = htmlspecialchars($data["nm_album"]);
    // $genre = htmlspecialchars($data["genre"]);
    // $sampul = htmlspecialchars($data["sampul"]);
    // // menyiapkanquery sql  untuk memasukan data  mengunakan data kedalam tabel ' nama tabel '
    // $query = " INSERT INTO tbl_album VALUES 
    // ('','nm_album','genre','sampul')";

    // mysqli_query($koneksi,$query);

    // return mysqli_affected_rows($koneksi);
    echo $data
    ;
    die;
}


