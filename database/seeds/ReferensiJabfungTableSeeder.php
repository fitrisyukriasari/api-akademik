<?php

use App\Models\Referensi\Jabfung;
use Illuminate\Database\Seeder;

class ReferensiJabfungTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabfung::truncate();

        foreach ($this->readCSV('data-referensi/jabfung.csv') as $data) {
            Jabfung::create($data->toArray());
        }
    }
}
