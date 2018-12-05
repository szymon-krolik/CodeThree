<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' => 'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);

        DB::table('products')->insert([
        	'name' => 'laptop',
            'pic' => 'https://picsum.photos/700/400/?random',
        	'description' =>'To jest bardzo dobry laptop moim skromnym zdaniem',
        	'price' => 2000.99,
        	'quantity' => 100,
        ]);
    }
}
