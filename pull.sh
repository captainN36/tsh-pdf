
git pull origin test-new-content;
rm -rf public/html/521-2024-01-11.html;
rm -rf public/pdf/521-2024-01-11.pdf;
php artisan optimize;