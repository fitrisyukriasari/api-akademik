<?php

use App\Models\Referensi\JenisKeluar;
use Illuminate\Database\Seeder;

class ReferensiJenisKeluarTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKeluar::truncate();

        foreach ($this->readCSV('data-referensi/jenis_keluar.csv') as $data) {
            JenisKeluar::create($data->toArray());
        }
    }
}
