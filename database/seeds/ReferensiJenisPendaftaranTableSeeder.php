<?php

use App\Models\Referensi\JenisPendaftaran;
use Illuminate\Database\Seeder;

class ReferensiJenisPendaftaranTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPendaftaran::truncate();

        foreach ($this->readCSV('data-referensi/jenis_pendaftaran.csv') as $data) {
            JenisPendaftaran::create($data->toArray());
        }
    }
}
