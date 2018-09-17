<?php

namespace App\Schema;

class tStatistikVorlage
{
	const TABLE_NAME = 'tStatistikVorlage';
	const kStatistikVorlage = 'kStatistikVorlage';
	const kStatistikAuswertungstyp = 'kStatistikAuswertungstyp';
	const kStatistikVorlageOrdner = 'kStatistikVorlageOrdner';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cSpaltennameX = 'cSpaltennameX';
	const cSpaltennameSeries = 'cSpaltennameSeries';
	const cSQL = 'cSQL';
	const cZeitraum = 'cZeitraum';
	const nSort = 'nSort';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var int kStatistikAuswertungstyp */
	public $kStatistikAuswertungstyp;

	/** @var int kStatistikVorlageOrdner */
	public $kStatistikVorlageOrdner;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cSpaltennameX */
	public $cSpaltennameX;

	/** @var string cSpaltennameSeries */
	public $cSpaltennameSeries;

	/** @var string cSQL */
	public $cSQL;

	/** @var string cZeitraum */
	public $cZeitraum;

	/** @var int nSort */
	public $nSort;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
