# uas-richie
### Richie Pranata
### 312410451
### TI.24.A.5

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
<img width="772" height="435" alt="Screenshot 2026-01-15 104701" src="https://github.com/user-attachments/assets/8e759309-9800-44eb-ba61-951ef49ee45a" />

### 📋 Halaman Data Items
<img width="1784" height="303" alt="Screenshot 2026-01-15 104820" src="https://github.com/user-attachments/assets/1954e7d0-9e08-4535-9887-84cbbc534d9d" />

### ➕ Tambah Data Items
<img width="1862" height="629" alt="Screenshot 2026-01-15 104718" src="https://github.com/user-attachments/assets/b82ecd58-37db-4622-98d7-12b7664487f5" />

### ✏️ Edit Data Items
<img width="1803" height="434" alt="Screenshot 2026-01-15 104809" src="https://github.com/user-attachments/assets/5983a4bd-d401-4a2c-a8cb-b39561edf728" />

link youtube :
https://youtu.be/OYaG-BtcVRM


