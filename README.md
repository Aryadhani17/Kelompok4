Ini adalah project inventory barang yang menggunakan framework Bootstrap dan di optimasikan dengan template start bootstrap sb-admin 2 berikut source codenya https://startbootstrap.com/template/sb-admin

Langkah langkah Membuat Aplikasi stok barang berbasis web(PHP + MySQL)
1. Setup Template + setup database
2. Login & Logout
3. Setup halaman + database
4. Insert data (data barang, barang masuk, barang keluar)
5. Menampilkan data ke table
6. Update + delete

DB :
- Login : iduser, email, password
- Stok : idbarang, namabarang, deskripsi, stok
- masuk : idmasuk, idbarang, tanggal, keterangan
- Keluar : idkeluar, idbarang, tanggal, penerima

Inputan user -> mengambil dari inputan -> cek ke database
-- Jika ada = redirect ke halaman utama
-- else = gagal, Login ulang
