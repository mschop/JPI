<?php

namespace App\Db\Schema;

class tWawiAttributSprache
{
	const TABLE_NAME = 'tWawiAttributSprache';
	const kWawiAttribut = 'kWawiAttribut';
	const kSprache = 'kSprache';
	const cWertVarchar = 'cWertVarchar';
	const nWertInt = 'nWertInt';
	const fWertDecimal = 'fWertDecimal';
	const dWertDateTime = 'dWertDateTime';
	const COLUMN_NAMES = ['kWawiAttribut', 'kSprache', 'cWertVarchar', 'nWertInt', 'fWertDecimal', 'dWertDateTime'];
	const COLUMN_DEFINITIONS = [
		'kWawiAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWertVarchar' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'nWertInt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fWertDecimal' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dWertDateTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWawiAttribut */
	public $kWawiAttribut;

	/** @var int kSprache */
	public $kSprache;

	/** @var resource cWertVarchar */
	public $cWertVarchar;

	/** @var int nWertInt */
	public $nWertInt;

	/** @var string fWertDecimal */
	public $fWertDecimal;

	/** @var string dWertDateTime */
	public $dWertDateTime;
}
