<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReferenceDataTest extends TestCase
{
    use DatabaseMigrations;

    public function testClientCanAccessDataReferenceDashboardEndpoint()
    {
        $this->get('/data-referensi', $this->setHeaders());
        $this->see('Endpoint data referensi');
    }

    public function testClientCanAccessDataAgamaEndpoint()
    {
        $this->seed(ReferensiAgamaTableSeeder::class);

        $this->get('/data-referensi/agama', $this->setHeaders())
            ->seeJsonStructure([
                '*' => ['id_agama', 'nm_agama']
            ]);
    }

    public function testClientCanAccessDataBentukPendidikanEndpoint()
    {
        $this->seed(ReferensiBentukPendidikanTableSeeder::class);
        $this->get('/data-referensi/bentuk-pendidikan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_bp', 'nm_bp', 'a_jenj_paud', 'a_jenj_tk', 'a_jenj_sd', 'a_jenj_smp',
                    'a_jenj_sma', 'a_jenj_tinggi', 'dir_bina', 'a_aktif'
                ]
            ]);
    }

    public function testClientCanAccessDataIkatanKerjaDosenEndpoint()
    {
        $this->seed(ReferensiIkatanKerjaDosenTableSeeder::class);
        $this->get('/data-referensi/ikatan-kerja-dosen', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_ikatan_kerja',
                    'nm_ikatan_kerja',
                    'ket_ikatan_kerja',
                ]
            ]);
    }

    public function testClientCanAccessDataJabfungEndpoint()
    {
        $this->seed(ReferensiJabfungTableSeeder::class);
        $this->get('/data-referensi/jabfung', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jabfung',
                    'nm_jabfung',
                ]
            ]);
    }

    public function testClientCanAccessDataJenisEvaluasiEndpoint()
    {
        $this->seed(ReferensiJenisEvaluasiTableSeeder::class);
        $this->get('/data-referensi/jenis-evaluasi', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_eval',
                    'nm_jns_eval',
                    'ket_jns_eval'
                ]
            ]);
    }

    public function testClientCanAccessDataJenisKeluarEndpoint()
    {
        $this->seed(ReferensiJenisKeluarTableSeeder::class);
        $this->get('/data-referensi/jenis-keluar', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_keluar',
                    'ket_keluar',
                    'a_pd',
                    'a_ptk'
                ]
            ]);
    }

    public function testClientCanAccessDataJenisPendaftaranEndpoint()
    {
        $this->seed(ReferensiJenisPendaftaranTableSeeder::class);
        $this->get('/data-referensi/jenis-pendaftaran', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_daftar',
                    'nm_jns_daftar',
                    'u_daftar_sekolah',
                    'u_daftar_rombel'
                ]
            ]);
    }

    public function testClientCanAccessDataJenisSertEndpoint()
    {
        $this->seed(ReferensiJenisSertTableSeeder::class);
        $this->get('/data-referensi/jenis-sert', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_sert',
                    'id_kk',
                    'nm_jns_sert',
                    'u_prof_guru',
                    'u_kepsek',
                    'u_laboran',
                    'u_prof_dosen',
                ]
            ]);
    }

    public function testClientCanAccessDataJenisSmsEndpoint()
    {
        $this->seed(ReferensiJenisSmsTableSeeder::class);
        $this->get('/data-referensi/jenis-sms', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_sms',
                    'nm_jns_sms',
                ]
            ]);
    }

    public function testClientCanAccessDataJenisSubstEndpoint()
    {
        $this->seed(ReferensiJenisSubstTableSeeder::class);
        $this->get('/data-referensi/jenis-subst', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jns_subst',
                    'nm_jns_subst',
                ]
            ]);
    }

    public function testClientCanAccessDataJenjangPendidikanEndpoint()
    {
        $this->seed(ReferensiJenjangPendidikanTableSeeder::class);
        $this->get('/data-referensi/jenjang-pendidikan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jenj_didik',
                    'nm_jenj_didik',
                    'u_jenj_lembaga',
                    'u_jenj_org',
                ]
            ]);
    }

    public function testClientCanAccessDataJurusanEndpoint()
    {
        $this->seed(ReferensiJurusanTableSeeder::class);
        $this->get('/data-referensi/jenjang-pendidikan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_jur',
                    'nm_jur',
                    'nm_intl_jur',
                    'u_sma',
                    'u_smk',
                    'u_pt',
                    'u_slb',
                    'id_jenj_didik',
                    'id_induk_jurusan',
                    'id_kel_bidang',
                ]
            ]);
    }

    public function testClientCanAccessDataLembagaPengangkatEndpoint()
    {
        $this->seed(ReferensiLembagaPengangkatTableSeeder::class);
        $this->get('/data-referensi/lembaga-pengangkat', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_lemb_angkat',
                    'nm_lemb_angkat',
                ]
            ]);
    }

    public function testClientCanAccessDataLevelWilayahEndpoint()
    {
        $this->seed(ReferensiLevelWilayahTableSeeder::class);
        $this->get('/data-referensi/level-wilayah', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_level_wil',
                    'nm_level_wilayah',
                ]
            ]);
    }

    public function testClientCanAccessDataNegaraEndpoint()
    {
        $this->seed(ReferensiNegaraTableSeeder::class);
        $this->get('/data-referensi/negara', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_negara',
                    'nm_negara',
                    'a_ln',
                ]
            ]);
    }

    public function testClientCanAccessDataPangkatGolonganEndpoint()
    {
        $this->seed(ReferensiPangkatGolonganTableSeeder::class);
        $this->get('/data-referensi/pangkat-golongan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_pangkat_gol',
                    'kode_gol',
                    'nm_pangkat',
                ]
            ]);
    }

    public function testClientCanAccessDataPekerjaanEndpoint()
    {
        $this->seed(ReferensiPekerjaanTableSeeder::class);
        $this->get('/data-referensi/pekerjaan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_pekerjaan',
                    'nm_pekerjaan',
                ]
            ]);
    }

    public function testClientCanAccessDataPenghasilanEndpoint()
    {
        $this->seed(ReferensiPenghasilanTableSeeder::class);
        $this->get('/data-referensi/penghasilan', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_penghasilan',
                    'nm_penghasilan',
                ]
            ]);
    }

    public function testClientCanAccessDataSemesterEndpoint()
    {
        $this->seed(ReferensiSemesterTableSeeder::class);
        $this->get('/data-referensi/semester', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_smt',
                    'nm_smt',
                    'smt',
                    'a_periode_aktif',
                    'tgl_mulai',
                    'tgl_selesai',
                ]
            ]);
    }

    public function testClientCanAccessDataStatusKeaktifanPegawaiEndpoint()
    {
        $this->seed(ReferensiStatusKeaktifanPegawaiTableSeeder::class);
        $this->get('/data-referensi/status-keaktifan-pegawai', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_stat_aktif',
                    'nm_stat_aktif',
                ]
            ]);
    }

    public function testClientCanAccessDataStatusKepegawaianEndpoint()
    {
        $this->seed(ReferensiStatusKepegawaianTableSeeder::class);
        $this->get('/data-referensi/status-kepegawaian', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_stat_pegawai',
                    'nm_stat_pegawai',
                ]
            ]);
    }

    public function testClientCanAccessDataStatusMahasiswaEndpoint()
    {
        $this->seed(ReferensiStatusMahasiswaTableSeeder::class);
        $this->get('/data-referensi/status-mahasiswa', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_stat_mhs',
                    'nm_stat_mhs',
                    'ket_stat_mhs',
                ]
            ]);
    }

    public function testClientCanAccessDataTahunAjaranEndpoint()
    {
        $this->seed(ReferensiTahunAjaranTableSeeder::class);
        $this->get('/data-referensi/tahun-ajaran', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_thn_ajaran',
                    'nm_thn_ajaran',
                    'a_periode_aktif',
                    'tgl_mulai',
                    'tgl_selesai',
                ]
            ]);
    }

    public function testClientCanAccessDataWilayahEndpoint()
    {
        $this->seed(ReferensiWilayahTableSeeder::class);
        $this->get('/data-referensi/wilayah', $this->setHeaders())
            ->seeJsonStructure([
                '*' => [
                    'id_wil',
                    'nm_wil',
                    'asal_wil',
                    'kode_bps',
                    'kode_dagri',
                    'kode_keu',
                    'id_induk_wilayah',
                    'id_level_wil',
                    'id_negara',
                ]
            ]);
    }

}
