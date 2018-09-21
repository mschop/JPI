<?php

namespace App\Schema;

class twebversand
{
	const TABLE_NAME = 'twebversand';
	const kWebVersand = 'kWebVersand';
	const cServerURL = 'cServerURL';
	const cBenutzerWeb = 'cBenutzerWeb';
	const cPasswortWeb = 'cPasswortWeb';
	const cServerFtp = 'cServerFtp';
	const cBenutzerFtp = 'cBenutzerFtp';
	const cPasswortFtp = 'cPasswortFtp';
	const cPASV = 'cPASV';
	const cAPIKEY = 'cAPIKEY';
	const cFTPPath = 'cFTPPath';
	const nHttpPut = 'nHttpPut';
	const nShopAuftragsNr = 'nShopAuftragsNr';
	const COLUMN_NAMES = [
		'kWebVersand',
		'cServerURL',
		'cBenutzerWeb',
		'cPasswortWeb',
		'cServerFtp',
		'cBenutzerFtp',
		'cPasswortFtp',
		'cPASV',
		'cAPIKEY',
		'cFTPPath',
		'nHttpPut',
		'nShopAuftragsNr',
	];
	const COLUMN_TYPES = [
		'kWebVersand' => 'int',
		'cServerURL' => 'varchar',
		'cBenutzerWeb' => 'varchar',
		'cPasswortWeb' => 'varchar',
		'cServerFtp' => 'varchar',
		'cBenutzerFtp' => 'varchar',
		'cPasswortFtp' => 'varchar',
		'cPASV' => 'char',
		'cAPIKEY' => 'varchar',
		'cFTPPath' => 'varchar',
		'nHttpPut' => 'tinyint',
		'nShopAuftragsNr' => 'tinyint',
	];

	/** @var int kWebVersand */
	public $kWebVersand;

	/** @var string cServerURL */
	public $cServerURL;

	/** @var string cBenutzerWeb */
	public $cBenutzerWeb;

	/** @var string cPasswortWeb */
	public $cPasswortWeb;

	/** @var string cServerFtp */
	public $cServerFtp;

	/** @var string cBenutzerFtp */
	public $cBenutzerFtp;

	/** @var string cPasswortFtp */
	public $cPasswortFtp;

	/** @var string cPASV */
	public $cPASV;

	/** @var string cAPIKEY */
	public $cAPIKEY;

	/** @var string cFTPPath */
	public $cFTPPath;

	/** @var int nHttpPut */
	public $nHttpPut;

	/** @var int nShopAuftragsNr */
	public $nShopAuftragsNr;
}
