<?php

use App\Models\Referensi\StatusKepegawaian;
use Illuminate\Database\Seeder;

class ReferensiStatusKepegawaianTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusKepegawaian::truncate();

        foreach ($this->readCSV('data-referensi/status_kepegawaian.csv') as $data) {
            StatusKepegawaian::create($data->toArray());
        }
    }
}
