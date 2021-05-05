# Docker & Laravel
  
## This documentation is for linux operating system   
  
## Installing commands from the beginning

  Installing docker and giving user permissinon

    sudo snap install docker

    sudo usermod -aG docker your_user_name
    sudo apt install docker-compose

  Go to your desired directory where you want to create the projcet and run these commands in terminal from that location.

    git clone git@github.com:alpondith/Docker-Laravel-Api.git

    cd docker-laravel-api

    docker-compose up -d

    docker-compose run composer install

  Configuration .env : create .env file inside src folder and copy .env.example files informations inside .env file and replace below items

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=

  Now set DB_DATABASE , DB_USERNAME , DB_PASSWORD values according to .env values from Docker-Laravel-Api/.env  

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
    docker system prune -a
    sudo chmod 777 /var/run/docker.sock

## Informations

- Laravel project location : inside `src` folder clone your project or copy all of the files directly into this `src` directory.

- The following are built for our web server, with their exposed ports detailed:
  
  nginx : 80

  mysql : 3306
  
  php : 9000

- Phpmyadmin link : <http://localhost:8081> . Username : `root` , password : `secret`

- Develompment server link : <http://localhost>

- Run any artisan command for laravel like this : `docker-compose run artisan YourCommand`

- References :

  Blog link : <https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0>

  Github link: <https://github.com/aschmelyun/docker-compose-laravel>
