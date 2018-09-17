<?php

namespace App\Schema;

class tArtikelbildPlattform
{
	const TABLE_NAME = 'tArtikelbildPlattform';
	const kArtikelbildPlattform = 'kArtikelbildPlattform';
	const kBild = 'kBild';
	const kArtikel = 'kArtikel';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nNr = 'nNr';
	const nInet = 'nInet';
	const kEbayUser = 'kEbayUser';
	const cBildname = 'cBildname';

	/** @var int kArtikelbildPlattform */
	public $kArtikelbildPlattform;

	/** @var int kBild */
	public $kBild;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nNr */
	public $nNr;

	/** @var int nInet */
	public $nInet;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cBildname */
	public $cBildname;
}
