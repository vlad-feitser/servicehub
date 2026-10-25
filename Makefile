.PHONY: php-shell permissions test analyse

php-shell:
	docker compose exec -u www-data php bash

permissions:
	docker compose exec php chown -R www-data:www-data storage bootstrap/cache
	docker compose exec php chmod -R ug+rwX storage bootstrap/cache

test:
	docker compose exec -u www-data php php artisan test --compact

analyse:
	docker compose exec -u www-data php vendor/bin/phpstan analyse --memory-limit=1G