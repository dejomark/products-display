# products-display
Displays some products in a 3X3 grid, comments about the products, a comment input form and an admin login segment that leads to the admin part, in which the user will be able to verify or delete comments.
So far, the only two admins are "test@example.com" and "test2@example.com", which both have the password "password".

# Setting up the application
In order to boot the application, you first must clone the repository. Open your terminal in the directory you want the project to be in and run:

`git clone https://github.com/dejomark/products-display.git`

After it is done cloning, go to the laravel project directory:

`cd products-display/products-application`

Open the directory in any text editor. My editor of choice was Visual Studio Code:

`code .`

Make a new file in the directory called `.env` and copy everything from `.env.example` into it.
Next, set up your MySQL connection in the file like so:

`
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[name your schema]
DB_USERNAME=[your db username]
DB_PASSWORD=[your db password]
`

Now, install all dependencies:

`composer install`

Migrate the database tables to your MySQL server:

`php artisan migrate`

Seed your database:

`php artisan db:seed`

Generate application encryption key:

`php artisan key:generate`

And finally run the server:

`php artisan serve`

Go to the url your server was opened on and have fun!
