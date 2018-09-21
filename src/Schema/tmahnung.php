<?php

namespace App\Schema;

class tmahnung
{
	const TABLE_NAME = 'tmahnung';
	const kMahnung = 'kMahnung';
	const kRechnung = 'kRechnung';
	const kKunde = 'kKunde';
	const cKurzText = 'cKurzText';
	const cAnrede = 'cAnrede';
	const cText = 'cText';
	const fBruttoBetrag = 'fBruttoBetrag';
	const dErstellt = 'dErstellt';
	const nStuffe = 'nStuffe';
	const kSprache = 'kSprache';
	const kBenutzer = 'kBenutzer';
	const kFirma = 'kFirma';
	const COLUMN_NAMES = [
		'kMahnung',
		'kRechnung',
		'kKunde',
		'cKurzText',
		'cAnrede',
		'cText',
		'fBruttoBetrag',
		'dErstellt',
		'nStuffe',
		'kSprache',
		'kBenutzer',
		'kFirma',
	];
	const COLUMN_TYPES = [
		'kMahnung' => 'int',
		'kRechnung' => 'int',
		'kKunde' => 'int',
		'cKurzText' => 'varchar',
		'cAnrede' => 'varchar',
		'cText' => 'varchar',
		'fBruttoBetrag' => 'decimal',
		'dErstellt' => 'datetime',
		'nStuffe' => 'tinyint',
		'kSprache' => 'int',
		'kBenutzer' => 'int',
		'kFirma' => 'int',
	];

	/** @var int kMahnung */
	public $kMahnung;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cKurzText */
	public $cKurzText;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cText */
	public $cText;

	/** @var string fBruttoBetrag */
	public $fBruttoBetrag;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nStuffe */
	public $nStuffe;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kFirma */
	public $kFirma;
}
