rm -rf public/pdf;
rm -rf public/pdf-test;
rm -rf public/html-test;
rm -rf public/html;
git add .;
git commit -m "commit";
git pull origin new-view;
php artisan cache:clear;
php artisan view:clear;
php artisan route:clear;
php artisan config:clear;