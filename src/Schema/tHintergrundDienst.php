<?php

namespace App\Schema;

class tHintergrundDienst
{
	const TABLE_NAME = 'tHintergrundDienst';
	const nSek = 'nSek';
	const nKeinShop = 'nKeinShop';
	const nKundenupdate = 'nKundenupdate';
	const nAktiv = 'nAktiv';
	const nReDrucken = 'nReDrucken';
	const nWebshopAuftrag = 'nWebshopAuftrag';
	const nKeinEbay = 'nKeinEbay';
	const nEbaySmall = 'nEbaySmall';
	const nEbayAuftrag = 'nEbayAuftrag';
	const nKeinAmazon = 'nKeinAmazon';
	const nAmazonAuftrag = 'nAmazonAuftrag';
	const nEbayBestand = 'nEbayBestand';
	const nWaehrung = 'nWaehrung';
	const nRepricer = 'nRepricer';
	const nRetourenErstellen = 'nRetourenErstellen';
	const nUpdateBilderBeschreibung = 'nUpdateBilderBeschreibung';
	const nKeinFulfillment = 'nKeinFulfillment';
	const nKeinZahlungsabgleich = 'nKeinZahlungsabgleich';
	const COLUMN_NAMES = [
		'nSek',
		'nKeinShop',
		'nKundenupdate',
		'nAktiv',
		'nReDrucken',
		'nWebshopAuftrag',
		'nKeinEbay',
		'nEbaySmall',
		'nEbayAuftrag',
		'nKeinAmazon',
		'nAmazonAuftrag',
		'nEbayBestand',
		'nWaehrung',
		'nRepricer',
		'nRetourenErstellen',
		'nUpdateBilderBeschreibung',
		'nKeinFulfillment',
		'nKeinZahlungsabgleich',
	];
	const COLUMN_TYPES = [
		'nSek' => 'int',
		'nKeinShop' => 'tinyint',
		'nKundenupdate' => 'tinyint',
		'nAktiv' => 'tinyint',
		'nReDrucken' => 'tinyint',
		'nWebshopAuftrag' => 'tinyint',
		'nKeinEbay' => 'tinyint',
		'nEbaySmall' => 'tinyint',
		'nEbayAuftrag' => 'tinyint',
		'nKeinAmazon' => 'tinyint',
		'nAmazonAuftrag' => 'tinyint',
		'nEbayBestand' => 'tinyint',
		'nWaehrung' => 'tinyint',
		'nRepricer' => 'tinyint',
		'nRetourenErstellen' => 'tinyint',
		'nUpdateBilderBeschreibung' => 'tinyint',
		'nKeinFulfillment' => 'tinyint',
		'nKeinZahlungsabgleich' => 'tinyint',
	];

	/** @var int nSek */
	public $nSek;

	/** @var int nKeinShop */
	public $nKeinShop;

	/** @var int nKundenupdate */
	public $nKundenupdate;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nReDrucken */
	public $nReDrucken;

	/** @var int nWebshopAuftrag */
	public $nWebshopAuftrag;

	/** @var int nKeinEbay */
	public $nKeinEbay;

	/** @var int nEbaySmall */
	public $nEbaySmall;

	/** @var int nEbayAuftrag */
	public $nEbayAuftrag;

	/** @var int nKeinAmazon */
	public $nKeinAmazon;

	/** @var int nAmazonAuftrag */
	public $nAmazonAuftrag;

	/** @var int nEbayBestand */
	public $nEbayBestand;

	/** @var int nWaehrung */
	public $nWaehrung;

	/** @var int nRepricer */
	public $nRepricer;

	/** @var int nRetourenErstellen */
	public $nRetourenErstellen;

	/** @var int nUpdateBilderBeschreibung */
	public $nUpdateBilderBeschreibung;

	/** @var int nKeinFulfillment */
	public $nKeinFulfillment;

	/** @var int nKeinZahlungsabgleich */
	public $nKeinZahlungsabgleich;
}
