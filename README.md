⚓ Warships Web
A Laravel 12-based CRUD website for managing a collection of warships. Users can create, read, update, and delete warship entries through a simple, responsive web interface.

🛠 Features
Full CRUD functionality (Create, Read, Update, Delete)

Built using Laravel 11

Uses Blade templating

Bootstrap-powered responsive UI

Server-side validation

Clean, beginner-friendly structure

🚀 Getting Started
1. Clone the repo
bash
Copy
Edit
git clone https://github.com/Aliefhasyani/warships_web.git
cd warships_web
2. Install dependencies
bash
Copy
Edit
composer install
3. Setup environment
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Edit .env to configure your database:

ini
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
4. Run migrations (if needed)
If you haven't already created the table manually, you can create it via migration:

bash
Copy
Edit
php artisan migrate
Otherwise, ensure your database has a warships table with the expected columns:

id

name

country

type

mainarmaments

created_at

updated_at

🌐 Usage
Start the development server:

bash
Copy
Edit
php artisan serve
Visit the app at:
http://127.0.0.1:8000/

You’ll be able to:

View all warships

Add a new warship

Edit warship details

Delete a warship

⚙ Tech Stack
Laravel 12

PHP 8+

MySQL

Blade templates

Bootstrap 5

🧑‍💻 Author
Mohammad Alief Hasyani


📄 License
This project is open-sourced under the MIT license.
