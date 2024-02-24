# Deploying a PHP and MySQL Website to Heroku

A basic example of deploying a PHP and MySQL website to Heroku.

## Heroku

First we need to setup our Heroku app and database.

> [!Note]  
> Thes steps assume you have a [Heroku account](https://signup.heroku.com/) and the [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli) installed.

1. Using the Terminan, navigate to your project. This project should already be a Git repository. Type `git status` just to confirm. 

2. Using the Terminal log in to your Heroku account:
    
    ```sh
    heroku login
    ```

3. Create a new Heroku app:
    
    ```sh 
    heroku create
    ```
    
    > **Note**  
    > You can change the name of the app in your [Heroku dashboard](https://dashboard.heroku.com/apps/).
    
4. Change the orign if needed:

    ```sh
    git remote add heroku https://git.heroku.com/heroku-deploy-php-mysql.git
    ```

5. You can sue the browser to create a free ClearDB MySQL database:

    Or you can use the Terminal:
    
    ```sh
    heroku addons:create cleardb:ignite
    ```

6. Using your terminal retrieve your connection string:
    
    ```sh
    heroku config | grep CLEARDB
    ```
    
    This will return a string that contains your database name, username, passowrd, and host:
    
    ```sh
    mysql://<DB_USER>:<DB_USER_PASSWORD>@<DB_HOST>/<DB>?reconnect=true
    ```
    
    Extract these four values and use the Terminal to set them as environment variables:
    
    ```sh
    heroku config:set DB_USER=<DB_USER>
    heroku config:set DB_USER_PASSWORD=<DB_USER_PASSWORD>
    heroku config:set DB_HOST=<DB_HOST>
    heroku config:set DB=<DB>
    ```
    
    Then you can confirm these have been set properly:
    
    ```sh
    heroku config
    ```

> This repository has been deplyed at:  
> https://heroku-deploy-php-mysql.herokuapp.com/.

> **Note**  
> This app is often deactived to prevent unnecessary expenses.

This PHP has been take form the [php-mysql-images-embedded](https://github.com/codeadamca/php-mysql-images-embedded) repository.

***

## Repo Resources

* [Heroku](https://heroku.com/)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>


