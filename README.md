## Menggunakan Laravel
1. clone repositories ini
2. copy file .env.example ke .env
3. generate key
   ```bash
   php artisan key:generate
   ```
4. lakukan update/install modul-modul laravel
```bash
composer install
```
5. lakukan migrate untuk menambahkan sqlite (database)
```bash
php artisan migrate
```
