<?php

use App\Models\Referensi\JenjangPendidikan;
use Illuminate\Database\Seeder;

class ReferensiJenjangPendidikanTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenjangPendidikan::truncate();
        
        foreach ($this->readCSV('data-referensi/jenjang_pendidikan.csv') as $data) {
            JenjangPendidikan::create($data->toArray());
        }
    }
}
