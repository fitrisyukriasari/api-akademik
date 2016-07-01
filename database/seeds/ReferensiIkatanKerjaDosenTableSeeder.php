<?php

use App\Models\Referensi\IkatanKerjaDosen;
use Illuminate\Database\Seeder;

class ReferensiIkatanKerjaDosenTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IkatanKerjaDosen::truncate();

        foreach ($this->readCSV('data-referensi/ikatan_kerja_dosen.csv') as $data) {
            IkatanKerjaDosen::create($data->toArray());
        }
    }
}
