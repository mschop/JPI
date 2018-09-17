<?php

namespace App\Schema;

class tWarenLagerPlatz
{
	const TABLE_NAME = 'tWarenLagerPlatz';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenLager = 'kWarenLager';
	const fGewichtMax = 'fGewichtMax';
	const cKommentar = 'cKommentar';
	const fLaenge = 'fLaenge';
	const fBreite = 'fBreite';
	const fHoehe = 'fHoehe';
	const nSort = 'nSort';
	const cName = 'cName';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const nStatus = 'nStatus';
	const dWmsInventurDatum = 'dWmsInventurDatum';
	const kWmsInventur = 'kWmsInventur';
	const nPreInvStatus = 'nPreInvStatus';
	const nInvGezaehlt = 'nInvGezaehlt';
	const nGesperrt = 'nGesperrt';
	const nPrio = 'nPrio';

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var string fGewichtMax */
	public $fGewichtMax;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string fLaenge */
	public $fLaenge;

	/** @var string fBreite */
	public $fBreite;

	/** @var string fHoehe */
	public $fHoehe;

	/** @var int nSort */
	public $nSort;

	/** @var string cName */
	public $cName;

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dWmsInventurDatum */
	public $dWmsInventurDatum;

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var int nPreInvStatus */
	public $nPreInvStatus;

	/** @var int nInvGezaehlt */
	public $nInvGezaehlt;

	/** @var int nGesperrt */
	public $nGesperrt;

	/** @var int nPrio */
	public $nPrio;
}
