<?php

use App\Models\Referensi\Jurusan;
use Illuminate\Database\Seeder;

class ReferensiJurusanTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::truncate();

        foreach ($this->readCSV('data-referensi/jurusan.csv') as $data) {
            Jurusan::create($data->toArray());
        }
    }
}
