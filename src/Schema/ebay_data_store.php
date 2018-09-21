<?php

namespace App\Schema;

class ebay_data_store
{
	const TABLE_NAME = 'ebay_data_store';
	const kStore = 'kStore';
	const kEbayUser = 'kEbayUser';
	const Name = 'Name';
	const SubscriptionLevel = 'SubscriptionLevel';
	const URL = 'URL';
	const COLUMN_NAMES = ['kStore', 'kEbayUser', 'Name', 'SubscriptionLevel', 'URL'];
	const COLUMN_TYPES = [
		'kStore' => 'int',
		'kEbayUser' => 'int',
		'Name' => 'varchar',
		'SubscriptionLevel' => 'varchar',
		'URL' => 'varchar',
	];

	/** @var int kStore */
	public $kStore;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string Name */
	public $Name;

	/** @var string SubscriptionLevel */
	public $SubscriptionLevel;

	/** @var string URL */
	public $URL;
}
