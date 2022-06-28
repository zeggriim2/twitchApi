install:
	@make composer
	@make docker-compose
	@make server-stop
	@make server-start

composer:
	@echo "-----------> Composer Install"
	@composer install

docker-compose:
	@#docker-compose up -d
	@docker-compose --env-file .env.dev.local up -d

server-start:
	@echo "-----------> Lancement du server"
	@symfony serve -d

server-stop:
	@echo "-----------> Arrêt du server"
	@symfony server:stop

debug-router:
	php bin/console debug:router

db-create:
	@echo "-----------> Création de la base"
	@php bin/console doctrine:database:create

db-drop:
	@echo "-----------> Suppression de la base"
	@php bin/console doctrine:database:drop --force

test-start:
	@php bin/phpunit --coverage-html Tests/coverage --coverage-text=Tests/coverage.txt

cs-fix:
	vendor/bin/php-cs-fixer fix --allow-risky yes -vvv