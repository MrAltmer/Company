<?php

use Illuminate\Database\Seeder;

class AccreditationTableSeeder extends Seeder
{
    private $data = [
        'Высокая', 'Средняя', 'Низкая'
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
        foreach ($this->data as $item) {
            \App\Model\Accreditation::query()
                ->create([
                    'name' => $item
                ]);
        }
    }
}
