<?php

use App\Models\Referensi\LembagaPengangkat;
use Illuminate\Database\Seeder;

class ReferensiLembagaPengangkatTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LembagaPengangkat::truncate();

        foreach ($this->readCSV('data-referensi/lembaga_pengangkat.csv') as $data) {
            LembagaPengangkat::create($data->toArray());
        }
    }
}
