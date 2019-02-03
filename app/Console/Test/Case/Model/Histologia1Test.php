<?php
App::uses('Histologia1', 'Model');

/**
 * Histologia1 Test Case
 *
 */
class Histologia1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.histologia1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Histologia1 = ClassRegistry::init('Histologia1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Histologia1);

		parent::tearDown();
	}

}
