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
            [
                'agency' => 'Italo',
                'departure_station' => 'Napoli',
                'arrival_station' => 'Roma',
                'departure_time' => '16:30:10',
                'arrival_time' => '19:30:10',
                'train_code' => '11G2I45G9I87N011O',
                'number_of_carriages' => 9,
                'in_time' => 1,
                'deleted' => 0
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Firenze',
                'departure_time' => '11:30:10',
                'arrival_time' => '15:30:10',
                'train_code' => '11G2I45G9I87N011O',
                'number_of_carriages' => 6,
                'in_time' => 0,
                'deleted' => 0
            ],
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
