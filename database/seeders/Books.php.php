<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Books.php extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBook::create(
            [
                'book_name' => 'PHP Programming',
                'author' => 'Alex Tarnar',
                'published_at' => date()
            ]
            );
    }
}
