<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    private $date = [
      'Улица 1' => 4,
      'Улица 2' => 5,
      'Улица 3' => 2,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->formatBuilding();
    }

    private function formatBuilding()
    {
        foreach ($this->date as $key => $item) {
            \App\Model\Building::query()
                ->create([
                   'count_corpus' => $item,
                   'street' => $key,
                ]);
        }
    }
}
