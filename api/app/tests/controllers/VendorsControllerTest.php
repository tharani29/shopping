<?php

class VendorsControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'vendors');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'vendors/1');
		$this->assertTrue($response->isOk());
	}

}
