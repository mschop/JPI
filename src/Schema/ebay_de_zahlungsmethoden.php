<?php

namespace App\Schema;

class ebay_de_zahlungsmethoden
{
	const TABLE_NAME = 'ebay_de_zahlungsmethoden';
	const kEbay_DE_Zahlungsmethoden = 'kEbay_DE_Zahlungsmethoden';
	const PaymentOption = 'PaymentOption';
	const Description = 'Description';
	const DisplayText = 'DisplayText';

	/** @var int kEbay_DE_Zahlungsmethoden */
	public $kEbay_DE_Zahlungsmethoden;

	/** @var string PaymentOption */
	public $PaymentOption;

	/** @var string Description */
	public $Description;

	/** @var string DisplayText */
	public $DisplayText;
}
