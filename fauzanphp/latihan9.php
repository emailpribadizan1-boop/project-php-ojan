<?php

print "<h2>Belajar pemrogramman PHP untuk pemula</h2>";
print "<h2>Cara menggunakan perulangan di PHP</h2>";
print "<h2>Memahami Struktur kondisi IF di PHP</h2>";
print "<h2>Memahami perulangan di PHP</h2>";
print "<h2>Prosedur dan fungsi di PHP</h2>";

#1. Perulangan For
for ($i = 0; $i < 10; $i++){
    // blok kode yang akan diulangan disini!
}

for($i = 0; $i < 10; $i++){
    print "<h2>Ini perulangan ke-$i</h2>";
}

#2. Perulangan While
$ulangi = 0;

while($ulangi < 10){
    print "<P>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

#3.Peulangan Do/while 
$ulangi = 10;
do{
    print "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
}   while ($ulangi > 0);

#4.Peulangan Foreach
$books = [
    "Panduan belajar PHP untuk pemula",
    "Membangun aplikasi web dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat bot dengan PHP"
];
    print "<h5>Judul buku PHP:</h5>";
    print "<ul>";
    foreach($books as $buku){
        print "<li>$buku</li>";
    }
    print "</ul";

    $i = 0;
    while($i < 10){
        for($j = 0; $j <10; $j++){
            print "Ini perulangan ke ($i, $j)<br>";
        }
        $j++;
    }

    

