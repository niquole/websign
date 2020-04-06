<img src="https://pbs.twimg.com/media/EU7s7PuXsAE7lWQ?format=png&name=medium" width="400">

#####Websign is an online portfolio website for web design. Users can upload pictures of their projects with a title and a description and other users can like and comment.

## Getting Started

* **Step 1**: Clone this repository:
```
git clone https://github.com/niquole/websign
```
* **Step 2**: Open MySQL and create a database named **websign**
```
create database websign
```
* **Step 3**: Open the project, copy the **.env example** file
* **Step 4**: Create a new file named **.env** and paste the all the content from .env example file
* **Step 5**: Change the database name to **websign** and edit any other information to fit your personal credentials to your computer
* **Step 6**: Move to the websign directory
```
cd websign
```
* **Step 7**: Create a personal application key 
```
php artisan key:generate
```
* **Step 8**: Apply migrations and seeders to the database
```
php artisan migrate:fresh --seed
```
* **Step 9**: Install all composer dependencies
```
composer install
```
* **Step 10**: Install all node modules
```
npm install
```
* **Step 11**: Install passport middleware
```
passport:install
```

In order to view all of the components the project you need to run as long as you use the application. 

```
npm run watch
```




## Built With

* [Laravel](https://laravel.com/) - The web application framework used
* [Vue.js](https://vuejs.org/) - JavaScript framework for building UI
* [Element.ui](https://element.eleme.io/#/en-US) - Vue  based component library

