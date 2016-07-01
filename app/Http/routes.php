<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Collection of routes for the API.
|
*/

$api = app(Dingo\Api\Routing\Router::class);

$api->version('v1', function() use ($api) {
    $api->post('/auth/generate-token', 'App\Http\Controllers\Auth\AuthController@authenticate');
    $api->get('/auth/refresh-token', 'App\Http\Controllers\Auth\AuthController@refreshToken');

    $api->group(['middleware' => 'api.auth'], function() use ($api) {
        $api->get('/auth/user', 'App\Http\Controllers\Auth\AuthController@getUserInfo');

        $api->group(['middleware' => 'administrator'], function() use ($api) {
            $api->get('/admin', 'App\Http\Controllers\Admin\DashboardController@home');
        });

        $api->group(['middleware' => 'mahasiswa'], function() use ($api) {
            $api->get('/mahasiswa', 'App\Http\Controllers\Mahasiswa\DashboardController@home');
        });

        $api->group(['prefix' => 'data-referensi'], function() use ($api) {
            $api->get('/', 'App\Http\Controllers\DataReferensiController@home');
            $api->get('/agama', 'App\Http\Controllers\DataReferensiController@getAgama');
            $api->get('/bentuk-pendidikan', 'App\Http\Controllers\DataReferensiController@getBentukPendidikan');
            $api->get('/ikatan-kerja-dosen', 'App\Http\Controllers\DataReferensiController@getIkatanKerjaDosen');
            $api->get('/jabfung', 'App\Http\Controllers\DataReferensiController@getJabfung');
            $api->get('/jenis-evaluasi', 'App\Http\Controllers\DataReferensiController@getJenisEvaluasi');
            $api->get('/jenis-keluar', 'App\Http\Controllers\DataReferensiController@getJenisKeluar');
            $api->get('/jenis-pendaftaran', 'App\Http\Controllers\DataReferensiController@getJenisPendaftaran');
            $api->get('/jenis-sert', 'App\Http\Controllers\DataReferensiController@getJenisSert');
            $api->get('/jenis-sms', 'App\Http\Controllers\DataReferensiController@getJenisSms');
            $api->get('/jenis-subst', 'App\Http\Controllers\DataReferensiController@getJenisSubst');
            $api->get('/jenjang-pendidikan', 'App\Http\Controllers\DataReferensiController@getJenjangPendidikan');
            $api->get('/jurusan', 'App\Http\Controllers\DataReferensiController@getJurusan');
            $api->get('/lembaga-pengangkat', 'App\Http\Controllers\DataReferensiController@getLembagaPengangkat');
            $api->get('/level-wilayah', 'App\Http\Controllers\DataReferensiController@getLevelWilayah');
            $api->get('/negara', 'App\Http\Controllers\DataReferensiController@getNegara');
            $api->get('/pangkat-golongan', 'App\Http\Controllers\DataReferensiController@getPangkatGolongan');
            $api->get('/pekerjaan', 'App\Http\Controllers\DataReferensiController@getPekerjaan');
            $api->get('/penghasilan', 'App\Http\Controllers\DataReferensiController@getPenghasilan');
            $api->get('/semester', 'App\Http\Controllers\DataReferensiController@getSemester');
            $api->get('/status-keaktifan-pegawai', 'App\Http\Controllers\DataReferensiController@getStatusKeaktifanPegawai');
            $api->get('/status-kepegawaian', 'App\Http\Controllers\DataReferensiController@getStatusKepegawaian');
            $api->get('/status-mahasiswa', 'App\Http\Controllers\DataReferensiController@getStatusMahasiswa');
            $api->get('/tahun-ajaran', 'App\Http\Controllers\DataReferensiController@getTahunAjaran');
            $api->get('/wilayah', 'App\Http\Controllers\DataReferensiController@getWilayah');
        });
    });
});