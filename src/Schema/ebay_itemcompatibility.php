<?php

namespace App\Schema;

class ebay_itemcompatibility
{
	const TABLE_NAME = 'ebay_itemcompatibility';
	const kItemCompatibility = 'kItemCompatibility';
	const kItem = 'kItem';
	const kType = 'kType';
	const cMarke = 'cMarke';
	const cModell = 'cModell';
	const cTyp = 'cTyp';
	const cPlattform = 'cPlattform';
	const cBaujahr = 'cBaujahr';
	const cMotor = 'cMotor';
	const cHSNTSN = 'cHSNTSN';
	const cCompatibilityNote = 'cCompatibilityNote';
	const COLUMN_NAMES = [
		'kItemCompatibility',
		'kItem',
		'kType',
		'cMarke',
		'cModell',
		'cTyp',
		'cPlattform',
		'cBaujahr',
		'cMotor',
		'cHSNTSN',
		'cCompatibilityNote',
	];
	const COLUMN_TYPES = [
		'kItemCompatibility' => 'int',
		'kItem' => 'int',
		'kType' => 'int',
		'cMarke' => 'varchar',
		'cModell' => 'varchar',
		'cTyp' => 'varchar',
		'cPlattform' => 'varchar',
		'cBaujahr' => 'varchar',
		'cMotor' => 'varchar',
		'cHSNTSN' => 'varchar',
		'cCompatibilityNote' => 'varchar',
	];

	/** @var int kItemCompatibility */
	public $kItemCompatibility;

	/** @var int kItem */
	public $kItem;

	/** @var int kType */
	public $kType;

	/** @var string cMarke */
	public $cMarke;

	/** @var string cModell */
	public $cModell;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var string cBaujahr */
	public $cBaujahr;

	/** @var string cMotor */
	public $cMotor;

	/** @var string cHSNTSN */
	public $cHSNTSN;

	/** @var string cCompatibilityNote */
	public $cCompatibilityNote;
}
