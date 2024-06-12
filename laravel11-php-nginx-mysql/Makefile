.PHONY: up down delete-image rebuild delete-laravel

up:
	docker-compose up -d

down:
	docker-compose down

delete-image:
	docker-compose down -v
	docker rmi $$(docker images -q 'laravel11-php-nginx-mysql-*')

rebuild:
	docker-compose down
	docker-compose up --build -d

docker-install-laravel:
	docker exec laravel11-app make install-laravel

install-laravel:
	@composer create-project laravel/laravel src

delete-laravel:
	rm -rf src
