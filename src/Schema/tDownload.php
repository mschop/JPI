<?php

namespace App\Schema;

class tDownload
{
	const TABLE_NAME = 'tDownload';
	const kDownload = 'kDownload';
	const cID = 'cID';
	const cPfad = 'cPfad';
	const cPfadVorschau = 'cPfadVorschau';
	const nAnzahl = 'nAnzahl';
	const nTage = 'nTage';
	const dErstellt = 'dErstellt';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kDownload', 'cID', 'cPfad', 'cPfadVorschau', 'nAnzahl', 'nTage', 'dErstellt', 'nSort'];
	const COLUMN_TYPES = [
		'kDownload' => 'int',
		'cID' => 'varchar',
		'cPfad' => 'varchar',
		'cPfadVorschau' => 'varchar',
		'nAnzahl' => 'int',
		'nTage' => 'int',
		'dErstellt' => 'datetime',
		'nSort' => 'int',
	];

	/** @var int kDownload */
	public $kDownload;

	/** @var string cID */
	public $cID;

	/** @var string cPfad */
	public $cPfad;

	/** @var string cPfadVorschau */
	public $cPfadVorschau;

	/** @var int nAnzahl */
	public $nAnzahl;

	/** @var int nTage */
	public $nTage;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nSort */
	public $nSort;
}
