<?php

namespace App\Schema;

class ebay_alienitem
{
	const TABLE_NAME = 'ebay_alienitem';
	const kAlienItem = 'kAlienItem';
	const Title = 'Title';
	const ItemID = 'ItemID';
	const StartTime = 'StartTime';
	const EndTime = 'EndTime';
	const ListingType = 'ListingType';
	const Quantity = 'Quantity';
	const QuantityAvailable = 'QuantityAvailable';
	const SS_BidderCount = 'SS_BidderCount';
	const SS_BidCount = 'SS_BidCount';
	const SS_CurrentPrice = 'SS_CurrentPrice';
	const SS_HighBidderUserId = 'SS_HighBidderUserId';
	const StartPrice = 'StartPrice';
	const BuyItNowPrice = 'BuyItNowPrice';
	const CurrencyID = 'CurrencyID';
	const UserID = 'UserID';
	const Status = 'Status';
	const kEbayuser = 'kEbayuser';
	const SKU = 'SKU';
	const VATPercent = 'VATPercent';
	const COLUMN_NAMES = [
		'kAlienItem',
		'Title',
		'ItemID',
		'StartTime',
		'EndTime',
		'ListingType',
		'Quantity',
		'QuantityAvailable',
		'SS_BidderCount',
		'SS_BidCount',
		'SS_CurrentPrice',
		'SS_HighBidderUserId',
		'StartPrice',
		'BuyItNowPrice',
		'CurrencyID',
		'UserID',
		'Status',
		'kEbayuser',
		'SKU',
		'VATPercent',
	];
	const COLUMN_TYPES = [
		'kAlienItem' => 'int',
		'Title' => 'varchar',
		'ItemID' => 'varchar',
		'StartTime' => 'datetime',
		'EndTime' => 'datetime',
		'ListingType' => 'varchar',
		'Quantity' => 'int',
		'QuantityAvailable' => 'int',
		'SS_BidderCount' => 'int',
		'SS_BidCount' => 'int',
		'SS_CurrentPrice' => 'decimal',
		'SS_HighBidderUserId' => 'varchar',
		'StartPrice' => 'decimal',
		'BuyItNowPrice' => 'decimal',
		'CurrencyID' => 'varchar',
		'UserID' => 'varchar',
		'Status' => 'tinyint',
		'kEbayuser' => 'int',
		'SKU' => 'varchar',
		'VATPercent' => 'decimal',
	];

	/** @var int kAlienItem */
	public $kAlienItem;

	/** @var string Title */
	public $Title;

	/** @var string ItemID */
	public $ItemID;

	/** @var string StartTime */
	public $StartTime;

	/** @var string EndTime */
	public $EndTime;

	/** @var string ListingType */
	public $ListingType;

	/** @var int Quantity */
	public $Quantity;

	/** @var int QuantityAvailable */
	public $QuantityAvailable;

	/** @var int SS_BidderCount */
	public $SS_BidderCount;

	/** @var int SS_BidCount */
	public $SS_BidCount;

	/** @var string SS_CurrentPrice */
	public $SS_CurrentPrice;

	/** @var string SS_HighBidderUserId */
	public $SS_HighBidderUserId;

	/** @var string StartPrice */
	public $StartPrice;

	/** @var string BuyItNowPrice */
	public $BuyItNowPrice;

	/** @var string CurrencyID */
	public $CurrencyID;

	/** @var string UserID */
	public $UserID;

	/** @var int Status */
	public $Status;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string SKU */
	public $SKU;

	/** @var string VATPercent */
	public $VATPercent;
}
