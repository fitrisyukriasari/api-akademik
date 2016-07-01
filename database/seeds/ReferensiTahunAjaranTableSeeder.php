<?php

use App\Models\Referensi\TahunAjaran;
use Illuminate\Database\Seeder;

class ReferensiTahunAjaranTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TahunAjaran::truncate();

        foreach ($this->readCSV('data-referensi/tahun_ajaran.csv') as $data) {
            TahunAjaran::create($data->toArray());
        }
    }
}
