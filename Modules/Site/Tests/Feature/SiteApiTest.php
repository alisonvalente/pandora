<?php

namespace Modules\Site\Tests\Feature;

use Modules\Core\Tests\TestCase;

class SiteApiTest extends TestCase
{
	public function setUp()
	{
		parent::setUp();
		$this->loginWithFakeUser();
	}

	public function testMethodGet()
	{
		$this->get('api/site')
			->assertStatus(200)
			->assertJsonStructure([
				'id', 'name', 'description', 'user_id',
			]);
	}
}
