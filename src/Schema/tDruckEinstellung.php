<?php

namespace App\Schema;

class tDruckEinstellung
{
	const TABLE_NAME = 'tDruckEinstellung';
	const kDruckEinstellung = 'kDruckEinstellung';
	const kBenutzer = 'kBenutzer';
	const cArbeitsplatz = 'cArbeitsplatz';
	const kDruckvorlage = 'kDruckvorlage';
	const cDruckername1 = 'cDruckername1';
	const cDruckername2 = 'cDruckername2';

	/** @var int kDruckEinstellung */
	public $kDruckEinstellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int kDruckvorlage */
	public $kDruckvorlage;

	/** @var string cDruckername1 */
	public $cDruckername1;

	/** @var string cDruckername2 */
	public $cDruckername2;
}
