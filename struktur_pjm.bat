@echo off
REM === Membuat folder target jika belum ada ===
mkdir assets\css
mkdir assets\js
mkdir assets\img
mkdir assets\vendor
mkdir includes
mkdir pages
mkdir admin

REM === Pindahkan CSS ===
move css\*.css assets\css\

REM === Pindahkan JS ===
move js\*.js assets\js\

REM === Pindahkan gambar ===
xcopy img\* assets\img\ /E /I /Y
rmdir /s /q img

REM === Pindahkan vendor ===
move vendor\* assets\vendor\
rmdir /s /q vendor

REM === Pindahkan file layout ke includes ===
move header.php includes\
move footer.php includes\
move navbar.php includes\

REM === Pindahkan file publik ke pages ===
move index.php pages\
move introduction.php pages\
move galeri.php pages\
move contact.php pages\
move *.php pages\

REM === Pindahkan file admin ke admin (jika belum ada) ===
if exist admin move admin\* admin\

REM === Pindahkan file config, login, logout kembali ke root ===
move pages\config.php .
move pages\login.php .
move pages\logout.php .

echo === Struktur folder berhasil diupdate! ===
