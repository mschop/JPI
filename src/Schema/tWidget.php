<?php

namespace App\Schema;

class tWidget
{
	const TABLE_NAME = 'tWidget';
	const kWidget = 'kWidget';
	const kWidgetTemplate = 'kWidgetTemplate';
	const kBenutzer = 'kBenutzer';
	const cTitel = 'cTitel';
	const cArbeitsplatz = 'cArbeitsplatz';
	const nApplikation = 'nApplikation';
	const COLUMN_NAMES = ['kWidget', 'kWidgetTemplate', 'kBenutzer', 'cTitel', 'cArbeitsplatz', 'nApplikation'];
	const COLUMN_TYPES = [
		'kWidget' => 'int',
		'kWidgetTemplate' => 'int',
		'kBenutzer' => 'int',
		'cTitel' => 'varchar',
		'cArbeitsplatz' => 'varchar',
		'nApplikation' => 'int',
	];

	/** @var int kWidget */
	public $kWidget;

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int nApplikation */
	public $nApplikation;
}
