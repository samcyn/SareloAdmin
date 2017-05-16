#SARELO
##Installation
* Navigate to the project root and run `composer install` to install all the project's dependencies.
* copy `.env.example` and name the copy `.env`
* change all necessary settings in the  `.env` file (e.g APP_URL, database configs).
* run laravel migration `php artisan migrate`
* setup database configuration.
* setup sparkpost or other email service provider (App was tested with sparkpost)
* setup facebook and google app for social login
* Modify sender's name in email template and signature in email template
* setup a subdomain to serve as cdn for uploaded images e.g `media.sarelo.com`
* change APP_URL in`env.example` to the site domain


