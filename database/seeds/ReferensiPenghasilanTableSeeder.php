<?php

use App\Models\Referensi\Penghasilan;
use Illuminate\Database\Seeder;

class ReferensiPenghasilanTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penghasilan::truncate();

        foreach ($this->readCSV('data-referensi/penghasilan.csv') as $data) {
            Penghasilan::create($data->toArray());
        }
    }
}
