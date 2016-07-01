<?php

namespace App\Http\Controllers;

use App\Models\Referensi\Agama;
use App\Models\Referensi\BentukPendidikan;
use App\Models\Referensi\IkatanKerjaDosen;
use App\Models\Referensi\Jabfung;
use App\Models\Referensi\JenisEvaluasi;
use App\Models\Referensi\JenisKeluar;
use App\Models\Referensi\JenisPendaftaran;
use App\Models\Referensi\JenisSert;
use App\Models\Referensi\JenisSms;
use App\Models\Referensi\JenisSubst;
use App\Models\Referensi\JenjangPendidikan;
use App\Models\Referensi\Jurusan;
use App\Models\Referensi\LembagaPengangkat;
use App\Models\Referensi\LevelWilayah;
use App\Models\Referensi\Negara;
use App\Models\Referensi\PangkatGolongan;
use App\Models\Referensi\Pekerjaan;
use App\Models\Referensi\Penghasilan;
use App\Models\Referensi\Semester;
use App\Models\Referensi\StatusKeaktifanPegawai;
use App\Models\Referensi\StatusKepegawaian;
use App\Models\Referensi\StatusMahasiswa;
use App\Models\Referensi\TahunAjaran;
use App\Models\Referensi\Wilayah;
use Illuminate\Http\Request;
use App\Http\Requests;

class DataReferensiController extends Controller
{
    public function home()
    {
        return 'Endpoint data referensi';
    }

    public function getAgama()
    {
        return Agama::all();
    }

    public function getBentukPendidikan()
    {
        return BentukPendidikan::all();
    }

    public function getIkatanKerjaDosen()
    {
        return IkatanKerjaDosen::all();
    }

    public function getJabfung()
    {
        return Jabfung::all();
    }

    public function getJenisEvaluasi()
    {
        return JenisEvaluasi::all();
    }

    public function getJenisKeluar()
    {
        return JenisKeluar::all();
    }

    public function getJenisPendaftaran()
    {
        return JenisPendaftaran::all();
    }

    public function getJenisSert()
    {
        return JenisSert::all();
    }

    public function getJenisSms()
    {
        return JenisSms::all();
    }

    public function getJenisSubst()
    {
        return JenisSubst::all();
    }

    public function getJenjangPendidikan()
    {
        return JenjangPendidikan::all();
    }

    public function getJurusan()
    {
        return Jurusan::all();
    }

    public function getLembagaPengangkat()
    {
        return LembagaPengangkat::all();
    }

    public function getLevelWilayah()
    {
        return LevelWilayah::all();
    }

    public function getNegara()
    {
        return Negara::all();
    }

    public function getPangkatGolongan()
    {
        return PangkatGolongan::all();
    }

    public function getPekerjaan()
    {
        return Pekerjaan::all();
    }

    public function getPenghasilan()
    {
        return Penghasilan::all();
    }

    public function getSemester()
    {
        return Semester::all();
    }

    public function getStatusKeaktifanPegawai()
    {
        return StatusKeaktifanPegawai::all();
    }

    public function getStatusKepegawaian()
    {
        return StatusKepegawaian::all();
    }

    public function getStatusMahasiswa()
    {
        return StatusMahasiswa::all();
    }

    public function getTahunAjaran()
    {
        return TahunAjaran::all();
    }

    public function getWilayah()
    {
        return Wilayah::all();
    }
}
