<?php

use App\Models\Referensi\PangkatGolongan;
use Illuminate\Database\Seeder;

class ReferensiPangkatGolonganTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PangkatGolongan::truncate();

        foreach ($this->readCSV('data-referensi/pangkat_golongan.csv') as $data) {
            PangkatGolongan::create($data->toArray());
        }
    }
}
