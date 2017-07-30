Laravel 5.4 Multiple Authentication (Admins + Users)
======================

_Laravel 5.4 Multiple Authentication_ consists of ADMIN and USER separate authentication with separate login forms, can login to both ADMIN and USER account simultaneously, separate logout button. No package is used. Pure Laravel Native method.


## Installation
1. CLONE the package via the command line:
```js
  git clone https://github.com/sreejithbs/Laravel-Multiple-Authentication-Native.git
```
2. Change into the working directory
```
  cd Laravel-5.4-Multiple-Authentication-Native
```
3. Open Project in a Code Editor, rename `.env.example` to `.env` and modify DB name, username, password to your environment.

4. Install composer dependencies
```
  composer install
```
5. An application key can be generated with the command
```
  php artisan key:generate
```
6. Migrate the database along with seed
```
  php artisan migrate --seed
```
7. Run the artisan serve command
```
  php artisan serve
```

Use these credential to login :
```
  User : user@demo.com  | password
  Admin : admin@demo.com  | password
```

## Screenshots
![image](https://user-images.githubusercontent.com/30528898/28754835-2d2f8086-756b-11e7-96b1-ab4b80a0ffe4.png)
![image](https://user-images.githubusercontent.com/30528898/28754841-4a21e436-756b-11e7-8ce3-b0e9f3536233.png)
![image](https://user-images.githubusercontent.com/30528898/28754846-62cfce6c-756b-11e7-8274-16983d5dfddc.png)


## License
This project is open-source and licensed under the [MIT license](http://opensource.org/licenses/MIT)

Made with &#10084; in Laravel
