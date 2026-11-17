# CLAUDE.md

## 1. Peran dan tujuan proyek

Kamu adalah AI coding assistant yang membantu mengembangkan **Website Apotek** ini. Tujuan utamanya adalah meningkatkan kualitas tampilan, pengalaman pengguna, keamanan, dan kerapian kode tanpa mengubah proyek menjadi aplikasi lain.

Website harus terasa seperti website apotek sungguhan yang bisa dipahami dan digunakan oleh konsumen umum, bukan sekadar halaman latihan CRUD. Namun, jangan mengarang fitur bisnis yang belum diminta atau belum didukung backend.

**Prinsip utama:**
- Utamakan kebutuhan konsumen: mudah menemukan informasi obat, membaca detail produk, memahami kategori, dan menemukan informasi apotek.
- Pisahkan pengalaman konsumen (halaman publik) dari pengelolaan data (halaman admin).
- Pertahankan fitur dan alur yang sudah bekerja.
- Kerjakan peningkatan secara bertahap dan konsisten.
- Jangan mengklaim website memiliki fitur yang sebenarnya belum tersedia.

## 2. Konteks teknis proyek

Berdasarkan struktur proyek yang tersedia:

- Framework: Laravel `^13.8`
- PHP: `^8.3`
- Frontend: Blade
- Styling: Tailwind CSS `^4.3.3`
- Build tool: Vite `^8`
- Local development environment: Laragon
- Database: gunakan konfigurasi yang sudah ada di `.env` dan `config/database.php`. Jangan mengasumsikan atau mengganti jenis database tanpa alasan dan persetujuan.
- Autentikasi menggunakan Laravel dan controller proyek yang sudah tersedia.

File dan folder penting:
- `routes/web.php` — definisi route.
- `app/Http/Controllers/` — controller.
- `app/Models/Medicine.php` — model obat.
- `app/Models/Category.php` — model kategori.
- `resources/views/` — Blade views.
- `resources/views/components/` — komponen Blade, termasuk navbar dan footer.
- `resources/css/app.css` — entry point styling Tailwind.
- `resources/js/app.js` — entry point JavaScript.
- `public/gambars/` — lokasi gambar yang saat ini digunakan oleh beberapa halaman.
- `database/migrations/` — struktur tabel.

Jangan mengganti framework, bahasa, CSS framework, atau build tool. Jangan memindahkan proyek ke stack lain.

## 3. Fitur yang sudah terlihat di proyek

Gunakan daftar ini sebagai konteks awal, bukan asumsi bahwa semuanya sudah sempurna:

### Halaman publik
- Route `/` menampilkan halaman utama melalui `FirstController@halamanUser`.
- Halaman utama menampilkan daftar obat.
- Route `/about` tersedia.
- Route `/page2` masih berupa halaman sederhana dan perlu dievaluasi sebelum dipakai atau dihapus.

### Pengelolaan obat
Route yang saat ini tersedia dan berada di dalam middleware `auth`:
- `GET /obat`
- `GET /obat/create`
- `POST /obat/store`
- `GET /obat/{id}`
- `GET /obat/edit/{id}`
- `PUT /obat/update/{id}`
- `GET /obat/delete/{id}`

Controller: `MedicineController`.

Data obat yang terlihat dari model:
- `name`
- `price`
- `description`
- `expired`
- `medicine_image`
- `category_id`

Relasi: satu obat dimiliki oleh satu kategori melalui `category()`.

### Pengelolaan kategori
Route kategori yang tersedia dan berada di dalam middleware `auth`:
- `GET /category`
- `GET /category/create`
- `POST /category/store`
- `DELETE /category/delete/{id}`

Controller: `CategoryController`.

Data kategori:
- `name`
- `description`

Relasi: satu kategori dapat memiliki banyak obat melalui `medicines()`.

### Autentikasi
- Route login dan register tersedia untuk guest.
- Route logout menggunakan POST.
- Route pengelolaan obat dan kategori saat ini dilindungi middleware `auth`.

Sebelum mengubah route atau alur autentikasi, periksa implementasi aktualnya terlebih dahulu.

## 4. Arah produk dan batasan fitur

Bangun pengalaman website apotek yang informatif dan profesional.

### Prioritas halaman konsumen
1. **Beranda**
   - Identitas apotek dan navigasi yang jelas.
   - Penjelasan singkat tentang apotek.
   - Pencarian atau penelusuran katalog jika dapat dibuat dengan backend yang benar.
   - Daftar obat atau produk yang tersedia berdasarkan data database.
   - Kategori produk.
   - Informasi kontak dan jam operasional hanya jika datanya tersedia atau sudah dikonfirmasi.

2. **Katalog obat**
   - Daftar produk dengan nama, gambar, kategori, harga, dan informasi relevan yang memang tersedia.
   - Tampilan kosong yang jelas jika belum ada data.
   - Pencarian, filter, dan pagination boleh ditambahkan jika benar-benar berfungsi.
   - Jangan menampilkan data contoh seolah-olah merupakan stok atau produk asli.

3. **Detail produk**
   - Gambar, nama, kategori, harga, deskripsi, dan tanggal kedaluwarsa jika memang relevan untuk ditampilkan.
   - Informasi harus berasal dari database.
   - Jangan membuat klaim khasiat, dosis, keamanan, atau indikasi medis yang tidak berasal dari sumber tepercaya dan tidak disetujui pengelola apotek.

4. **Informasi apotek**
   - Tentang apotek, alamat, kontak, jam operasional, dan layanan hanya berdasarkan informasi yang diberikan pemilik/pengelola.
   - Jangan mengarang alamat, nomor telepon, sertifikasi, izin, atau jam buka.

### Area admin
- Admin mengelola data obat dan kategori melalui halaman yang terpisah dari pengalaman konsumen.
- Pertahankan autentikasi untuk semua operasi pengelolaan.
- Jangan menampilkan tombol edit, hapus, atau tambah data kepada pengunjung umum.
- Jangan menganggap semua pengguna yang login otomatis merupakan admin. Jika otorisasi peran belum tersedia, jangan membuat klaim atau kontrol admin palsu. Laporkan kebutuhan role/permission sebelum menerapkannya.

### Jangan menambahkan tanpa instruksi
Jangan membuat fitur berikut hanya karena terlihat seperti fitur umum e-commerce:
- Keranjang belanja.
- Checkout atau pemesanan online.
- Pembayaran.
- Pengiriman.
- Akun pelanggan.
- Chat konsultasi dokter/apoteker.
- Resep digital atau unggah resep.
- Klaim stok real-time.
- Integrasi WhatsApp atau payment gateway.

Jika suatu fitur diperlukan agar pengalaman konsumen lebih baik, jelaskan kebutuhan backend dan minta persetujuan sebelum mengimplementasikannya.

## 5. Prinsip desain UI/UX

Gunakan gaya visual apotek yang bersih, terpercaya, modern, dan mudah dibaca.

### Visual
- Gunakan layout yang rapi dengan whitespace cukup.
- Gunakan warna yang konsisten dan tidak terlalu ramai.
- Warna hijau atau teal boleh menjadi warna utama, tetapi pilih palet yang memiliki kontras teks memadai.
- Gunakan tipografi yang jelas dan ukuran teks yang nyaman.
- Gunakan card produk dengan ukuran gambar konsisten.
- Hindari gradient berlebihan, efek blur berlebihan, animasi dekoratif yang tidak perlu, dan tampilan seperti template generik.
- Jangan menggunakan emoji sebagai pengganti ikon UI utama.
- Jangan mengubah seluruh desain hanya untuk mengejar tren visual.

### Responsif
Pastikan halaman dapat digunakan pada:
- Mobile kecil.
- Mobile besar.
- Tablet.
- Laptop dan desktop.

Periksa navbar, form, tabel, card produk, modal, dan tombol pada layar kecil. Tabel admin yang lebar harus memiliki solusi responsif, bukan membuat seluruh halaman melebar.

### Aksesibilitas
- Gunakan struktur heading yang berurutan.
- Gunakan label pada setiap input form.
- Sediakan alt text yang sesuai untuk gambar produk.
- Pastikan tombol dan link memiliki tujuan yang jelas.
- Jangan mengandalkan warna saja untuk menyampaikan status.
- Pastikan kontras teks dan background cukup.
- Elemen interaktif harus dapat digunakan dengan keyboard.

### Konsistensi komponen
Buat atau gunakan komponen Blade untuk elemen yang berulang jika memang membantu, misalnya:
- Navbar.
- Footer.
- Product card.
- Form field.
- Button.
- Alert atau flash message.
- Pagination.

Jangan membuat abstraksi berlebihan untuk elemen yang hanya dipakai sekali.

## 6. Aturan Laravel dan kualitas kode

- Ikuti pola Laravel yang sudah digunakan dalam proyek.
- Gunakan named route jika tersedia atau saat menambahkan route baru.
- Gunakan `route()` untuk URL internal jika route name sudah didefinisikan.
- Gunakan `@csrf` pada setiap form yang mengubah data.
- Gunakan method spoofing `@method('PUT')`, `@method('PATCH')`, atau `@method('DELETE')` sesuai route.
- Operasi penghapusan data wajib menggunakan HTTP DELETE, bukan GET.
- Gunakan Form Request atau `$request->validate()` untuk validasi input.
- Jangan mempercayai input dari browser.
- Gunakan Eloquent dan relasi model yang sudah ada secara tepat.
- Hindari query berulang di dalam loop; gunakan eager loading saat dibutuhkan.
- Gunakan pagination untuk daftar data yang berpotensi panjang.
- Tangani data yang tidak ditemukan dengan respons 404 atau alur yang sesuai.
- Gunakan flash message yang jelas setelah operasi berhasil atau gagal.
- Jangan menaruh query database atau logika bisnis kompleks di Blade.
- Hindari duplikasi kode.
- Jangan mengubah nama kolom, tabel, route, atau model tanpa memeriksa seluruh dampaknya.

## 7. Keamanan dan data

Website apotek berkaitan dengan informasi produk kesehatan. Perlakukan data dengan hati-hati.

- Validasi nama, harga, deskripsi, kategori, tanggal kedaluwarsa, dan file gambar.
- Harga harus berupa angka valid dan tidak boleh negatif.
- Validasi gambar berdasarkan tipe MIME, ukuran, dan ekstensi yang diizinkan.
- Jangan menggunakan nama file upload dari pengguna sebagai nama file penyimpanan tanpa penanganan yang aman.
- Simpan file upload melalui mekanisme Laravel Storage jika memungkinkan. Periksa kompatibilitas dengan file lama sebelum memindahkan lokasi gambar.
- Jangan menghapus file gambar lama sebelum memastikan file pengganti berhasil disimpan.
- Lindungi seluruh operasi tulis/hapus dengan autentikasi dan otorisasi yang sesuai.
- Gunakan CSRF protection.
- Jangan menampilkan stack trace, kredensial, atau detail internal aplikasi kepada pengguna.
- Jangan pernah membaca, menyalin, atau menampilkan isi rahasia `.env`.
- Jangan mengubah konfigurasi database atau kredensial Laragon.
- Jangan menghapus data database, menjalankan migrate:fresh, atau melakukan reset database tanpa persetujuan eksplisit.

## 8. Tanggung jawab konten kesehatan

- Website ini adalah katalog/informasi apotek, bukan pengganti konsultasi tenaga kesehatan.
- Jangan membuat diagnosis atau rekomendasi pengobatan.
- Jangan mengarang dosis, efek samping, kontraindikasi, komposisi, atau klaim penyembuhan.
- Jangan menyatakan suatu obat aman untuk semua orang.
- Jangan membuat produk resep seolah-olah dapat dibeli bebas.
- Jika informasi medis tidak tersedia atau belum diverifikasi, tampilkan hanya informasi produk yang sudah ada dan sarankan konsumen menghubungi apoteker atau tenaga kesehatan.
- Jangan membuat label “tersedia”, “habis”, atau jumlah stok jika database belum memiliki data stok yang valid.
- Jangan membuat harga, diskon, promo, rating, testimoni, atau ulasan palsu.
- Jangan menggunakan foto produk yang tidak sesuai dengan produk yang ditampilkan.

## 9. Cara bekerja sebelum mengubah kode

Setiap kali menerima tugas:

1. Baca file yang relevan terlebih dahulu.
2. Periksa route, controller, model, migration, dan Blade yang berkaitan.
3. Pahami alur data dari database sampai tampilan.
4. Identifikasi fitur yang sudah berjalan dan bagian yang bermasalah.
5. Buat perubahan sekecil mungkin untuk mencapai tujuan.
6. Pertahankan fitur lama kecuali memang diminta untuk mengubahnya.
7. Periksa tampilan desktop dan mobile.
8. Jalankan pemeriksaan yang tersedia, seperti `php artisan test`, `php artisan route:list`, atau `npm run build`, sesuai perubahan.
9. Jika tidak dapat menjalankan perintah, jelaskan bahwa pemeriksaan tersebut belum dilakukan.
10. Berikan ringkasan file yang diubah, perubahan yang dibuat, dan hal yang perlu diuji.

Jangan langsung menulis ulang banyak file sebelum memahami struktur proyek.

## 10. Batasan saat melakukan perubahan

- Jangan mengubah seluruh struktur folder tanpa alasan teknis yang kuat.
- Jangan mengganti Tailwind CSS dengan Bootstrap atau framework lain.
- Jangan menambahkan dependency baru jika fitur dapat dibuat dengan teknologi yang sudah tersedia.
- Jangan menghapus file, route, model, migration, atau fitur lama tanpa menjelaskan dampaknya.
- Jangan membuat data dummy di production.
- Jangan membuat tombol yang hanya terlihat aktif tetapi tidak memiliki fungsi.
- Jangan membuat link `href="#"` untuk aksi yang seharusnya bekerja.
- Jangan menambahkan animasi yang mengganggu atau memperlambat halaman.
- Jangan melakukan refactor besar ketika tugas hanya meminta perbaikan kecil.
- Jangan mengubah konfigurasi lokal Laragon kecuali diminta.
- Jangan menjalankan perintah destruktif tanpa persetujuan.

## 11. Standar hasil akhir

Setiap hasil pengerjaan harus memenuhi standar berikut:

- Tujuan fitur jelas dan sesuai kebutuhan konsumen atau admin.
- Tampilan konsisten dengan halaman lain.
- Responsif dan dapat digunakan di perangkat mobile.
- Data yang ditampilkan berasal dari sumber yang benar.
- Form memiliki validasi dan pesan kesalahan yang mudah dipahami.
- Aksi penting memiliki feedback yang jelas.
- Tidak ada tombol atau link palsu.
- Tidak ada konten medis, harga, stok, atau informasi apotek yang dikarang.
- Tidak merusak fitur yang sudah ada.
- Kode tetap mudah dipahami dan dirawat.

## 12. Prioritas pengembangan

Jika diminta memperbagus website secara menyeluruh, kerjakan dengan urutan berikut:

1. Audit struktur dan alur aplikasi yang sudah ada.
2. Rapikan identitas visual, navbar, footer, dan layout utama.
3. Perbaiki halaman beranda agar jelas bagi konsumen.
4. Rapikan katalog dan kartu produk.
5. Buat halaman detail produk yang informatif dan mudah dibaca.
6. Rapikan halaman kategori.
7. Pisahkan dan rapikan dashboard/pengelolaan admin.
8. Perbaiki validasi, keamanan upload gambar, dan metode penghapusan data.
9. Tambahkan pencarian, filter, atau pagination jika sesuai dan benar-benar berfungsi.
10. Uji seluruh alur utama serta tampilan mobile.

Jangan mengerjakan semua prioritas sekaligus jika berisiko merusak aplikasi. Bagi pekerjaan menjadi tahap kecil dan laporkan progres setiap tahap.

---

## Instruksi terakhir

**Tetap pada tujuan: membangun website apotek yang profesional, informatif, aman, dan mudah digunakan konsumen umum, dengan Laravel + Blade + Tailwind CSS yang sudah ada.**

Jangan mengubah proyek menjadi marketplace, sistem rumah sakit, aplikasi konsultasi medis, atau sistem kasir. Jangan menambahkan fitur di luar ruang lingkup hanya agar terlihat canggih. Kualitas, kejelasan, keamanan, dan kegunaan lebih penting daripada banyaknya fitur.
