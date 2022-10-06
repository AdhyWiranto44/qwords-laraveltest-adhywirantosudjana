# Qwords Laravel Test
## Adhy Wiranto Sudjana

## Instalasi
- Clone projek ini menggunakan git
```
git clone https://github.com/AdhyWiranto44/qwords-laraveltest-adhywirantosudjana
```

- Install semua dependency
```
composer install
```

- Generate key laravel
```
php artisan key:generate
```

- Buatlah database mysql bernama "university"

- Migrasi semua tabel
```
php artisan migrate
```

- Jalankan seeder untuk data default
```
php artisan db:seed
```

- Jalankan aplikasi Laravel
```
php artisan serve
```

- Buka halaman students, maka akan tampil semua data dari tabel students
```
http://localhost:8080/students
```

## Route API dengan Basic Auth
username: admin@secret.com
password: 12345

## Cara Akses
endpoint: http://localhost:8080/api/students