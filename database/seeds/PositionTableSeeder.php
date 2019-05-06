<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    private $data = [
        'Аспирант' => 1000,
        'Проффесор' => 3000,
        'Заведующий Кафедры' => 5000,
        'Преподаватель' => 2500,
        'Декан' => 7000,
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->positionFormat();
    }

    private function positionFormat()
    {
        foreach ($this->data as $key => $item) {
            \App\Model\Position::create([
                'name_position' => $key,
                'price' => $item,
            ]);
        }
    }
}
