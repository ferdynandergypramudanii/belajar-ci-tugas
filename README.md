# CodeIgniter 4 Application Starter

## Aplikasi Toko Online - CodeIgniter 4

Aplikasi toko online berbasis web yang dibangun menggunakan framework CodeIgniter 4 dengan fitur manajemen produk, sistem diskon, keranjang belanja, dan integrasi API pengiriman.

## Fitur

### 🛍️ Manajemen Produk

- CRUD Produk: Tambah, edit, hapus, dan lihat daftar produk
- Kategori Produk: Pengelompokan produk berdasarkan kategori
- Upload Gambar: Fitur upload foto produk dengan validasi format dan ukuran
- Download Data: Export data produk ke format PDF

### 👥 Sistem Autentikasi & Otorisasi

- Multi-role User: Admin dan Customer dengan akses yang berbeda
- Session Management: Pengelolaan sesi pengguna yang aman
- Password Encryption: Enkripsi password menggunakan PHP password_hash()
- Login/Logout: Sistem masuk dan keluar yang secure

### 🎯 Sistem Diskon

- Manajemen Diskon Harian: Admin dapat mengatur diskon berdasarkan tanggal
- Validasi Tanggal Unik: Tidak boleh ada duplikasi diskon untuk tanggal yang sama
- Tampilan Real-time: Notifikasi diskon aktif di header website
- Edit Readonly: Form edit diskon dengan tanggal yang tidak bisa diubah
- Auto Apply: Diskon otomatis diterapkan saat login berdasarkan tanggal

### 🛒 Keranjang Belanja (Shopping Cart)

- Add to Cart: Menambahkan produk ke keranjang dengan diskon otomatis
- Cart Management: Edit quantity, hapus item, kosongkan keranjang
- Price Calculation: Perhitungan harga dengan diskon real-time
- Session Storage: Keranjang tersimpan dalam sesi browser

### 🚚 Sistem Pengirima

- Integrasi RajaOngkir API: Cek ongkos kirim ke seluruh Indonesia
- Location Search: Pencarian lokasi tujuan dengan autocomplete
- Shipping Options: Pilihan layanan pengiriman (JNE, TIKI, POS)
- Cost Calculator: Kalkulasi biaya pengiriman otomatis

### 💳 Transaksi & Checkout

- Checkout Process: Proses pembelian dengan form alamat dan ongkir
- Transaction Detail: Penyimpanan detail transaksi dan item yang dibeli
- Discount Tracking: Pencatatan diskon yang diterapkan per item
- Order History: Riwayat transaksi pembelian user

### 📊 Dashboard & Reporting

- Admin Dashboard: Panel admin untuk mengelola seluruh sistem
- Transaction Dashboard: Dashboard terpisah untuk melihat data transaksi
- API Integration: Webservice untuk mengakses data transaksi
- Real-time Data: Data yang selalu terupdate dengan auto-refresh

### 🔌 API & Webservice

- RESTful API: API untuk mengakses data transaksi
- API Authentication: Sistem autentikasi API menggunakan API Key
- JSON Response: Format response yang standar dan konsisten
- External Dashboard: Dashboard terpisah yang mengonsumsi API

## Instalasi

### Prasyarat Sistem

PHP: Versi 7.4 atau lebih tinggi (disarankan PHP 8.1+)
Web Server: Apache/Nginx dengan mod_rewrite
Database: MySQL 5.7+ atau MariaDB 10.3+
Composer: Package manager untuk PHP
Extensions: intl, mbstring, json, mysqlnd, curl

### Langkah instalasi

#### 1. Clone/Download Project

```bash
git clone https://github.com/Jusmat16/belajar-ci-tugas.git
cd belajar-ci-tugas
```

#### 2. Install Dependencies

```bash
composer install
```

#### 3. Konfigurasi Environment

```bash
# Copy file environment
cp env .env
```

# Edit file .env sesuai konfigurasi server Anda

#### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan pengaturan database:

```ini
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = username_db
database.default.password = password_db
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

#### 5. Konfigurasi API Keys

Tambahkan konfigurasi API di file `.env`:

```ini
# API Key untuk internal webservice
API_KEY = random123678abcghi
```

# RajaOngkir API Key (daftar di rajaongkir.com)
COST_KEY = your-rajaongkir-api-key

# Base URL aplikasi
app.baseURL = 'http://localhost:8080/'

# Timezone
app.appTimezone = 'Asia/Jakarta'

#### 5. Setup Database

Setelah mengatur koneksi database, jalankan perintah berikut untuk melakukan migrasi dan seeder:

```bash
# Jalankan migrasi database
php spark migrate

# Jalankan seeder untuk data awal
php spark db:seed UserSeeder
php spark db:seed ProductSeeder
php spark db:seed ProductDiskonSeeder
```

#### 6. Jalankan Server

Untuk menjalankan aplikasi, gunakan perintah berikut:

```bash
##### Development server
php spark serve
```

## Akses Aplikasi

- URL Utama: http://localhost:8080/
- Dashboard API: http://localhost/dashboard-toko/

## Akun Pengguna

### Admin:
- **Username:** a11202315389 (admin)
- **Password:** 1234567

### Customer:
- **Username:** plestari (user) 
- **Password:** 1234567

## Struktur Project

```text
├── app
│   ├── Common.php
│   ├── Config
│   │   ├── App.php
│   │   ├── Autoload.php
│   │   ├── Boot
│   │   ├── Cache.php
│   │   ├── Constants.php
│   │   ├── ContentSecurityPolicy.php
│   │   ├── Cookie.php
│   │   ├── Cors.php
│   │   ├── CURLRequest.php
│   │   ├── Database.php
│   │   ├── DocTypes.php
│   │   ├── Email.php
│   │   ├── Encryption.php
│   │   ├── Events.php
│   │   ├── Exceptions.php
│   │   ├── Feature.php
│   │   ├── Filters.php
│   │   ├── ForeignCharacters.php
│   │   ├── Format.php
│   │   ├── Generators.php
│   │   ├── Honeypot.php
│   │   ├── Images.php
│   │   ├── Kint.php
│   │   ├── Logger.php
│   │   ├── Migrations.php
│   │   ├── Mimes.php
│   │   ├── Modules.php
│   │   ├── Optimize.php
│   │   ├── Pager.php
│   │   ├── Paths.php
│   │   ├── Publisher.php
│   │   ├── Routes.php
│   │   ├── Routing.php
│   │   ├── Security.php
│   │   ├── Services.php
│   │   ├── Session.php
│   │   ├── Toolbar.php
│   │   ├── UserAgents.php
│   │   ├── Validation.php
│   │   └── View.php
│   ├── Controllers
│   │   ├── ApiController.php
│   │   ├── AuthController.php
│   │   ├── BaseController.php
│   │   ├── Diskon.php
│   │   ├── Home.php
│   │   ├── ProdukCategoryController.php
│   │   ├── ProdukController.php
│   │   └── TransaksiController.php
│   ├── Database
│   │   ├── Migrations
│   │   └── Seeds
│   ├── Filters
│   │   ├── Auth.php
│   │   └── Redirect.php
│   ├── Helpers
│   ├── index.html
│   ├── Language
│   │   └── en
│   ├── Libraries
│   ├── Models
│   │   ├── DiskonModel.php
│   │   ├── ProductModel.php
│   │   ├── ProdukCategoryModel.php
│   │   ├── TransactionDetailModel.php
│   │   ├── TransactionModel.php
│   │   └── UserModel.php
│   ├── ThirdParty
│   └── Views
│       ├── components
│       ├── diskon
│       ├── errors
│       ├── layout_clear.php
│       ├── layout.php
│       ├── v_checkout.php
│       ├── v_faq.php
│       ├── v_home.php
│       ├── v_keranjang_detail.php
│       ├── v_keranjang.php
│       ├── v_login.php
│       ├── v_produkcategory.php
│       ├── v_produk_detail copy.php
│       ├── v_produk_detail.php
│       ├── v_produkPDF.php
│       ├── v_produk.php
│       ├── v_profile.php
│       └── welcome_message.php
├── app.rar
├── app.zip
├── builds
├── composer.json
├── composer.lock
├── LICENSE
├── phpunit.xml.dist
├── preload.php
├── public
│   ├── favicon.ico
│   ├── img
│   │   ├── asus_tuf_a15.jpg
│   │   ├── asus_vivobook_14.jpg
│   │   └── lenovo_idepad_slim_3.jpg
│   ├── index.php
│   ├── NiceAdmin
│   │   ├── assets
│   │   ├── charts-apexcharts.html
│   │   ├── charts-chartjs.html
│   │   ├── charts-echarts.html
│   │   ├── components-accordion.html
│   │   ├── components-alerts.html
│   │   ├── components-badges.html
│   │   ├── components-breadcrumbs.html
│   │   ├── components-buttons.html
│   │   ├── components-cards.html
│   │   ├── components-carousel.html
│   │   ├── components-list-group.html
│   │   ├── components-modal.html
│   │   ├── components-pagination.html
│   │   ├── components-progress.html
│   │   ├── components-spinners.html
│   │   ├── components-tabs.html
│   │   ├── components-tooltips.html
│   │   ├── forms
│   │   ├── forms-editors.html
│   │   ├── forms-elements.html
│   │   ├── forms-layouts.html
│   │   ├── forms-validation.html
│   │   ├── icons-bootstrap.html
│   │   ├── icons-boxicons.html
│   │   ├── icons-remix.html
│   │   ├── index.html
│   │   ├── pages-blank.html
│   │   ├── pages-contact.html
│   │   ├── pages-error-404.html
│   │   ├── pages-faq.html
│   │   ├── pages-login.html
│   │   ├── pages-register.html
│   │   ├── Readme.txt
│   │   ├── tables-data.html
│   │   ├── tables-general.html
│   │   └── users-profile.html
│   └── robots.txt
├── README.md
├── spark
├── tests
│   ├── database
│   │   └── ExampleDatabaseTest.php
│   ├── index.html
│   ├── README.md
│   ├── session
│   │   └── ExampleSessionTest.php
│   ├── _support
│   │   ├── Database
│   │   ├── Libraries
│   │   └── Models
│   └── unit
│       └── HealthTest.php
├── vendor
│   ├── autoload.php
│   ├── bin
│   │   ├── php-parse
│   │   └── phpunit
│   ├── codeigniter4
│   │   └── framework
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   └── platform_check.php
│   ├── dompdf
│   │   ├── dompdf
│   │   ├── php-font-lib
│   │   └── php-svg-lib
│   ├── fakerphp
│   │   └── faker
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   ├── promises
│   │   └── psr7
│   ├── jason-napolitano
│   │   └── codeigniter4-cart-module
│   ├── laminas
│   │   └── laminas-escaper
│   ├── masterminds
│   │   └── html5
│   ├── mikey179
│   │   └── vfsstream
│   ├── myclabs
│   │   └── deep-copy
│   ├── nikic
│   │   └── php-parser
│   ├── phar-io
│   │   ├── manifest
│   │   └── version
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   ├── php-file-iterator
│   │   ├── php-invoker
│   │   ├── php-text-template
│   │   ├── php-timer
│   │   └── phpunit
│   ├── psr
│   │   ├── container
│   │   ├── http-client
│   │   ├── http-factory
│   │   ├── http-message
│   │   └── log
│   ├── ralouphie
│   │   └── getallheaders
│   ├── sabberworm
│   │   └── php-css-parser
│   ├── sebastian
│   │   ├── cli-parser
│   │   ├── code-unit
│   │   ├── code-unit-reverse-lookup
│   │   ├── comparator
│   │   ├── complexity
│   │   ├── diff
│   │   ├── environment
│   │   ├── exporter
│   │   ├── global-state
│   │   ├── lines-of-code
│   │   ├── object-enumerator
│   │   ├── object-reflector
│   │   ├── recursion-context
│   │   ├── type
│   │   └── version
│   ├── symfony
│   │   └── deprecation-contracts
│   └── theseer
│       └── tokenizer
```


