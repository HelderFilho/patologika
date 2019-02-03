<?php
/**
 * PreConfFixture
 *
 */
class PreConfFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'pre_conf';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Responsavel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Nome_Paciente' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Numero_Frascos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Numero_Blocos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Removed' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Data_Descarte' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'Conforme' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'Id' => 1,
			'Responsavel' => 'Lorem ipsum dolor sit amet',
			'Nome_Paciente' => 'Lorem ipsum dolor sit amet',
			'Tipo' => 'Lorem ipsum dolor sit amet',
			'Numero_Frascos' => 'Lorem ipsum dolor sit amet',
			'Numero_Blocos' => 'Lorem ipsum dolor sit amet',
			'Removed' => 'Lorem ipsum dolor sit amet',
			'Created' => '2019-01-23 00:25:34',
			'Modified' => '2019-01-23 00:25:34',
			'Data_Descarte' => '2019-01-23 00:25:34',
			'Conforme' => 'Lorem ipsum dolor sit amet'
		),
	);

}
