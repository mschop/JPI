<?php

namespace App\Schema;

class tMDELog
{
	const TABLE_NAME = 'tMDELog';
	const kMDELog = 'kMDELog';
	const nLogID = 'nLogID';
	const dDatum = 'dDatum';
	const kBenutzer = 'kBenutzer';
	const cLog = 'cLog';
	const cView = 'cView';
	const nTime = 'nTime';
	const nLogLevel = 'nLogLevel';
	const cSessionId = 'cSessionId';
	const cServer = 'cServer';

	/** @var int kMDELog */
	public $kMDELog;

	/** @var int nLogID */
	public $nLogID;

	/** @var string dDatum */
	public $dDatum;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLog */
	public $cLog;

	/** @var string cView */
	public $cView;

	/** @var int nTime */
	public $nTime;

	/** @var int nLogLevel */
	public $nLogLevel;

	/** @var string cSessionId */
	public $cSessionId;

	/** @var string cServer */
	public $cServer;
}
