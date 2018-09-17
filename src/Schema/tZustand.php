<?php

namespace App\Schema;

class tZustand
{
	const TABLE_NAME = 'tZustand';
	const kZustand = 'kZustand';
	const cSuffix = 'cSuffix';
	const nAktiv = 'nAktiv';
	const cColor = 'cColor';
	const nTyp = 'nTyp';
	const nEinschraenkung = 'nEinschraenkung';
	const nCode = 'nCode';
	const nEbayCode = 'nEbayCode';
	const nAmazonCode = 'nAmazonCode';
	const nSort = 'nSort';
	const nLieferantenEntfernen = 'nLieferantenEntfernen';

	/** @var int kZustand */
	public $kZustand;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cColor */
	public $cColor;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nEinschraenkung */
	public $nEinschraenkung;

	/** @var int nCode */
	public $nCode;

	/** @var int nEbayCode */
	public $nEbayCode;

	/** @var int nAmazonCode */
	public $nAmazonCode;

	/** @var int nSort */
	public $nSort;

	/** @var int nLieferantenEntfernen */
	public $nLieferantenEntfernen;
}
