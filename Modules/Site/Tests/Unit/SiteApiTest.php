<?php

namespace Modules\Site\Tests\Unit;

use Modules\Core\Tests\TestCase;
use Modules\Site\Http\Api\SiteApi;

class SiteApiTest extends TestCase
{
	public function testBoolToJsonGetsOk()
    {
    	$controller = new SiteApi;

    	$result = $controller->boolToJson(true);
    	$this->assertNotEmpty($result);

    	$data = json_decode($result, true);
        $this->assertArrayHasKey('status', $data);
        $this->assertEquals($data['status'], 'ok');
    }

    public function testBoolToJsonGetsErro()
    {
    	$controller = new SiteApi;

        $result = $controller->boolToJson(false);
    	$this->assertNotEmpty($result);

    	$data = json_decode($result, true);
        $this->assertArrayHasKey('status', $data);
        $this->assertEquals($data['status'], 'erro');
    }
}
