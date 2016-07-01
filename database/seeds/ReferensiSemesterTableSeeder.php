<?php

use App\Models\Referensi\Semester;
use Illuminate\Database\Seeder;

class ReferensiSemesterTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::truncate();

        foreach ($this->readCSV('data-referensi/semester.csv') as $data) {
            Semester::create($data->toArray());
        }
    }
}
