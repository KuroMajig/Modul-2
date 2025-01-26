# Modul-2

<h4>Lat2_1_312310696.html</h4>

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <p>
        Adam Was Here guys
    </p>
</body>

</html>
```

Jalankan kode di atas tanpa menggunakan server, apa yang terjadi? Kemudian hapus tag <body>,
Amati apa yang terjadi? Lalu simpulkan !

Jawab: 

* Tanpa Server Browser dapat merender file HTML statis tanpa server.

* Menghapus <body> Browser masih akan menampilkan konten karena secara otomatis mengasumsikan struktur <body> meskipun tag tersebut tidak ada.

* HTML adalah Fault Tolerant Browser dirancang untuk mentoleransi kesalahan kecil dalam kode HTML dan tetap menampilkan konten selama tidak ada kesalahan kritis.

<h4>Lat2_2_312310696.php</h4>

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <style type="text/css">
        h1 {
            color: orange;
            text-align: center;
        }

        p {
            font-family: "Times New Roman";
            font-size: 40px;
        }
    </style>
</head>

<body>
    <h1>Hello World</h1>
    <p>
        Adam was here guys ^^
    </p>
</body>

</html>
```

Jalankan kode di atas dengan menggunakan server. Apa yang terjadi? Apakah ada perbedaan dengan
Lat2_1 ? Kemudian hapus tag </h1>, amati apa yang terjadi? Apakah ada perubahan dari
sebelumnya ? Lalu simpulkan !

Jawab: 
* Menjalankan dengan Server vs. Tanpa Server: Untuk HTML statis sederhana, tidak ada perbedaan dalam hasil visual karena server hanya menyediakan akses file.

* Menghapus Tag Penutup `<h1>` maka Konten setelah `<h1>` mungkin akan salah dianggap sebagai bagian dari header.

<h4>Lat2_3_312310696.php</h4>

```
<body>
    <form action="proses.php" method="GET">
        <input type="text" name="nama">
        <input type=”submit” value=”Go”>
    </form>
</body>
```

Setelah menjalankan kode tersebut dengan method POST, maka gantikan dengan GET, lalulihatlah
perbedaannya pada url di browser. Simpulkan!

Jawab: 

* Ketika form menggunakan `method="POST"`, URL di browser tidak akan menampilkan data yang dikirimkan.

* Ketika form menggunakan `method="GET"`, data yang dimasukkan akan terlihat di URL.

<h4>Lat2_4_3123210696.php</h4>

<h6>Code Lat2_4_3123210696.php</h6>

```
<FORM ACTION="proses02.php" METHOD="POST" NAME="input">
    Nama Anda : <input type="txt" name="nama">
    </br>
</FORM>
</FORM>
```

<h6>Code Proses02.php</h6>

```
<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>
```

Jalankan kode Lat2_4, kemudian isikan data input dan tekan tombol Input ! Apa yang terjadi ?
Coba ulangi dengan mengosongkan data input dan amati apa yang terjadi ! Jelaskan alur
pengiriman data dari form yang ada di file Lat2_2 dan file proses02 !

Alur pengiriman data dari form:

1. Pengisian Form: Pengguna mengisi data pada input `nama` di file `Lat_2_4_312310696.php`.

2. Submit data: Ketika tombol Kirim ditekan, browser membuat HTTP request POST ke file `proses02.php`. Data dikirimkan dalam body request

3. Penerimaan Data di `proses02.php`: File `proses02.php` membaca data POST. Kondisi `if (isset($_POST['Input']))` akan true karena tombol `Input` ada. Nilai `$_POST['nama']` diambil dan ditampilkan sebagai output.

<h4>Latihan 5</h4>

Rubah kembali code pada file Lat2_4 dengan cara menghapus tulisan required pada baris 2 !
Jalankan code dan kosongi data input kemudian tekan tombol Input, apa yang terjadi ? Jelaskan
apa fungsi dari kode required ?

Setelah menghapus atribut `required`, kode menjadi:

```
<FORM ACTION="proses02.php" METHOD="POST" NAME="input">
    Nama Anda: <input type="text" name="nama">
    <br>
    <input type="submit" name="Input" value="Kirim">
</FORM>
```

Ketika tombol "input" ditekan tanpa mengisi data: Form tetap dikirim ke `proses02.php`. Nilai `$_POST['nama']` di `proses02.php` akan kosong `("")`.
Output di browser akan menjadi seperti ini

```
Nama Anda : <b></b>
```

Jadi Atribut required adalah fitur yang digunakan pada elemen input untuk memastikan bahwa pengguna mengisi input sebelum dapat mengirimkan form.

<h4>Memodifikasi file Lat2_2_3123210696.php</h4>

Modifikasi code dalam file Lat2_2_NIM.php hingga seperti ini !

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <style type="text/css">
        h1 {
            color: orange;
            text-align: center;
        }

        p {
            font-family: "Times New Roman";
            font-size: 40px;
        }
    </style>
</head>

<body>
    <h1>Hello World</h1>
    <p>
        Adam was here guys ^^
    </p>
</body>

</html>
```

a. Jalankan kode Lat2_2, dan kemudian amati yang terjadi ! Apakah ada perbedaan daripada sebelumnya ? Berilah penjelasan kenapa itu bisa terjadi ?

b. Menurut kalian dalam latihan 6 ini cara penulisan CSS apa yang dipakai ?

c. Rubahlah cara penulisan CSS ini dalam tipe linked style sheet !

Jawab:

a. Judul "Hello World" berubah warna menjadi oranye. Lalu paragraf "Adam was here guys^^" menggunakan font Times New Roman dan ukurannya menjadi 40px, lebih besar dari sebelumnya

b. Dalam latihan ini, penulisan CSS menggunakan Embedded Style Sheet atau Internal CSS.

<h4>Lat2_7_3123210696.php</h4>

```
<!DOCTYPE html>
<html>

<body>

    <h1>Operasi JS</h1>

    <p id="demo"></p>

    <script>
        var x = 5;
        var y = 2;
        var z = x + y;
        document.getElementById("demo").innerHTML = z;
    </script>
</body>

</html>
```

Jalankan kode dan amati apa yang terjadi ? Apa guna dari baris 13 ?

Baris 13 adalah inti dari script karena Menghubungkan hasil operasi JavaScript dengan elemen HTML dan Menampilkan hasil (`z`) langsung di halaman web untuk dilihat oleh pengguna.

<h4>Latihan 9</h4>

Buatlah beberapa fungsi pemrograman sederhana dengan menggunakan javascript atas perintahdari
asisten !
Menghitung luas pakai javascript

```
<?php
function luasPersegi($sisi)
{
    return $sisi * $sisi;
}
function luasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}
function luasLingkaran($jariJari)
{
    return pi() * pow($jariJari, 2);
}
function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}
echo "Luas persegi dengan sisi 4: " . luasPersegi(4) . "\n"; // Output: 16
echo "Luas persegi panjang dengan panjang 5 dan lebar 3: " . luasPersegiPanjang(5, 3) . "\n"; // Output: 15
echo "Luas lingkaran dengan jari-jari 7: " . round(luasLingkaran(7), 2) . "\n"; // Output: 153.94
echo "Luas segitiga dengan alas 6 dan tinggi 8: " . luasSegitiga(6, 8) . "\n"; // Output: 24
?>
```

<h4>Latihan 10</h4>

Modifikasilah kode pada Latihan 4 dengan menggunakan Javascript sehingga proses formvalidation
dapat dilakukan dengan javascript !

Hasil modifikasi kode pada Lat2_4_3123210696.php

```
<FORM ACTION="proses02.php" METHOD="POST" NAME="input" onsubmit="return validateForm()">
    Nama Anda: <input type="text" name="nama" id="nama">
    <br>
    <input type="submit" name="Input" value="Kirim">
</FORM>

<script>
function validateForm() {
    var nama = document.getElementById("nama").value;
    
    if (nama == "") {
        alert("Nama harus diisi!");
        return false;  // Mencegah form dikirim jika kosong
    }
    
    return true;
}
</script>
```
