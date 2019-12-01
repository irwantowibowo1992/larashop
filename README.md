### Membuat sistem authentication dengan pada laravel

1. install laravel/ui package Mulai Laravel versi 6.0, semua authentication assets dijadikan terpisah dari core Laravel. Kita harus menginstallnya dengan perintah berikut:
`composer require laravel/ui`

2. buat authentication fitur / auth scaffold
`php artisan ui vue --auth`

3. compile file-file asset / javascript
`npm install && npm run dev`