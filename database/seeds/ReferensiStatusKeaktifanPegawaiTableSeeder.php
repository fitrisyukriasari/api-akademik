<?php

use App\Models\Referensi\StatusKeaktifanPegawai;
use Illuminate\Database\Seeder;

class ReferensiStatusKeaktifanPegawaiTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusKeaktifanPegawai::truncate();

        foreach ($this->readCSV('data-referensi/status_keaktifan_pegawai.csv') as $data) {
            StatusKeaktifanPegawai::create($data->toArray());
        }
    }
}
