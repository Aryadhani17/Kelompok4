Ini adalah project inventory barang yang menggunakan framework Bootstrap dan di optimasikan dengan template start bootstrap sb-admin 2 berikut source codenya https://startbootstrap.com/template/sb-admin

Langkah langkah Membuat Aplikasi stok barang berbasis web(PHP + MySQL)
1. Setup Template + setup database
2. Login & Logout
3. Setup halaman + database
4. Insert data (data barang, barang masuk, barang keluar)
5. Menampilkan data ke table
6. Update + delete

DB :
- Login : iduser (INT, PR), email(VARCHAR, 25), password(VARCHAR, 25).
- Stok : idbarang(INT, PR), namabarang(VARCHAR, 25), deskripsi(VARCHAR, 25), stok(INT).
- masuk : idmasuk(INT, PR), idbarang(INT), tanggal(TIMESTAMP, CURRENT_TIME), keterangan (VARCHAR, 25), quantity (INT).      
- Keluar : idkeluar(INT, PR), idbarang(INT), tanggal(TIMESTAMP, CURRENT_TIME), penerima (VARCHAR, 25). quantity (INT).

Inputan user -> mengambil dari inputan -> cek ke database
-- Jika ada = redirect ke halaman utama
-- else = gagal, Login ulang
