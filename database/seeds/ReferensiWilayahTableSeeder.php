<?php

use App\Models\Referensi\Wilayah;
use Illuminate\Database\Seeder;

class ReferensiWilayahTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::truncate();

        foreach ($this->readCSV('data-referensi/wilayah.csv') as $data) {
            Wilayah::create($data->toArray());
        }
    }
}
