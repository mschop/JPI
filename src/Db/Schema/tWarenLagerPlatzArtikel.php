<?php

namespace App\Db\Schema;

class tWarenLagerPlatzArtikel
{
	const TABLE_NAME = 'tWarenLagerPlatzArtikel';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kArtikel = 'kArtikel';
	const cKommentar_1 = 'cKommentar_1';
	const cKommentar_2 = 'cKommentar_2';
	const COLUMN_NAMES = ['kWarenLagerPlatz', 'kArtikel', 'cKommentar_1', 'cKommentar_2'];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentar_1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKommentar_2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cKommentar_1 */
	public $cKommentar_1;

	/** @var string cKommentar_2 */
	public $cKommentar_2;
}
