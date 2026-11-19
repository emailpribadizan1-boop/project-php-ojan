<?php
$produk1 = "Modem";
$produk2 = "Hardisk";
$produk3 = "Flash disk";

print "$produk1<br>";
print "$produk2<br>";
print "$produk3<br>";

#Membuat Array di PHP

//membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dilan";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

#Menampilkan isi Array

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
print $barang[0]."<br>";
print $barang[1]."<br>";
print $barang[2]."<br>";

#contoh
// membuat array
$barang = ["Buku Tulis", "Penhapus", "Spidol"];

// menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    print $barang[$i]."<br>";
}

#contoh 2

// membuat array 
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    print $isi."<br>";
}

print "<hr>";

// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    print $barang[$i]. "<br";
    $i++;
}

# Menghapus isi array

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
    ];

// menghapus kucing
unset($hewan[1]);

print $hewan[0]."<br>";
print $hewan[1]."<br>";
print $hewan[2]."<br>";

print "<hr>";

print "<pre";
print_r($hewan);
print "</pre>";

# Menambahkan isi Array
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada indeks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    print $hobiku."<br>";
}

#contoh
// membuat array
$user = [
    "dian",
    "muhar",
    "petanikode"
];

// mengisi array pada indeks ke-1 ("muhar")
$user[1] = "ardianta";

// mencetak isi array
print "<pre";
print_r($user);
print "</pre";

# Array Asosiatif
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "Penulis" => "petanikode",
    "view" => 128
];

// mencetak isi array asosiatif
print "<h2>".$artikel["judul"]."</h2>";
print "<p>oleh: ".$artikel["penulis"]."</p>";
print "<p>View: ".$artikel["view"]."</p>";

$email["subjek"] = "Apa kabar?";
$email["pengirim"] = "dian@petanikode.com";
$email["isi"] = "Apa kabar? sudah lama tidak berjumpa";

print "<pre>";
print_r($email);
print "</pre>";

# Array Multi Dimensi
// ini adalah array dua dimensi
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// cara mengakses isinya
print $matrik[1][0]; // -> output: 7