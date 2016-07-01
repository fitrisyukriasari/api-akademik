<?php

use App\Models\Referensi\JenisEvaluasi;
use Illuminate\Database\Seeder;

class ReferensiJenisEvaluasiTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisEvaluasi::truncate();

        foreach ($this->readCSV('data-referensi/jenis_evaluasi.csv') as $data) {
            JenisEvaluasi::create($data->toArray());
        }
    }
}
