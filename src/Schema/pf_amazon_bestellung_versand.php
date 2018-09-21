<?php

namespace App\Schema;

class pf_amazon_bestellung_versand
{
	const TABLE_NAME = 'pf_amazon_bestellung_versand';
	const kAmazonBestellungVersand = 'kAmazonBestellungVersand';
	const kAmazonBestellungPos = 'kAmazonBestellungPos';
	const kLieferschein = 'kLieferschein';
	const nQuantity = 'nQuantity';
	const kBenutzer = 'kBenutzer';
	const cCarrierCode = 'cCarrierCode';
	const cCarrierName = 'cCarrierName';
	const cTrackingNumber = 'cTrackingNumber';
	const cShipMethod = 'cShipMethod';
	const dShipDate = 'dShipDate';
	const dBearbeitet = 'dBearbeitet';
	const COLUMN_NAMES = [
		'kAmazonBestellungVersand',
		'kAmazonBestellungPos',
		'kLieferschein',
		'nQuantity',
		'kBenutzer',
		'cCarrierCode',
		'cCarrierName',
		'cTrackingNumber',
		'cShipMethod',
		'dShipDate',
		'dBearbeitet',
	];
	const COLUMN_TYPES = [
		'kAmazonBestellungVersand' => 'int',
		'kAmazonBestellungPos' => 'int',
		'kLieferschein' => 'int',
		'nQuantity' => 'int',
		'kBenutzer' => 'int',
		'cCarrierCode' => 'varchar',
		'cCarrierName' => 'varchar',
		'cTrackingNumber' => 'varchar',
		'cShipMethod' => 'varchar',
		'dShipDate' => 'datetime',
		'dBearbeitet' => 'datetime',
	];

	/** @var int kAmazonBestellungVersand */
	public $kAmazonBestellungVersand;

	/** @var int kAmazonBestellungPos */
	public $kAmazonBestellungPos;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cCarrierCode */
	public $cCarrierCode;

	/** @var string cCarrierName */
	public $cCarrierName;

	/** @var string cTrackingNumber */
	public $cTrackingNumber;

	/** @var string cShipMethod */
	public $cShipMethod;

	/** @var string dShipDate */
	public $dShipDate;

	/** @var string dBearbeitet */
	public $dBearbeitet;
}
