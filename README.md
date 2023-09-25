<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<h1 align="center"> Laravel Invitation management system </h1>
<h3 align="center">	Author: Mohammad Jaber </h3>

## Features:

User can register and invite other user by invitaion code.

- Used Laravel Breeze for Authentication.
- Used middelware for active user.
- Create an invition code followed by validation rules.
- Cheack if the Invite Code is expired.
- Listing a Invition Code.
- User can request for Invite Code.
- User can request Invite Code within a spacific limit.
- User can also check when did they requested for Invite Code.
- User can check how many time his invite code used.
- Blcok the code usage after a certain limit of that code usage.

## Validation rules: 

- Check if user is active.
- Check if code is valide.
- Check the code expiration date.
- Check how many invition code usage remaining.
- Check if code usage limit.

# Installation Guide

Follow these steps to set up and run the project locally.

### Prerequisites

Make sure you have the following installed:

- Git
- Composer
- PHP >= 8.*
- MySQL
- Laravel 9.*

### Installation Steps

1. **Clone the GitHub repository**
   ```sh
   git clone https://github.com/JaberWiki/invite-system.git
   
2. **Install Composer packages:**
   ```sh
   composer install
   
3. **Create .env file**

   Duplicate .env.example and rename it to .env.
   
   or
   
   ```bash
   cp .env.example .env
   ```
   
5. **Generate encryption key**

    Run the following command to generate a unique application key.
    
      ```sh
    php artisan key:generate

6. **Run migrations**

      ```sh
    php artisan migrate

7. **Add Invite code limit in .env**

    ```sh
    MAX_INVITE_CODE_LIMIT

7. **Start the development server**

      ```sh
    php artisan serve
   

## Contributor

- [Hossain Mohammad Shahidullah Jaber](https://github.com/JaberWiki). (jaberphpdev@gmail.com)
   

## License
- Copyright © 2023 Invextry
- **Invextry is open-sourced software licensed under the MIT license**
