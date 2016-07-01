<?php

use App\Models\Referensi\Negara;
use Illuminate\Database\Seeder;

class ReferensiNegaraTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Negara::truncate();

        foreach ($this->readCSV('data-referensi/negara.csv') as $data) {
            Negara::create($data->toArray());
        }
    }
}
