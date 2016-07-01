<?php

use App\Models\Referensi\BentukPendidikan;
use Illuminate\Database\Seeder;

class ReferensiBentukPendidikanTableSeeder extends Seeder
{
    
    use ReferensiTableSeederTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BentukPendidikan::truncate();

        foreach ($this->readCSV('data-referensi/bentuk_pendidikan.csv') as $bp) {
            BentukPendidikan::create($bp->toArray());
        }
    }
}
