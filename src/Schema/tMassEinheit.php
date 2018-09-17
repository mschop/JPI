<?php

namespace App\Schema;

class tMassEinheit
{
	const TABLE_NAME = 'tMassEinheit';
	const kMassEinheit = 'kMassEinheit';
	const cCode = 'cCode';
	const cDisplayCode = 'cDisplayCode';
	const kBezugsMassEinheit = 'kBezugsMassEinheit';
	const fBezugsMassEinheitFaktor = 'fBezugsMassEinheitFaktor';

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var string cCode */
	public $cCode;

	/** @var string cDisplayCode */
	public $cDisplayCode;

	/** @var int kBezugsMassEinheit */
	public $kBezugsMassEinheit;

	/** @var string fBezugsMassEinheitFaktor */
	public $fBezugsMassEinheitFaktor;
}
