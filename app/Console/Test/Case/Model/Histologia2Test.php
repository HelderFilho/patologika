<?php
App::uses('Histologia2', 'Model');

/**
 * Histologia2 Test Case
 *
 */
class Histologia2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.histologia2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Histologia2 = ClassRegistry::init('Histologia2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Histologia2);

		parent::tearDown();
	}

}
