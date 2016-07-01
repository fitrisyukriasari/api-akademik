<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        $this->call(ReferensiAgamaTableSeeder::class);
        $this->call(ReferensiBentukPendidikanTableSeeder::class);
        $this->call(ReferensiIkatanKerjaDosenTableSeeder::class);
        $this->call(ReferensiJabfungTableSeeder::class);
        $this->call(ReferensiJenisEvaluasiTableSeeder::class);
        $this->call(ReferensiJenisKeluarTableSeeder::class);
        $this->call(ReferensiJenisPendaftaranTableSeeder::class);
        $this->call(ReferensiJenisSertTableSeeder::class);
        $this->call(ReferensiJenisSmsTableSeeder::class);
        $this->call(ReferensiJenisSubstTableSeeder::class);
        $this->call(ReferensiJenjangPendidikanTableSeeder::class);
        $this->call(ReferensiJurusanTableSeeder::class);
        $this->call(ReferensiLembagaPengangkatTableSeeder::class);
        $this->call(ReferensiLevelWilayahTableSeeder::class);
        $this->call(ReferensiNegaraTableSeeder::class);
        $this->call(ReferensiPangkatGolonganTableSeeder::class);
        $this->call(ReferensiPekerjaanTableSeeder::class);
        $this->call(ReferensiPenghasilanTableSeeder::class);
        $this->call(ReferensiSemesterTableSeeder::class);
        $this->call(ReferensiStatusKeaktifanPegawaiTableSeeder::class);
        $this->call(ReferensiStatusKepegawaianTableSeeder::class);
        $this->call(ReferensiStatusMahasiswaTableSeeder::class);
        $this->call(ReferensiTahunAjaranTableSeeder::class);
        $this->call(ReferensiWilayahTableSeeder::class);
    }
}