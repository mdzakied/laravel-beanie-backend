<p align="center" id="description"> <strong>Webservice API for Beanie website </strong></p>

<p align="center">
  A modern REST API designed to handle dummy data.
</p>

---

## 🌟 Project Overview 

The **Beanie - Webservice API** is a comprehensive REST API built to manage dummy data. It supports core functionalities such as:

- **Beans Data ☕:** Manage dummy data for beans data.
- **Comment Data 💬:** Manage dummy data for comments data.
- **Article Data 📝:** Manage dummy data for article data.
- **Testing with Postman 🧪:** Validate API functionality and ensure smooth integration.

---

## ⚙️ Technologies Used 

- **Backend 💻:** Laravel 11
- **Database 🗄️:** PostgreSQL
- **API Documentation 📜:** Postman for endpoint documentation and testing

---

<h2>🗂️ ERD (Entity-Relationship Diagram)</h2>

<div style="display: flex; justify-content: center;">
  <img width="100%" alt="ERD for Beanie" src="https://github.com/user-attachments/assets/9fd2fe8a-be90-4391-8557-e38d0ebff831">
</div>

---

<h2>🌐 Api Endpoint</h2>

Here're some of the project's API Endpoint :

| Endpoint           | Method | Description                            | Query Parameters                                      | Description for Query Parameters                                   |
|--------------------|--------|----------------------------------------|------------------------------------------------------|--------------------------------------------------------------------|
| `/beans`           | GET    | Show all beans                         | `title=Arabica&sort=arrived_at&direction=asc&page=1&size=5` | `sort`: id / title / price / created_at / arrived_at / total_sales / total_likes                     |
| `/comments`           | GET    | Show all beans                         | `name=Arabica&sort=created_at&direction=asc&page=1&size=5` | `sort`: id / title / created_at                    |
| `/articles`           | GET    | Show all beans                         | `title=Arabica&sort=created_at&direction=asc&page=1&size=5` | `sort`: id / name / created_at                    |

---
  
<h2>🛠️ Installation Steps :</h2>

<p>1. Clone Repository</p>

```
git clone https://github.com/mdzakied/laravel-beanie-backend.git
```

<br />
<p>2. Prepare database (create db_beanie in PostgreSql) </p>

<br />
<p>3. Complete configuration in file .env</p>

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=db_beanie
DB_USERNAME=<db_username>
DB_PASSWORD=<db_password>
```

<br />
<p>4. Complete configuration in config/database.php</p>

---
    'default' => env('DB_CONNECTION', 'postgres'),
---

```
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],       
```

<br />
<p>5. Setup Driver</p>

https://stackoverflow.com/questions/25329302/laravel-error-pdoexception-could-not-find-driver-in-postgresql

<br />
<p>6. Run Command</p>

```
composer install
```
```
php artisan migrate:fresh
```
```
php artisan db:seed 
```

<br />

<p>7. Run Project for Development</p>

```
php artisan serve  
```

<h2>📃 Docs API</h2>
  
Postman :
* Run Project
* Open Postman and Import for collections docs/Beanie API.postman_collection.json

---
