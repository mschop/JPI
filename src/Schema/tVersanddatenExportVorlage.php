<?php

namespace App\Schema;

class tVersanddatenExportVorlage
{
	const TABLE_NAME = 'tVersanddatenExportVorlage';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const cName = 'cName';
	const cContentXml = 'cContentXml';
	const cFilenameTemplate = 'cFilenameTemplate';
	const nExistingFileAction = 'nExistingFileAction';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nExpertenmodus = 'nExpertenmodus';
	const cPathTemplate = 'cPathTemplate';

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cContentXml */
	public $cContentXml;

	/** @var string cFilenameTemplate */
	public $cFilenameTemplate;

	/** @var int nExistingFileAction */
	public $nExistingFileAction;

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var int nExpertenmodus */
	public $nExpertenmodus;

	/** @var string cPathTemplate */
	public $cPathTemplate;
}
