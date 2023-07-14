
## To start the proyect 

First of all you need to create a database in MySQL named 'blog', for that purposer you can run in your MySQLTerminal:

- CREATE DATABASE blog CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

After you create the db, just run the mnigrations and seeders. Open a Terminal in the folder project and run:

- php artisan migrate:fresh --seed 

Now you're ready to go.

Enjoy it! 

Regards AARL

## Email sent option

To use the page "Déjanos un mensaje" you need to configure your env w/ Mailtrap, for more information you can check the official page: 
- Mailtrap [https://mailtrap.io/]