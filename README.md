# Docker & Laravel
  
## This documentation is for linux operating system   
  
## Installing commands from the beginning

  Installing docker and giving user permissinon

    sudo snap install docker

    sudo chmod 777 /var/run/docker.sock

  Go to your desired directory where you want to create the projcet and run these commands in terminal from that location.

    git clone git@github.com:alpondith/Docker-Laravel-Api.git

    cd docker-laravel-api

    docker-compose up -d

    docker-compose run composer install

  Configuration .env : create .env file inside src folder and copy .env.example files informations inside .env file and replace below items

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret

  Again run below command

    docker-compose run artisan key:generate

  When you are finished working with docker run below command

    docker-compose down

  Up untill now above commands are enough to start the project. However, some useful commands are given below :

    docker version
    docker-compose version
    docker-compose config
    docker-compose ps
    docker-compose up -d
    docker-compose down
    sudo chmod 777 /var/run/docker.sock

  Each time you turn on your computer freshly then use give permission command.

    sudo chmod 777 /var/run/docker.sock

## Informations

- Laravel project location : inside `src` folder clone your project or copy all of the files directly into this `src` directory.

- The following are built for our web server, with their exposed ports detailed:
  
  nginx : 8080

  mysql : 3306
  
  php : 9000

- Phpmyadmin link : <http://localhost:8081> . Username : `homestead` , password : `secret`

- Develompment server link : <http://localhost:8080>

- Run any artisan command for laravel like this : `docker-compose run artisan YourCommand`

- References :

  Blog link : <https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0>

  Github link: <https://github.com/aschmelyun/docker-compose-laravel>

## Edocavaj

For more commands list and other important writings visit my blog : <https://edocavaj.com>
