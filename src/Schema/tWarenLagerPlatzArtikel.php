<?php

namespace App\Schema;

class tWarenLagerPlatzArtikel
{
	const TABLE_NAME = 'tWarenLagerPlatzArtikel';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kArtikel = 'kArtikel';
	const cKommentar_1 = 'cKommentar_1';
	const cKommentar_2 = 'cKommentar_2';
	const COLUMN_NAMES = ['kWarenLagerPlatz', 'kArtikel', 'cKommentar_1', 'cKommentar_2'];
	const COLUMN_TYPES = [
		'kWarenLagerPlatz' => 'int',
		'kArtikel' => 'int',
		'cKommentar_1' => 'varchar',
		'cKommentar_2' => 'varchar',
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
