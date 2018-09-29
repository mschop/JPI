<?php

namespace App\Db\Schema;

class tIntervallZahlungsInfo
{
	const TABLE_NAME = 'tIntervallZahlungsInfo';
	const kIntervall = 'kIntervall';
	const cBankName = 'cBankName';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';
	const cKartenNr = 'cKartenNr';
	const cGueltigkeit = 'cGueltigkeit';
	const cCVV = 'cCVV';
	const cKartenTyp = 'cKartenTyp';
	const cInhaber = 'cInhaber';
	const cIBAN = 'cIBAN';
	const cBIC = 'cBIC';
	const COLUMN_NAMES = [
		'kIntervall',
		'cBankName',
		'cBLZ',
		'cKontoNr',
		'cKartenNr',
		'cGueltigkeit',
		'cCVV',
		'cKartenTyp',
		'cInhaber',
		'cIBAN',
		'cBIC',
	];
	const COLUMN_DEFINITIONS = [
		'kIntervall' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBankName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cKontoNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cKartenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cGueltigkeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cCVV' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4,
			'characterSetName' => 'iso_1',
		],
		'cKartenTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cInhaber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cIBAN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cBIC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var string cBankName */
	public $cBankName;

	/** @var string cBLZ */
	public $cBLZ;

	/** @var string cKontoNr */
	public $cKontoNr;

	/** @var string cKartenNr */
	public $cKartenNr;

	/** @var string cGueltigkeit */
	public $cGueltigkeit;

	/** @var string cCVV */
	public $cCVV;

	/** @var string cKartenTyp */
	public $cKartenTyp;

	/** @var string cInhaber */
	public $cInhaber;

	/** @var string cIBAN */
	public $cIBAN;

	/** @var string cBIC */
	public $cBIC;
}
