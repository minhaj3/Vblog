<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(vblog\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'about' => $faker->sentence(10),
        'fblink' => $faker->url,
        'twitterlink' => $faker->url,
    ];
});

$factory->define(vblog\Post::class, function(Faker\Generator $faker){
	return [
		'title' => $faker->sentence(5),
		'description' => $faker->realText(500),
		'published_at' => $faker->dateTime(),
	];
});

$factory->define(vblog\Category::class, function(Faker\Generator $faker){
	return [
		'name' => $faker->word,
	];
});

$factory->define(vblog\Theme::class, function(Faker\Generator $faker){
	return [
		'name' => $faker->sentence(2),
		'actual_name' => $faker->word.".blade.php",
	];
});

$factory->define(vblog\Blog::class, function(Faker\Generator $faker){
	return [
		'title' => $faker->sentence(3),
		'description' => $faker->realText(500),
	];
});

$factory->define(vblog\Comment::class, function(Faker\Generator $faker){
	return [
		'content' => $faker->realText(200),
	];
});

$factory->define(vblog\Page::class, function(Faker\Generator $faker){
	return [
		'title' => $faker->sentence(3),
		'content' => $faker->realText(500),
	];
});