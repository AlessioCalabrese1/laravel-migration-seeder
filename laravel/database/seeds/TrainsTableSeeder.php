<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            new Train([1, 'Italo', 'Napoli', 'Roma', '16:30:10', 
            '19:30:10', '11G2I45G9I87N011O', 9, 0, 0]),
        ];

        foreach ($trains as $train) {
            $train->save();
        }
    }
}
