UNAME = $(shell uname)

app.check_style:
	make app.code_style
	make app.phpmd

app.code_style:
	docker exec -t php_messengers vendor/bin/phpcs --standard=PSR2 --error-severity=1 --warning-severity=8 --ignore=src/Migrations/ src/ -p --colors

app.phpcbf:
	docker exec -it php_messengers vendor/bin/phpcbf --standard=PSR2 src/

app.phpmd:
	docker exec -t php_messengers vendor/bin/phpmd src/ text phpmd.xml --exclude src/Migrations/,tests/

app.build.dev.no_docker:
	make app.composer.install
	#make app.migrations

app.build.dev:
	$(shell if [ "$(shell uname)" = 'Linux' ]; \
            then make app.docker.set_file_permissions \
            else echo 'not on linux'; \
            fi)

	make app.docker_compose.build
	make app.build.dev.no_docker

app.composer.install:
	docker exec -t php_messengers composer install --optimize-autoloader

app.docker_compose.build:
	docker-compose -f docker-compose.yml pull
	docker-compose -f docker-compose.yml up --build -d

app.docker.set_file_permissions:
	setfacl -R -m u:`whoami`:rwx -m g:`whoami`:rwx -m o:rwx -m m:rwx . && setfacl -R -d -m u:`whoami`:rwx -m g:`whoami`:rwx -m o:rwx -m m:rwx . 2>/dev/null

app.docker_compose.stop:
	docker-compose -f docker-compose.yml stop

app.docker_compose.remove:
	docker-compose -f docker-compose.yml rm -vf

app.docker.sh:
	docker exec -it php_messengers /bin/sh
