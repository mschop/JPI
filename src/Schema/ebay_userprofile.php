<?php

namespace App\Schema;

class ebay_userprofile
{
	const TABLE_NAME = 'ebay_userprofile';
	const kUserProfile = 'kUserProfile';
	const kEbayuser = 'kEbayuser';
	const SiteID = 'SiteID';
	const ProfileType = 'ProfileType';
	const ProfileID = 'ProfileID';
	const ProfileName = 'ProfileName';
	const ProfileDesc = 'ProfileDesc';
	const CategoryName = 'CategoryName';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = [
		'kUserProfile',
		'kEbayuser',
		'SiteID',
		'ProfileType',
		'ProfileID',
		'ProfileName',
		'ProfileDesc',
		'CategoryName',
		'nStandard',
	];
	const COLUMN_TYPES = [
		'kUserProfile' => 'int',
		'kEbayuser' => 'int',
		'SiteID' => 'int',
		'ProfileType' => 'varchar',
		'ProfileID' => 'varchar',
		'ProfileName' => 'varchar',
		'ProfileDesc' => 'varchar',
		'CategoryName' => 'varchar',
		'nStandard' => 'tinyint',
	];

	/** @var int kUserProfile */
	public $kUserProfile;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int SiteID */
	public $SiteID;

	/** @var string ProfileType */
	public $ProfileType;

	/** @var string ProfileID */
	public $ProfileID;

	/** @var string ProfileName */
	public $ProfileName;

	/** @var string ProfileDesc */
	public $ProfileDesc;

	/** @var string CategoryName */
	public $CategoryName;

	/** @var int nStandard */
	public $nStandard;
}
