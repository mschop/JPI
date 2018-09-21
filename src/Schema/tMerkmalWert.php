<?php

namespace App\Schema;

class tMerkmalWert
{
	const TABLE_NAME = 'tMerkmalWert';
	const kMerkmalWert = 'kMerkmalWert';
	const kMerkmal = 'kMerkmal';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kMerkmalWert', 'kMerkmal', 'nSort'];
	const COLUMN_TYPES = ['kMerkmalWert' => 'int', 'kMerkmal' => 'int', 'nSort' => 'int'];

	/** @var int kMerkmalWert */
	public $kMerkmalWert;

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int nSort */
	public $nSort;
}
