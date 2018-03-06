<?php

namespace Modules\Core\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\User\Entities\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function loginWithFakeUser()
	{
		$user = new User([
			'id' => 1,
			'name' => 'Alison',
		]);

		$this->be($user);
	}
}
