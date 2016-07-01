<?php

use App\Models\Referensi\LevelWilayah;
use Illuminate\Database\Seeder;

class ReferensiLevelWilayahTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LevelWilayah::truncate();

        foreach ($this->readCSV('data-referensi/level_wilayah.csv') as $data) {
            LevelWilayah::create($data->toArray());
        }
    }
}
