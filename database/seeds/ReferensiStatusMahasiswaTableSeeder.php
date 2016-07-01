<?php

use App\Models\Referensi\StatusMahasiswa;
use Illuminate\Database\Seeder;

class ReferensiStatusMahasiswaTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusMahasiswa::truncate();

        foreach ($this->readCSV('data-referensi/status_mahasiswa.csv') as $data) {
            StatusMahasiswa::create($data->toArray());
        }
    }
}
