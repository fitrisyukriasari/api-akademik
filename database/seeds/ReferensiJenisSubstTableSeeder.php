<?php

use App\Models\Referensi\JenisSubst;
use Illuminate\Database\Seeder;

class ReferensiJenisSubstTableSeeder extends Seeder
{

    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSubst::truncate();

        foreach ($this->readCSV('data-referensi/jenis_subst.csv') as $data) {
            JenisSubst::create($data->toArray());
        }
    }
}
