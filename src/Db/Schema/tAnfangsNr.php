<?php

namespace App\Db\Schema;

class tAnfangsNr
{
	const TABLE_NAME = 'tAnfangsNr';
	const sRPre = 'sRPre';
	const sRPost = 'sRPost';
	const sGPre = 'sGPre';
	const sGPost = 'sGPost';
	const sAPre = 'sAPre';
	const sAPost = 'sAPost';
	const sAnPre = 'sAnPre';
	const sAnPost = 'sAnPost';
	const sArtPre = 'sArtPre';
	const sArtPost = 'sArtPost';
	const sKPre = 'sKPre';
	const sKPost = 'sKPost';
	const sBPre = 'sBPre';
	const sBPost = 'sBPost';
	const sPPre = 'sPPre';
	const sPPost = 'sPPost';
	const COLUMN_NAMES = [
		'sRPre',
		'sRPost',
		'sGPre',
		'sGPost',
		'sAPre',
		'sAPost',
		'sAnPre',
		'sAnPost',
		'sArtPre',
		'sArtPost',
		'sKPre',
		'sKPost',
		'sBPre',
		'sBPost',
		'sPPre',
		'sPPost',
	];
	const COLUMN_DEFINITIONS = [
		'sRPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sRPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sGPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sGPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sAPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sAPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sAnPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sAnPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sArtPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sArtPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sKPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sKPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sBPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sBPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sPPre' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'sPPost' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string sRPre */
	public $sRPre;

	/** @var string sRPost */
	public $sRPost;

	/** @var string sGPre */
	public $sGPre;

	/** @var string sGPost */
	public $sGPost;

	/** @var string sAPre */
	public $sAPre;

	/** @var string sAPost */
	public $sAPost;

	/** @var string sAnPre */
	public $sAnPre;

	/** @var string sAnPost */
	public $sAnPost;

	/** @var string sArtPre */
	public $sArtPre;

	/** @var string sArtPost */
	public $sArtPost;

	/** @var string sKPre */
	public $sKPre;

	/** @var string sKPost */
	public $sKPost;

	/** @var string sBPre */
	public $sBPre;

	/** @var string sBPost */
	public $sBPost;

	/** @var string sPPre */
	public $sPPre;

	/** @var string sPPost */
	public $sPPost;
}
