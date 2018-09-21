<?php

namespace App\Schema;

class tKundenGruppeSprache
{
	const TABLE_NAME = 'tKundenGruppeSprache';
	const kKundenGruppe = 'kKundenGruppe';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenGruppe', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kKundenGruppe' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
