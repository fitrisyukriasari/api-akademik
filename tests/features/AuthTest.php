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
        $this->setUpACL();
        $headers = $this->headers(User::first());

        $this->get('/auth/user', $headers);
        $this->seeJsonStructure(['user' => ['id', 'username']]);
    }


    public function testClientCanUseTokenAsAdmin()
    {
        $this->setUpACL();
        $headers = $this->headers(User::first());

        $this->get('/admin', $headers);
        $this->see('Welcome Admin');
    }

    public function testClientCanUseTokenAsMahasiswa()
    {
        $this->setUpACL();
        $headers = $this->headers(User::find(2));

        $this->get('/mahasiswa', $headers);
        $this->see('Welcome Mahasiswa');
    }

    public function testClientCantUseTokenAsAdminIfNotAuthorized()
    {
        $this->setUpACL();
        $headers = $this->headers(User::findOrFail(2));

        $this->get('/admin', $headers);
        $this->see('You are not admin sorry!');
    }

    public function testClientCantUseTokenAsMahasiswaIfNotAuthorized()
    {
        $this->setUpACL();
        $headers = $this->headers(User::find(1));;

        $this->get('/mahasiswa', $headers);
        $this->see('You are not mahasiswa sorry!');
    }

}
