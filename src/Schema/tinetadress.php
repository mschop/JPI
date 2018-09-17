<?php

namespace App\Schema;

class tinetadress
{
	const TABLE_NAME = 'tinetadress';
	const kInetAdress = 'kInetAdress';
	const kKunde = 'kKunde';
	const cVorname = 'cVorname';
	const cNachname = 'cNachname';
	const cFirma = 'cFirma';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cStadt = 'cStadt';
	const cLand = 'cLand';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMail = 'cMail';
	const cAnrede = 'cAnrede';
	const cAdressZusatz = 'cAdressZusatz';
	const kShop = 'kShop';
	const cMobil = 'cMobil';
	const cTitel = 'cTitel';
	const cZusatz = 'cZusatz';
	const cBundesland = 'cBundesland';

	/** @var int kInetAdress */
	public $kInetAdress;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cNachname */
	public $cNachname;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cStadt */
	public $cStadt;

	/** @var string cLand */
	public $cLand;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMail */
	public $cMail;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cAdressZusatz */
	public $cAdressZusatz;

	/** @var int kShop */
	public $kShop;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cZusatz */
	public $cZusatz;

	/** @var string cBundesland */
	public $cBundesland;
}
