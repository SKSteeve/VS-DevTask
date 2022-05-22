# Download and setup

### 1. Open folder with cmd and execute:
   * **git clone https://github.com/SKSteeve/VS-DevTask.git**
   * **cd VS-DevTask**
   * **composer install**
   * **cp .env.example .env**
   * **php artisan key:generate**
   * **npm install**
   * **npm run dev**
### 2. Create new database for the project and add it in .env . Then execute:
   * **php artisan migrate:fresh --seed**
   * **php artisan serve**
### 3. Open 127.0.0.1:8000 in your browser

