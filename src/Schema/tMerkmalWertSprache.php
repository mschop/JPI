<?php

namespace App\Schema;

class tMerkmalWertSprache
{
	const TABLE_NAME = 'tMerkmalWertSprache';
	const kMerkmalWert = 'kMerkmalWert';
	const kSprache = 'kSprache';
	const cWert = 'cWert';
	const cSeo = 'cSeo';
	const cMetaTitle = 'cMetaTitle';
	const cMetaKeywords = 'cMetaKeywords';
	const cMetaDescription = 'cMetaDescription';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = [
		'kMerkmalWert',
		'kSprache',
		'cWert',
		'cSeo',
		'cMetaTitle',
		'cMetaKeywords',
		'cMetaDescription',
		'cBeschreibung',
	];
	const COLUMN_TYPES = [
		'kMerkmalWert' => 'int',
		'kSprache' => 'int',
		'cWert' => 'varchar',
		'cSeo' => 'varchar',
		'cMetaTitle' => 'varchar',
		'cMetaKeywords' => 'varchar',
		'cMetaDescription' => 'varchar',
		'cBeschreibung' => 'varchar',
	];

	/** @var int kMerkmalWert */
	public $kMerkmalWert;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cWert */
	public $cWert;

	/** @var string cSeo */
	public $cSeo;

	/** @var string cMetaTitle */
	public $cMetaTitle;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
