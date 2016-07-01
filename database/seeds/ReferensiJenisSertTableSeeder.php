<?php

use App\Models\Referensi\JenisSert;
use Illuminate\Database\Seeder;

class ReferensiJenisSertTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSert::truncate();

        foreach ($this->readCSV('data-referensi/jenis_sert.csv') as $data) {
            JenisSert::create($data->toArray());
        }
    }
}
