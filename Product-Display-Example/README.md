# Zend Framework Project Structure
`ID:` Ini adalah gambaran struktur folder dasar untuk aplikasi yang dibangun menggunakan Zend Framework. Struktur ini mencakup komponen seperti konfigurasi, modul, folder publik, dan file lainnya yang diperlukan untuk aplikasi Zend Framework.

`EN:` This is an overview of the basic folder structure for an application built using the Zend Framework. The structure includes components such as configuration, modules, public folder, and other files necessary for a Zend Framework application.


```
ID
```

## Struktur Folder
```
project-root/
├── config/
│   ├── autoload/
│   │   ├── global.php                      # Konfigurasi umum aplikasi
│   │   └── local.php                       # Konfigurasi khusus lingkungan (mis. database)
│   └── module.config.php                   # Konfigurasi utama untuk modules
├── data/
│   ├── cache/                              # Cache aplikasi
│   └── logs/                               # File log aplikasi
├── module/
│   ├── Application/
│   │   ├── config/
│   │   │   └── module.config.php           # Konfigurasi khusus untuk modul Application
│   │   ├── src/
│   │   │   ├── Controller/
│   │   │   │   └── IndexController.php     # Controller utama
│   │   │   ├── Model/                      # Kelas model untuk Application
│   │   │   └── Service/                    # Service khusus untuk modul Application
│   │   └── view/
│   │       └── application/
│   │           ├── index/
│   │           │   └── index.phtml         # View utama untuk controller index
│   ├── Product/
│   │   ├── config/
│   │   │   └── module.config.php           # Konfigurasi khusus untuk modul Product
│   │   ├── src/
│   │   │   ├── Controller/
│   │   │   │   └── ProductController.php
│   │   │   ├── Model/
│   │   │   │   └── Product.php             # Model khusus Product
│   │   │   └── Service/
│   │   └── view/
│   │       └── product/
│   │           ├── index.phtml             # View untuk daftar produk
│   │           └── detail.phtml            # View untuk detail produk
├── public/
│   ├── index.php                           # Entry point aplikasi
│   └── .htaccess                           # Pengaturan .htaccess untuk server
├── vendor/                                 # Dependency Composer
├── composer.json                           # File konfigurasi Composer
└── README.md                               # File README proyek
```

## Penjelasan Folder Utama
### config/: Folder untuk konfigurasi aplikasi global, termasuk autoload untuk konfigurasi umum dan lokal, serta module.config.php untuk konfigurasi modul.
### data/: Folder untuk data runtime seperti cache dan log, digunakan untuk menyimpan data sementara atau log dari aplikasi.
### module/: Berisi modul-modul utama aplikasi, masing-masing dengan struktur sendiri:
    - config/: Konfigurasi khusus untuk modul, biasanya berupa module.config.php.
    - src/: Kode sumber seperti Controller, Model, dan Service.
    - view/: File view (template) untuk modul.
### public/: Folder publik untuk file yang dapat diakses dari luar, seperti index.php (entry point aplikasi) dan .htaccess.
### vendor/: Folder yang dibuat oleh Composer, berisi dependency yang diinstal.
### composer.json: File konfigurasi Composer yang berisi daftar dependency proyek.