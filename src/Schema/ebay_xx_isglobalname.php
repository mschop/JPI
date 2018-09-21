<?php

namespace App\Schema;

class ebay_xx_isglobalname
{
	const TABLE_NAME = 'ebay_xx_isglobalname';
	const kName = 'kName';
	const cName = 'cName';
	const COLUMN_NAMES = ['kName', 'cName'];
	const COLUMN_TYPES = ['kName' => 'int', 'cName' => 'varchar'];

	/** @var int kName */
	public $kName;

	/** @var string cName */
	public $cName;
}
