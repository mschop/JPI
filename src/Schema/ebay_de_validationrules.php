<?php

namespace App\Schema;

class ebay_de_validationrules
{
	const TABLE_NAME = 'ebay_de_validationrules';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const Name = 'Name';
	const PeerAttributeId = 'PeerAttributeId';
	const cSeparator = 'cSeparator';
	const fMin = 'fMin';
	const fMax = 'fMax';
	const Mask = 'Mask';
	const Precistion = 'Precistion';
	const Regex = 'Regex';
	const nLength = 'nLength';

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var string Name */
	public $Name;

	/** @var int PeerAttributeId */
	public $PeerAttributeId;

	/** @var string cSeparator */
	public $cSeparator;

	/** @var string fMin */
	public $fMin;

	/** @var string fMax */
	public $fMax;

	/** @var string Mask */
	public $Mask;

	/** @var int Precistion */
	public $Precistion;

	/** @var string Regex */
	public $Regex;

	/** @var int nLength */
	public $nLength;
}
