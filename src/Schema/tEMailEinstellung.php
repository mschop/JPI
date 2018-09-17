<?php

namespace App\Schema;

class tEMailEinstellung
{
	const TABLE_NAME = 'tEMailEinstellung';
	const kEMailEinstellungen = 'kEMailEinstellungen';
	const kFirma = 'kFirma';
	const cServerSMTP = 'cServerSMTP';
	const nPortSMTP = 'nPortSMTP';
	const cNutzernameSMTP = 'cNutzernameSMTP';
	const cPasswortSMTP = 'cPasswortSMTP';
	const cAbsender = 'cAbsender';
	const cBCC = 'cBCC';
	const nSecurity = 'nSecurity';
	const nSigPortalAktiv = 'nSigPortalAktiv';
	const cSigPortalKdNummer = 'cSigPortalKdNummer';
	const cSigPortalNutzername = 'cSigPortalNutzername';
	const cSigPortalPasswort = 'cSigPortalPasswort';
	const nSigPortalVerifizierung = 'nSigPortalVerifizierung';
	const cSigPortalPfad = 'cSigPortalPfad';
	const nSigBefehlAktiv = 'nSigBefehlAktiv';
	const cSigBefehlDateiname = 'cSigBefehlDateiname';
	const cSigBefehlParameter = 'cSigBefehlParameter';
	const nSMIMEAktiv = 'nSMIMEAktiv';
	const cSMIMEPasswort = 'cSMIMEPasswort';
	const bSMIMEZertifikatData = 'bSMIMEZertifikatData';

	/** @var int kEMailEinstellungen */
	public $kEMailEinstellungen;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cServerSMTP */
	public $cServerSMTP;

	/** @var int nPortSMTP */
	public $nPortSMTP;

	/** @var string cNutzernameSMTP */
	public $cNutzernameSMTP;

	/** @var string cPasswortSMTP */
	public $cPasswortSMTP;

	/** @var string cAbsender */
	public $cAbsender;

	/** @var string cBCC */
	public $cBCC;

	/** @var int nSecurity */
	public $nSecurity;

	/** @var int nSigPortalAktiv */
	public $nSigPortalAktiv;

	/** @var string cSigPortalKdNummer */
	public $cSigPortalKdNummer;

	/** @var string cSigPortalNutzername */
	public $cSigPortalNutzername;

	/** @var string cSigPortalPasswort */
	public $cSigPortalPasswort;

	/** @var int nSigPortalVerifizierung */
	public $nSigPortalVerifizierung;

	/** @var string cSigPortalPfad */
	public $cSigPortalPfad;

	/** @var int nSigBefehlAktiv */
	public $nSigBefehlAktiv;

	/** @var string cSigBefehlDateiname */
	public $cSigBefehlDateiname;

	/** @var string cSigBefehlParameter */
	public $cSigBefehlParameter;

	/** @var int nSMIMEAktiv */
	public $nSMIMEAktiv;

	/** @var string cSMIMEPasswort */
	public $cSMIMEPasswort;

	/** @var resource bSMIMEZertifikatData */
	public $bSMIMEZertifikatData;
}
