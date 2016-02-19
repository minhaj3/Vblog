<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	$this->call(BlogTableSeeder::class);
    	$this->call(PostTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

class UserTableSeeder extends Seeder
{
	public function run()
	{
		vblog\User::truncate();
		// factory(vblog\User::class,20)->create()->each(function($u){
		// 	$u->posts()->saveMany(factory(vblog\Post::class,2)->make());
		// 	$u->pages()->saveMany(factory(vblog\Page::class,2)->make());
		// 	$u->blog()->save(factory(vblog\Blog::class)->make());
		// });
		factory(vblog\User::class,20)->create();
	}
}
class BlogTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Blog::truncate();
		factory(vblog\Blog::class,20)->create();
	}
}
class ThemeTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Theme::truncate();
		factory(vblog\Theme::class,20)->create();
	}
}
class PostTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Post::truncate();
		factory(vblog\Post::class,20)->create();
	}
}
class PageTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Page::truncate();
		factory(vblog\Page::class,20)->create();
	}
}
class CategoryTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Category::truncate();
		factory(vblog\Category::class,20)->create();
	}
}
class CommentTableSeeder extends Seeder
{
	public function run()
	{
		vblog\Comment::truncate();
		factory(vblog\Comment::class,20)->create();
	}
}
