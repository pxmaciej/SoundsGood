# SoundsGood

The game will randomly show you 30sec tracks from the playlist in Spotify. Your goal is to take the most point is possible. Remember you can have only three errors.


## Screenshots


### Home Page
![home look](/image/home.png)

### Game
![game look](/image/game.png)

### Leaderboard
![leaderboard look](/image/leaderboard.png)

## Getting Started

* You should download and install the Laragon package.
* Create a database in phpMyAdmin and name it laravel.
* To download the project write command:
```
git clone https://github.com/pxmaciej/SoundsGood.git
```


### Prerequisites

You should download and install the Laragon package.
In terminal write:
```
$ composer require rennokki/larafy
```


### Installing

In terminal write:
```
cp .env example .env.
```
Complete the database login information in the .env file.
Enter the command generating a new key:
```
php artisan key: generate.
```
Enter the command to migrate data to the database: 
```
php artisan migrate.
```
Enter the command to create default objects in the database:
```
php artisan db: seed.
```
Enter the command creating the default objects in the database:
```
php craftsman to serve.
```
In your browser, go to:
```
http://127.0.0.1:8000e
```


## Built With

* [Laravel](https://laravel.com/docs/7.x/installation) - The back-end framework used Laravel
* [Boostrap](https://getbootstrap.com/) - The front-end framework used Bootstrap
* [Boostrap](https://sass-lang.com/) - The front-end framework used SASS
* [Larafy](https://github.com/rennokki/larafy) - The library to support Spotify API
* [Composer](https://getcomposer.org/) - Dependency Management
* [npm](https://nodejs.org/en/) - The npm packages manager from Node.js
* [Apache](https://www.apachefriends.org/pl/index.html) - MySql database and Apache server
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds


## Authors

* **Maciej Zienkiewicz** - *Initial work* - [myRepo](https://github.com/pxmaciej).

