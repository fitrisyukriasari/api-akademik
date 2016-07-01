<?php

use App\Models\Referensi\Agama;
use Illuminate\Database\Seeder;

class ReferensiAgamaTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agama::truncate();

        foreach($this->readCSV('data-referensi/agama.csv') as $agama) {
            Agama::create($agama->toArray());
        }
    }
}
