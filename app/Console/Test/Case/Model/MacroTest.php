<?php
App::uses('Macro', 'Model');

/**
 * Macro Test Case
 *
 */
class MacroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.macro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Macro = ClassRegistry::init('Macro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Macro);

		parent::tearDown();
	}

}
