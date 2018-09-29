<?php

namespace App\Db\Schema;

class tArtikelEinkaufsliste
{
	const TABLE_NAME = 'tArtikelEinkaufsliste';
	const kArtikel = 'kArtikel';
	const kBenutzer = 'kBenutzer';
	const dErstellt = 'dErstellt';
	const cStatus = 'cStatus';
	const fAnzahl = 'fAnzahl';
	const kLieferant = 'kLieferant';
	const fEKNettoLieferant = 'fEKNettoLieferant';
	const cHinweis = 'cHinweis';
	const cBestellmodus = 'cBestellmodus';
	const COLUMN_NAMES = [
		'kArtikel',
		'kBenutzer',
		'dErstellt',
		'cStatus',
		'fAnzahl',
		'kLieferant',
		'fEKNettoLieferant',
		'cHinweis',
		'cBestellmodus',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fEKNettoLieferant' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBestellmodus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cStatus */
	public $cStatus;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string fEKNettoLieferant */
	public $fEKNettoLieferant;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string cBestellmodus */
	public $cBestellmodus;
}
