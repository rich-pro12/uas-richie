# uas-richie

# 📌 Aplikasi CRUD Items – PHP Native (MVC)

## 🧾 Deskripsi Proyek
Aplikasi ini merupakan aplikasi **CRUD (Create, Read, Update, Delete)** sederhana berbasis **PHP Native** dengan konsep **MVC (Model – View – Controller)**.  
Aplikasi dilengkapi dengan fitur **Login Session**, **manajemen data items**, dan **database MySQL** menggunakan phpMyAdmin.

Aplikasi ini dibuat untuk memenuhi **tugas UAS**.

---

## 🏗️ Struktur Folder

uas-app/
│
├── index.php # Front Controller

├── database.php # Koneksi Database

├── .htaccess # Routing URL

│

├── app/

│ ├── controllers/

│ │ ├── AuthController.php

│ │ └── ItemController.php

│ │

│ ├── models/

│ │ └── Item.php

│ │

│ └── views/

│ ├── auth/

│ │ └── login.php

│ │

│ └── items/

│ ├── index.php

│ ├── create.php

│ └── edit.php

│

└── database.sql # Struktur tabel database


---

## 🔁 Alur Kerja Aplikasi
1. User mengakses aplikasi melalui browser
2. Semua request diarahkan ke `index.php`
3. `index.php` menentukan controller berdasarkan parameter URL
4. Controller memproses logika aplikasi
5. Model berinteraksi dengan database
6. View menampilkan hasil ke user

---

## 🌐 Routing (index.php)
File `index.php` berfungsi sebagai **Front Controller** yang mengatur routing aplikasi.


$url = $_GET['url'] ?? 'login';

| URL       | Controller         |
| --------- | ------------------ |
| `/login`  | Login page         |
| `/auth`   | Proses login       |
| `/items`  | Halaman CRUD Items |
| `/logout` | Logout session     |

## 🔐 Login & Session

Login menggunakan session PHP untuk membatasi akses halaman.

Akun default:

admin / admin
user  / user


Jika login berhasil:

$_SESSION['login'] = true;
$_SESSION['role']  = 'admin';


Jika belum login, user otomatis diarahkan kembali ke halaman login.

## 📦 Model (Item.php)

Model bertanggung jawab untuk interaksi database.

Fungsi yang tersedia:

all() → Menampilkan semua data

store() → Menambah data

find() → Mengambil data berdasarkan ID

update() → Mengubah data

delete() → Menghapus data

## 🧠 Controller (ItemController.php)

Controller menangani logika CRUD berdasarkan parameter action.

Action	Fungsi
index	Menampilkan semua items
create	Form tambah data
store	Simpan data
edit	Form edit data
update	Update data
delete	Hapus data

## 🖥️ View

View bertugas menampilkan data ke user menggunakan HTML + Bootstrap.

index.php → Tabel data items

create.php → Form tambah data

edit.php → Form edit data

login.php → Form login

## 🗄️ Database

Database menggunakan MySQL.

Nama database:

uas_app


Struktur tabel items:

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT
);

## 🧪 Fitur CRUD
Fitur	Status
Create	✅
Read	✅
Update	✅
Delete	✅

## 🧰 Teknologi yang Digunakan

PHP Native

MySQL

phpMyAdmin

Bootstrap 5

Apache (XAMPP)

## ✅ Kesimpulan

Aplikasi CRUD ini berhasil menerapkan:

Konsep MVC

Login & Session

Operasi CRUD lengkap

Routing menggunakan .htaccess

Aplikasi berjalan dengan baik dan siap digunakan sebagai project UAS.

Hasil Dari Running :

## 📸 Tampilan Aplikasi

### 🔐 Halaman Login
![Halaman Login](screenshots/login.png)

### 📋 Halaman Data Items
![Data Items](screenshots/items.png)

### ➕ Tambah Data Items
![Tambah Data](screenshots/create.png)

### ✏️ Edit Data Items
![Edit Data](screenshots/edit.png)

