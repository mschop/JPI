<?php

namespace App\Schema;

class ebay_xx_sites
{
	const TABLE_NAME = 'ebay_xx_sites';
	const SiteID = 'SiteID';
	const cAbbreviation = 'cAbbreviation';
	const cName = 'cName';
	const cSiteCodeType = 'cSiteCodeType';
	const cSprachISO = 'cSprachISO';
	const cLandISO = 'cLandISO';
	const dLastUpdate = 'dLastUpdate';
	const nVersion = 'nVersion';
	const www = 'www';
	const kPlattform = 'kPlattform';
	const cWaehrungISO = 'cWaehrungISO';
	const COLUMN_NAMES = [
		'SiteID',
		'cAbbreviation',
		'cName',
		'cSiteCodeType',
		'cSprachISO',
		'cLandISO',
		'dLastUpdate',
		'nVersion',
		'www',
		'kPlattform',
		'cWaehrungISO',
	];
	const COLUMN_TYPES = [
		'SiteID' => 'int',
		'cAbbreviation' => 'varchar',
		'cName' => 'varchar',
		'cSiteCodeType' => 'varchar',
		'cSprachISO' => 'varchar',
		'cLandISO' => 'varchar',
		'dLastUpdate' => 'datetime',
		'nVersion' => 'int',
		'www' => 'varchar',
		'kPlattform' => 'int',
		'cWaehrungISO' => 'varchar',
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cAbbreviation */
	public $cAbbreviation;

	/** @var string cName */
	public $cName;

	/** @var string cSiteCodeType */
	public $cSiteCodeType;

	/** @var string cSprachISO */
	public $cSprachISO;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string dLastUpdate */
	public $dLastUpdate;

	/** @var int nVersion */
	public $nVersion;

	/** @var string www */
	public $www;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;
}
