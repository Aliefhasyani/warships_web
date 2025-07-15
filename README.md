

---

# ⚓ Warships Web

A Laravel 11-based CRUD website for managing a collection of warships. Users can create, read, update, and delete warship entries through a clean, responsive interface.

---

## 🛠 Features

* Full CRUD (Create, Read, Update, Delete)
* Laravel 12 + PHP 8+
* Blade templating engine
* Bootstrap 5 responsive layout
* Server-side validation
* Beginner-friendly structure

---

## 🚀 Getting Started

### 1. Clone the repo

```bash
git clone https://github.com/Aliefhasyani/warships_web.git
cd warships_web
```

### 2. Install dependencies

```bash
composer install
```

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Run migrations (optional)

If you want to use Laravel’s migration system:

```bash
php artisan migrate
```

Or ensure your `warships` table has the following columns:

* `id`
* `name`
* `country`
* `type`
* `mainarmaments`
* `created_at`
* `updated_at`

---

## 🌐 Usage

Start the local server:

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

You can:

* View all warships
* Add a new warship
* Edit a warship
* Delete a warship

---

## ⚙ Tech Stack

* Laravel 12
* PHP 8+
* MySQL
* Blade
* Bootstrap 5

---

## 👤 Author

**Mohammad Alief Hasyani**
GitHub: [@Aliefhasyani](https://github.com/Aliefhasyani)

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---


