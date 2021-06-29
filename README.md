Assalamuallaikum wr.wb kembali lagi ke github saya mastio1836 kali ini saya akan melanjutkan sebuah program dari lab12 aplikasi sederhana menggunakan framework codeigniter dan hari ini saya akan membuat sistem Login mau tau bagaimana simak penjelasanya siapkan xampp kalian ...kemudia buka website"google,choreme (localhost) lalu php my admin" kalian akan dituju ke sebuah pembuatan table database dan berikut penjelasanya

CREATE TABLE user (
	id INT(11) auto_increment,
	username VARCHAR(200) NOT NULL,
	useremail VARCHAR(200),
	userpassword VARCHAR(200),
	PRIMARY KEY(id)
);

![table user php my admin](https://user-images.githubusercontent.com/56244106/123803027-1af98480-d916-11eb-8d2a-376b39e2d9dd.JPG)

# STEP KE 1

Membuat Model User

Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada
direktori app/Models dengan nama UserModel.php

![input user model](https://user-images.githubusercontent.com/56244106/123803179-411f2480-d916-11eb-9447-3fffbfb13d6b.JPG)

# STEP KE 2

Membuat Controller User

Buat Controller baru dengan nama User.php pada direktori app/Controllers.
Kemudian tambahkan method index() untuk menampilkan daftar user, dan method
login() untuk proses login.

![input user controller 1](https://user-images.githubusercontent.com/56244106/123803314-6318a700-d916-11eb-9b64-ad5794fe5439.JPG)

![inout user controller 2](https://user-images.githubusercontent.com/56244106/123803341-69a71e80-d916-11eb-84a8-f4467c3cd8a4.JPG)

# STEP KE 3

Membuat View Login

Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file
baru dengan nama login.php.

![inpur user login](https://user-images.githubusercontent.com/56244106/123803681-b2f76e00-d916-11eb-97de-bf54e1a5607f.JPG)

# STEP KE 4

Membuat Database Seeder

Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul
login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

"php spark make:seeder UserSeeder"


![membuat file user seeder](https://user-images.githubusercontent.com/56244106/123805620-6dd43b80-d918-11eb-840d-8179556261fd.JPG)

setelah buka dan kalian suda masukan sourcecode nya didalam file tersebut kalian buka CLI yang berada di xampp shell

lalu kalian ikuti perintah kode ini

"php spark db:seed UserSeeder"

![CLI untuk menjalankan servernya](https://user-images.githubusercontent.com/56244106/123807676-44b4aa80-d91a-11eb-92b8-6c2f006d920d.JPG)

Jangan lupa jalankan perintah ini untuk menjalankan ci4 di port 8080. Buka kembali CLI dan ketik perintah berikut:

"php spark serve"

![CLI untuk menjalankan servernya](https://user-images.githubusercontent.com/56244106/123808045-98bf8f00-d91a-11eb-8bf0-ef7fb53252ea.JPG)

# STEP KE 5

Membuat tampilan CSS

Tambahkan CSS untuk mempercantikan tampilan login. Buka file style.css pada direktori ci4\public\style.css


![CSS login](https://user-images.githubusercontent.com/56244106/123808524-08357e80-d91b-11eb-9d38-8aaaa8d1417f.JPG)


Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![form login output](https://user-images.githubusercontent.com/56244106/123808930-5fd3ea00-d91b-11eb-850f-f671803648d2.JPG)

# STEP KE 6

Menambahkan Auth Filter

Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php
pada direktori app/Filters.

![auth input](https://user-images.githubusercontent.com/56244106/123809135-8db92e80-d91b-11eb-93d0-5e3f183c6b37.JPG)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

"'auth' => App\Filters\Auth::class"

![config auth input](https://user-images.githubusercontent.com/56244106/123809709-091ae000-d91c-11eb-9b85-95f3ab09c003.JPG)

Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![config routes auth](https://user-images.githubusercontent.com/56244106/123810017-497a5e00-d91c-11eb-8122-3b524825a160.JPG)

# STEP KE 7

 Fungsi Logout

Tambahkan method logout pada Controller User seperti berikut:

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }


![controller logout input](https://user-images.githubusercontent.com/56244106/123810800-e3420b00-d91c-11eb-929e-730f96f5a94e.JPG)


Tambahkan menu logout di header admin. Ke direktori app\view\template lalu buka file admin_header.php tambahkan kode berikut

<a href="<?= base_url('/admin/logout');?>">Logout</a>


![template link logout](https://user-images.githubusercontent.com/56244106/123810312-7f1f4700-d91c-11eb-826e-21fcfebf624b.JPG)

ambahkan route logout dengan cara ke direktori app\Config\Routes.php lalu tambahkan kode berikut

![config routes auth](https://user-images.githubusercontent.com/56244106/123811366-606d8000-d91d-11eb-83e8-4863fc521a86.JPG)
















