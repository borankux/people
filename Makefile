update:
	composer install

db: update
	php artisan migrate:refresh
	php artisan db:seed

refresh-doc:
	php artisan doc:refresh