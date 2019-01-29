<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<!-- No 1 -->
<?php 

$m=1;
for($i=1; $i<=4; $i++) {
    
    for($j=$i; $j<=3; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }

    for($c=$m; $c>1; $c--) {
        echo "*";
    }
    echo "<br>";
    $m++;
}

?>

<!-- 
    No 2 
    5.3
    Support for namespaces has been added.
    Support for Late Static Bindings has been added.
    Support for jump labels (limited goto) has been added.
    Support for native Closures (Lambda/Anonymous functions) has been added.
    There are two new magic methods, __callStatic() and __invoke().
    Nowdoc syntax is now supported, similar to Heredoc syntax, but with single quotes.
    It is now possible to use Heredocs to initialize static variables and class properties/constants.
    Heredocs may now be declared using double quotes, complementing the Nowdoc syntax.
    Constants can now be declared outside a class using the const keyword.
    The ternary operator now has a shorthand form: ?:.
    The HTTP stream wrapper now considers all status codes from 200 to 399 to be successful.
    Dynamic access to static methods is now possible:

    5.4
    Support for traits has been added.
    Short array syntax has been added, e.g. $a = [1, 2, 3, 4]; or $a = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];.
    Function array dereferencing has been added, e.g. foo()[0].
    Closures now support $this.
    is now always available, regardless of the short_open_tag php.ini option.
    Class member access on instantiation has been added, e.g. (new Foo)->bar().
    Class::{expr}() syntax is now supported.
    Binary number format has been added, e.g. 0b001001101.
    Improved parse error messages and improved incompatible arguments warnings.
    The session extension can now track the upload progress of files.
    Built-in development web server in CLI mode.

    5.5
    Support for generators has been added via the yield keyword
    try-catch blocks now support a finally block for code that should be run regardless of whether an exception has been thrown or not.
    A new password hashing API that makes it easier to securely hash and manage passwords using the same underlying library as crypt() in PHP has been added. 
    The foreach control structure now supports unpacking nested arrays into separate variables via the list() construct.
    Passing an arbitrary expression instead of a variable to empty() is now supported.
    Array and string literals can now be dereferenced directly to access individual elements and characters
    It is possible to use ClassName::class to get a fully qualified name of class ClassName
    foreach now supports keys of any type. While non-scalar keys cannot occur in native PHP arrays, it is possible for Iterator::key() to return a value of any type, and this will now be handled correctly
    The Apache 2.4 handler SAPI is now supported on Windows.

    No 3
    $x = 3 + “15%” + “$25” = > hasilnya error karena int tidak bisa di gabung dengan string

    No 4
    __get: diakses jika program ingin mengambil data yang tidak bisa diakses.
    __set: diakses jika program ingin memberikan nilai dari suatu property yang inivisible.
    __isset: diakses jika program menjalankan isset() atau empty() pada property yang tidak bisa diakses.
    __unset: diakses jika program menjalankan unset() pada property yang tidak bisa diakses.
    __call: diakses saat object menjalankan method yang invisible atau tidak didefinisikan 
    __callstatic: diakses jika kita menjalankan suatu static method yang invisible atau tidak didefinisikan
-->

<br/>
<br/>

<!-- No 5 -->
<?php 
    function calculate($r){
        $phi = 3.14;

        $luas = $phi * ($r*$r);
        echo "luas lingkaran : ".$luas;
        echo "<br>";

        $volume = 4 * $phi * ($r*$r);
        echo "volume bola : ".$volume;
       
        return;
    }

    calculate(5);
?>

<!--

    No 6
    Curl :  mengirim atau mengambil data dari url

    No 7
    web service flow:
    1. client request ke server
    2. server menggunakan web service menarik data sesuai request
    3. server mengembalikan hasil search data ke client

    Function soapclient() untuk call web service - php

    No 8
    mysql_fetch_array(): mengembalikan hasil array dari tabel menggunakan array index numeric dan array column name
    mysql_fetch_row(): mengembalikan hasil array dari tabel hanya dalam bentuk array index numeric
    mysql_fetch_assoc(): mengembalikan hasil array dari tabel hanya dalam bentuk array column name

    No 9
    Inner join : Mengambil data yang merupakan irisan dari tabel 1 dan tabel 2
    Left join : Mengambil data yang merupakan irisan dan data dari tabel 1 
    Right join : Mengambil data yang merupakan irisan dan data dari tabel 2

-->

<br/>   
<br/>
<br/>

<!-- No 10 -->
<?php
    $z=1;
    for($i=0; $i<9;$i++){
        $x=$z;
        for($j=9;$j>$i;$j--){
            echo $x;
            $x++;
        }
        $z++;
        
        echo "<br>";
    }
?>

    
</body>
</html>