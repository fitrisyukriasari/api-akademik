<?php

use App\Models\Referensi\Pekerjaan;
use Illuminate\Database\Seeder;

class ReferensiPekerjaanTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pekerjaan::truncate();

        foreach ($this->readCSV('data-referensi/pekerjaan.csv') as $data) {
            Pekerjaan::create($data->toArray());
        }
    }
}
