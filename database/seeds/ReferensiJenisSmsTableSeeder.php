<?php

use App\Models\Referensi\JenisSms;
use Illuminate\Database\Seeder;

class ReferensiJenisSmsTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSms::truncate();

        foreach ($this->readCSV('data-referensi/jenis_sms.csv') as $data) {
            JenisSms::create($data->toArray());
        }
    }
}
