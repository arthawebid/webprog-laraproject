## Menggunakan Laravel
1. clone repositories ini atau [download](https://github.com/arthawebid/webprog-laraproject-H/archive/refs/heads/main.zip)
2. copy file .env.example ke .env
```bash
copy .env.example .env
```
3. lakukan update/install modul-modul laravel
```bash
composer install
```
4. lakukan migrate untuk menambahkan sqlite (database)
```bash
php artisan migrate
```
5. generate key
```bash
php artisan key:generate
```

