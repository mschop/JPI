<?php

namespace App\Schema;

class tArtikelBeschreibung
{
	const TABLE_NAME = 'tArtikelBeschreibung';
	const kArtikel = 'kArtikel';
	const kSprache = 'kSprache';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const cKurzBeschreibung = 'cKurzBeschreibung';
	const cUrlPfad = 'cUrlPfad';
	const cMetaDescription = 'cMetaDescription';
	const cTitleTag = 'cTitleTag';
	const cMetaKeywords = 'cMetaKeywords';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cKurzBeschreibung */
	public $cKurzBeschreibung;

	/** @var string cUrlPfad */
	public $cUrlPfad;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cTitleTag */
	public $cTitleTag;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;
}
