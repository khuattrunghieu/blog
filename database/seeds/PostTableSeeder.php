<?php

use Illuminate\Database\Seeder;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()	
    {
    	$faker = Faker\Factory::create();
    	DB::table('posts')->truncate();
    	for($i=0; $i < 100; $i++){
    		DB::table('posts')->insert([
        		'title' => "Hom Nay Troi Lanh",
        		'image_url' => '../public/img/AnhDaiDien.jpg',
        		'content' => 'Lanh qua lay nhip gap khong ra',
        		'user_id' => '1',
    		]);
    	}
    }
}
