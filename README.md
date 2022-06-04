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