<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++){
            //Item è la classe che accede ai dati della tabella
            $item = new Item;
            $item -> title = $faker -> randomElement(['frullatore', 'mixer', 'tv', 'aspirapolvere']);
            $item -> description = $faker -> paragraph();
            $item -> price = $faker -> randomFloat(2, 1, 999.99);
            $item -> save();
        };
    }
}
