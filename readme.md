# Pemesanan Taxi Online

Aplikasi Pemesanan Taxi Online adalah sebuah aplikasi sederhana yang memungkinkan pengguna untuk memesan taxi secara online. Aplikasi ini memiliki fitur untuk menginputkan data pemesanan seperti nama pelanggan, nomor HP, jenis mobil, dan jarak tempuh. Berdasarkan data pemesanan yang dimasukkan, aplikasi akan menghitung biaya sewa taxi sesuai dengan jarak tempuh yang telah ditentukan.

## Fitur

- Memasukkan data pemesanan seperti nama pelanggan, nomor HP, jenis mobil, dan jarak tempuh.
- Menghitung biaya sewa taxi berdasarkan jarak tempuh dengan aturan tarif tertentu.
- Menyimpan data pemesanan ke dalam file JSON.
- Menampilkan data pemesanan dan total biaya sewa kepada pengguna.

## Penggunaan

1. Buka aplikasi Pemesanan Taxi Online.
2. Isi data pemesanan yang diminta, yaitu nama pelanggan, nomor HP, jenis mobil, dan jarak tempuh.
3. Klik tombol "Pesan" untuk menghitung biaya sewa dan menyimpan data pemesanan.
4. Aplikasi akan menampilkan data pemesanan dan total biaya sewa kepada pengguna.

## Pengembangan

Aplikasi ini dikembangkan menggunakan bahasa pemrograman PHP dan HTML. Berikut adalah beberapa instruksi kerja yang dapat diperhatikan untuk pengembangan aplikasi ini:

1. Variabel `$mobil` berisi data jenis mobil yang dipesan dalam bentuk array satu dimensi. Anda dapat menambahkan atau mengubah data jenis mobil sesuai kebutuhan.
2. Fungsi `hitung_sewa` digunakan untuk menghitung biaya sewa taxi berdasarkan jarak tempuh dan tarif per kilometer. Anda dapat mengubah rumus perhitungan biaya sewa sesuai dengan kebijakan perusahaan.
3. File `bootstrap.css` digunakan untuk menghubungkan dengan berkas CSS yang menyediakan gaya tampilan aplikasi. Anda dapat mengubah atau menyesuaikan tampilan CSS sesuai dengan kebutuhan desain.
4. Instruksi kerja nomor 6 digunakan untuk menampilkan dropdown pilihan jenis mobil Taxi Online berdasarkan data pada array `$mobil` menggunakan perulangan. Anda dapat menambahkan atau mengubah pilihan jenis mobil sesuai kebutuhan.
5. Instruksi kerja nomor 10 digunakan untuk menyimpan data pemesanan yang berbentuk JSON ke dalam file JSON. Anda dapat menyesuaikan lokasi atau nama file yang digunakan untuk menyimpan data.

## Lisensi

Aplikasi Pemesanan Taxi Online dibuat dengan tujuan pembelajaran dan tidak memiliki lisensi resmi. Anda dapat menggunakan, mengubah, atau mendistribusikan kode ini sesuai dengan kebutuhan Anda.

