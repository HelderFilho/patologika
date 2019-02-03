<?php
App::uses('PreConf', 'Model');

/**
 * PreConf Test Case
 *
 */
class PreConfTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pre_conf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PreConf = ClassRegistry::init('PreConf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PreConf);

		parent::tearDown();
	}

}
