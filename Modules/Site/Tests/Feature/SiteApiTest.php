<?php

namespace Modules\Site\Tests\Feature;

use Modules\Core\Tests\TestCase;

class SiteApiTest extends TestCase
{
	public function testMethodGet()
	{
		$this->loginWithFakeUser();

		$this->get('api/site')
			->assertStatus(200)
			->assertJsonStructure([
				'id', 'name', 'description', 'user_id',
			]);
	}
}
