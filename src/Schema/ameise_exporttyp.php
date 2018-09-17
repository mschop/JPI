<?php

namespace App\Schema;

class ameise_exporttyp
{
	const TABLE_NAME = 'ameise_exporttyp';
	const kExportTyp = 'kExportTyp';
	const kExportTypParent = 'kExportTypParent';
	const cName = 'cName';
	const nSort = 'nSort';

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int kExportTypParent */
	public $kExportTypParent;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
