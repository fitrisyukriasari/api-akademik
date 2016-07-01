<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    public function testClientCanGetToken()
    {
        $this->setUpACL();

        $this->post('/auth/generate-token', ['username' => 'admin', 'password' => 'admin']);
        $this->seeJsonStructure(['token']);
    }

    public function testClientCanRetrieveUserInfoFromToken()
    {
        $this->get('/auth/user', $this->setHeaders());
        $this->seeJsonStructure(['user' => ['id', 'username']]);
    }


    public function testClientCanUseTokenAsAdmin()
    {
        $this->get('/admin', $this->setHeaders('Administrator'));
        $this->see('Welcome Admin');
    }

    public function testClientCanUseTokenAsMahasiswa()
    {
        $this->get('/mahasiswa', $this->setHeaders('Mahasiswa'));
        $this->see('Welcome Mahasiswa');
    }

    public function testClientCantUseTokenAsAdminIfNotAuthorized()
    {
        $this->get('/admin', $this->setHeaders('Mahasiswa'));
        $this->see('You are not admin sorry!');
    }

    public function testClientCantUseTokenAsMahasiswaIfNotAuthorized()
    {
        $this->get('/mahasiswa', $this->setHeaders('Administrator'));
        $this->see('You are not mahasiswa sorry!');
    }

}
