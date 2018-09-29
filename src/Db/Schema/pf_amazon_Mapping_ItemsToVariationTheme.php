<?php

namespace App\Db\Schema;

class pf_amazon_Mapping_ItemsToVariationTheme
{
	const TABLE_NAME = 'pf_amazon_Mapping_ItemsToVariationTheme';
	const kMapping_ItemsToVariationTheme = 'kMapping_ItemsToVariationTheme';
	const kMapping_VariationThemes = 'kMapping_VariationThemes';
	const kMapping_AmazonVariationen = 'kMapping_AmazonVariationen';
	const COLUMN_NAMES = ['kMapping_ItemsToVariationTheme', 'kMapping_VariationThemes', 'kMapping_AmazonVariationen'];
	const COLUMN_DEFINITIONS = [
		'kMapping_ItemsToVariationTheme' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMapping_VariationThemes' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMapping_AmazonVariationen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMapping_ItemsToVariationTheme */
	public $kMapping_ItemsToVariationTheme;

	/** @var int kMapping_VariationThemes */
	public $kMapping_VariationThemes;

	/** @var int kMapping_AmazonVariationen */
	public $kMapping_AmazonVariationen;
}
