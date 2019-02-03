<?php
App::uses('PreConferencium', 'Model');

/**
 * PreConferencium Test Case
 */
class PreConferenciumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pre_conferencium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PreConferencium = ClassRegistry::init('PreConferencium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PreConferencium);

		parent::tearDown();
	}

}
