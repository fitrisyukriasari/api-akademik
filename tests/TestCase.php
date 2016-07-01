<?php

use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://tdd-api.app';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    protected function setUpACL()
    {
        $this->seed(UserTableSeeder::class);
    }

    protected function headers($user = null)
    {
        $headers = ['Accept' => 'application/json'];

        if ( ! is_null($user)) {
            $token = JWTAuth::fromUser($user);
            JWTAuth::setToken($token);
            $headers['Authorization'] = 'Bearer ' . $token;
        }

        // THIS IS BUG!
        // (https://laracasts.com/discuss/channels/testing/laravel-testcase-not-sending-authorization-headers)
        $this->refreshApplication();
        $this->runDatabaseMigrations();

        $this->setUpACL();
        // END OF THE SOLUTION OF THE BUG

        return $headers;
    }

    protected function setHeaders($role = 'Administrator')
    {
        $this->setUpACL();

        $user = $role == 'Administrator' ? User::first() : User::findOrFail(2);
        return $this->headers($user);
    }
}
