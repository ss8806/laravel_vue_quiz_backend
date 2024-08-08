<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert(
            [
                [
                    'name' => 'ビジネスマナー',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '一般常識',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '就職・転職',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '法律',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'IT',
                    'created_at' => now(),
                    'updated_at' => now(),
                ], [
                    'name' => '雑学',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
