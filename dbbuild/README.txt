SISTEM PENDATAAN WARGA RT - VERSI DATABASE MYSQL

1. Ekstrak folder ini ke C:\xampp\htdocs\
2. Jalankan Apache dan MySQL di XAMPP.
3. Buka http://localhost/phpmyadmin
4. Pilih Import -> database.sql -> Go.
5. Buka http://localhost/sistem_pendataan_rt_database/

AKUN DEMO:
Admin: admin / admin123
User : warga / warga123

TABEL:
users, warga, mutasi, surat

Semua menu utama terhubung ke MySQL melalui PDO.
Catatan keamanan: password demo masih plaintext agar mudah dipahami untuk tugas. Untuk produksi gunakan password_hash/password_verify.
