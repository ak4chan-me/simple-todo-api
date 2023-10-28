# simple-todo-api
Aplikasi ini digunakan bersama program membaca todo dari android

Aplikasi ini tidak memiliki fitur keamanan, gunakan dengan kehati-hatian

Gunakan XAMPP atau aplikasi web server lainnya.

# Instalasi
Untuk menginstall, gunakan MySQL, dan dump data pada file database.sql ke dalam database.

Buka command prompt, dan pindah ke direktori dimana file mysql tersebut berada
```bash
Microsoft Windows [Version 10.0.22621.2428]
(c) Microsoft Corporation. All rights reserved.

C:\Users\User>d:

D:\>cd xampp\mysql\bin

D:\xampp\mysql\bin>mysql -uroot -p < d:\xampp\htdocs\simple-todo-api\database.sql
Enter password: ******

D:\xampp\mysql\bin>
```

# Menjalankan

Untuk mengambil data, Buka browser dan jalankan 
```bash
http://localhost/simple-tod-api/ambil.php
```
Untuk menambah data, harus melakukan post data dengan data sbb:

URL:
```bash
http://localhost/simple-tod-api/simpan.php
```

Method POST Parameter:
```php
$_POST['data']['msgDate']; // data tanggal
$_POST['data']['msgMessage']; // data pesan
$_POST['data']['msgUser']; // data pengguna
```
