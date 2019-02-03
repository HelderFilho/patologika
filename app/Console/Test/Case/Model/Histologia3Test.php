<?php
App::uses('Histologia3', 'Model');

/**
 * Histologia3 Test Case
 *
 */
class Histologia3Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.histologia3'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Histologia3 = ClassRegistry::init('Histologia3');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Histologia3);

		parent::tearDown();
	}

}
