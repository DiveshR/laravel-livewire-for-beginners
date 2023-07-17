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

# 3 Ways To Fix Too Many Server Request.
 In general when we type something in input or select etc everytime request is send to  Server. We can fix  them through following Data Binding.

 * wire:model.debounce.500ms="name"
 It send requests after 500ms.

![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/866df960-5eac-4598-a52d-f1bb26d31641)


 * wire:model.lazy="name"
 It sends request to server only when the user clicks away from the input field.

![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/7cae88d7-efef-4cde-a2ed-8ae7e282b87c)



* wire:model.defer="name"
It sends requests when user click submit button.

![2](https://github.com/DiveshR/laravel-livewire-for-beginners/assets/25860707/b8312eb8-9825-41d9-ba04-99550559c3a4)
