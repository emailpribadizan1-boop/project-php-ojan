<?php
// fungsi echo()
    print "<h2>Belajar PHP itu mudah</h2>";
    print ("Hello world!<br>");
    print "Aku sedang belajar PHP!<br>";
    print "Ini"."teks"."yang"."dibuat"."terpisah.";

    // Fungsi print()

    print "<h2>Belajar PHP dari Nol!</h2>";
    print "Hello world!<br>";
    print "Belajar mencetak teks di PHP!<br>";

    $cetak = print("Hello World!<br>");
    //menggabungkan String atau Teks di PHP

    print "Ini". "Teks". "Yang". "Dibuat". "Terpiah.";

    $txt1 = "Tutorial PHP";
    $txt2 = "Petanikode.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Aku belajar pemrograman PHP di " .$txt2 . "<br>";
    print $x + $y;
    
    //fungsi print() untuk formatting Teks

    $txt = "petanikode.com";
    printf("Aku belajar pemrograman di %s<br> , $txt");

    // misalkan kta punya bilangan dengan notasi E seperti ini
    $harga = 100000;

    // jika kita cetak dengan echo;
    echo "Harganya adalah Rp $harga";

    // Jika kita dengan printf
    printf("Harganya adalah Rp %.2f, $harga");

    //mencetak Tanda Kutip
    print 'hari ini hari jum\at';

    ?>