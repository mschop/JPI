<?php

namespace App\Schema;

class tLieferantenBestellung
{
	const TABLE_NAME = 'tLieferantenBestellung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kLieferant = 'kLieferant';
	const kSprache = 'kSprache';
	const kLieferantenBestellungRA = 'kLieferantenBestellungRA';
	const kLieferantenBestellungLA = 'kLieferantenBestellungLA';
	const cWaehrungISO = 'cWaehrungISO';
	const cInternerKommentar = 'cInternerKommentar';
	const cDruckAnmerkung = 'cDruckAnmerkung';
	const dGedruckt = 'dGedruckt';
	const dGemailt = 'dGemailt';
	const dGefaxt = 'dGefaxt';
	const nStatus = 'nStatus';
	const dErstellt = 'dErstellt';
	const kFirma = 'kFirma';
	const kLager = 'kLager';
	const kKunde = 'kKunde';
	const dLieferdatum = 'dLieferdatum';
	const cEigeneBestellnummer = 'cEigeneBestellnummer';
	const cBezugsAuftragsNummer = 'cBezugsAuftragsNummer';
	const nDropShipping = 'nDropShipping';
	const kLieferantenBestellungLieferant = 'kLieferantenBestellungLieferant';
	const kBenutzer = 'kBenutzer';
	const fFaktor = 'fFaktor';
	const dAngemahnt = 'dAngemahnt';
	const dInBearbeitung = 'dInBearbeitung';
	const nDeleted = 'nDeleted';
	const nManuellAbgeschlossen = 'nManuellAbgeschlossen';
	const cFremdbelegnummer = 'cFremdbelegnummer';
	const kLieferschein = 'kLieferschein';
	const nBestaetigt = 'nBestaetigt';
	const dExportiert = 'dExportiert';

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kLieferantenBestellungRA */
	public $kLieferantenBestellungRA;

	/** @var int kLieferantenBestellungLA */
	public $kLieferantenBestellungLA;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;

	/** @var string cInternerKommentar */
	public $cInternerKommentar;

	/** @var string cDruckAnmerkung */
	public $cDruckAnmerkung;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var string dGemailt */
	public $dGemailt;

	/** @var string dGefaxt */
	public $dGefaxt;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kLager */
	public $kLager;

	/** @var int kKunde */
	public $kKunde;

	/** @var string dLieferdatum */
	public $dLieferdatum;

	/** @var string cEigeneBestellnummer */
	public $cEigeneBestellnummer;

	/** @var string cBezugsAuftragsNummer */
	public $cBezugsAuftragsNummer;

	/** @var int nDropShipping */
	public $nDropShipping;

	/** @var int kLieferantenBestellungLieferant */
	public $kLieferantenBestellungLieferant;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string dAngemahnt */
	public $dAngemahnt;

	/** @var string dInBearbeitung */
	public $dInBearbeitung;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var int nManuellAbgeschlossen */
	public $nManuellAbgeschlossen;

	/** @var string cFremdbelegnummer */
	public $cFremdbelegnummer;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int nBestaetigt */
	public $nBestaetigt;

	/** @var string dExportiert */
	public $dExportiert;
}
