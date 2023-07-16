# Livewire The Alternate of JavaScript

* Author: Divesh Kumar
* Twitter: [@divesh20july](https://twitter.com/divesh20july)

# official Documentation
* Laravel Offical : https://laravel.com/
* Livewire Offical : https://laravel-livewire.com/

# Feature of Livewire
* How to refresh a part of your page without reloading all the page
* How to validate form inputs in live-mode as user types
* How to edit data in a modal window

And... most importantly... how to make a slide-show of cat pictures with a new picture every 5 seconds \
All. Without. ANY. JavaScript.

Let's Begin.

# Install Livewire

```php
    composer require livewire/livewire
    
    //Before including livewire style and scripts
    Install laravel Breeze for starter.
    https://laravel.com/docs/10.x/starter-kits#laravel-breeze

    including @livewireStyles --Before </head> Tag
   @livewireScripts -- Before </body> Tag
```
Include in views/layout/app.blade.php

![git-screen](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/8284432d-592b-4eae-8d12-27d32d79ed56)

# First Livewire Component to update profile
php artisan make:livewire Profile
* It generates two files App/Http/Livewire/Profile.php
* And blade file views/livewire/profile.blade.php

Profile.php code to update profile

![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/0d1f80a7-16b0-42d7-8f6a-97c2b43079a4)

profile.blade.php


![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/2906929e-e03f-4eb3-8017-e71e0e222c32)

![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/6370aa9c-553b-4fc1-9803-efac8e1aabdd)


