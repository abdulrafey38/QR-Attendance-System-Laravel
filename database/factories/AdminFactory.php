<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'email' => 'admin@email.com',
        'password' => bcrypt('secret')
    ];
});
