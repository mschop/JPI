<?php

namespace App\Db\Schema;

class ebay_vw_eignertext
{
	const TABLE_NAME = 'ebay_vw_eignertext';
	const kEbay_vw_eignertext = 'kEbay_vw_eignertext';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEbay_vw_eignertext', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kEbay_vw_eignertext' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbay_vw_eignertext */
	public $kEbay_vw_eignertext;

	/** @var string cName */
	public $cName;
}
