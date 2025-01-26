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

* Menghapus Tag Penutup "<h1>" maka Konten setelah "<h1>" mungkin akan salah dianggap sebagai bagian dari header.
