<!-- ABOUT THE PROJECT -->
## About The Project
Laravel application that accepts dynamic URL routing with Get requests and responds with when a dynamic URL is hit, it shows the URL and agent string and host. 
Also, create dynamic routing to accept a post request that responds with the body of the post request + the information from the get request

### Built With
* [Laravel 10](https://laravel.com/docs/10.x/releases)
* PHP 8.1 - above

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites
* [Composer](https://getcomposer.org/)
* [Npm](npmjs.com)
* Apache/Nginx Server
* Git
* [Database](https://laravel.com/docs/10.x/releases)

### Installation

1. Clone the repo
   ```sh
   HTTPS: git clone https://github.com/jenmagato/laravel-app.git
   ```
2. Go inside the folder
   ```sh
   cd laravel-app
   ```
3. create .env file and do not forget to set your DB_PASSWORD
   ```sh
   cp .env.example .env
   ```
4. Run Composer Install.
   ```sh
   composer install or composer install --ignore-platform-reqs
   ```
5. Create app key
   ```sh
   php artisan key:generate
   ```
6. Serve the project.
   ```sh
   php artisan serve
   ```
7. Clear cache if needed
   ```sh
   php artisan config:cache
   php artisan route:clear
   ```

## Usage 
1. GET 
  enter http://localhost/laravel-app/{slug} 
  
2. POST 
  Open POSTMAN > Select "Post" > enter http://localhost/laravel-app/{slug} 
  > Click "Body" > Click "raw" > Select "JSON" > enter 
  {
    "body": "This is a test post."
  }
  or enter any request needed. 
  > click "Send" 
   
## Folders / Important files 
- `app/Http/Controllers` - Contains all controllers
- `app/Http/Requests` - Contains all form requests
- `routes` - Contains all routes

<!-- CONTACT -->
## Contact
Jenmagat04@gmail.com
