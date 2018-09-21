<?php

namespace App\Schema;

class pf_amazon_vcs_history
{
	const TABLE_NAME = 'pf_amazon_vcs_history';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const MarketplaceID = 'MarketplaceID';
	const MerchantID = 'MerchantID';
	const OrderDate = 'OrderDate';
	const TransactionType = 'TransactionType';
	const OrderID = 'OrderID';
	const ShipmentDate = 'ShipmentDate';
	const ShipmentID = 'ShipmentID';
	const TransactionID = 'TransactionID';
	const ASIN = 'ASIN';
	const SKU = 'SKU';
	const Quantity = 'Quantity';
	const TaxCalculationDate = 'TaxCalculationDate';
	const TaxRate = 'TaxRate';
	const ProductTaxCode = 'ProductTaxCode';
	const Currency = 'Currency';
	const TaxType = 'TaxType';
	const TaxCalculationReasonCode = 'TaxCalculationReasonCode';
	const TaxAddressRole = 'TaxAddressRole';
	const JurisdictionLevel = 'JurisdictionLevel';
	const JurisdictionName = 'JurisdictionName';
	const OUR_PRICETaxInclusiveSellingPrice = 'OUR_PRICETaxInclusiveSellingPrice';
	const OUR_PRICETaxAmount = 'OUR_PRICETaxAmount';
	const OUR_PRICETaxExclusiveSellingPrice = 'OUR_PRICETaxExclusiveSellingPrice';
	const OUR_PRICETaxInclusivePromoAmount = 'OUR_PRICETaxInclusivePromoAmount';
	const OUR_PRICETaxAmountPromo = 'OUR_PRICETaxAmountPromo';
	const OUR_PRICETaxExclusivePromoAmount = 'OUR_PRICETaxExclusivePromoAmount';
	const SHIPPINGTaxInclusiveSellingPrice = 'SHIPPINGTaxInclusiveSellingPrice';
	const SHIPPINGTaxAmount = 'SHIPPINGTaxAmount';
	const SHIPPINGTaxExclusiveSellingPrice = 'SHIPPINGTaxExclusiveSellingPrice';
	const SHIPPINGTaxInclusivePromoAmount = 'SHIPPINGTaxInclusivePromoAmount';
	const SHIPPINGTaxAmountPromo = 'SHIPPINGTaxAmountPromo';
	const SHIPPINGTaxExclusivePromoAmount = 'SHIPPINGTaxExclusivePromoAmount';
	const GIFTWRAPTaxInclusiveSellingPrice = 'GIFTWRAPTaxInclusiveSellingPrice';
	const GIFTWRAPTaxAmount = 'GIFTWRAPTaxAmount';
	const GIFTWRAPTaxExclusiveSellingPrice = 'GIFTWRAPTaxExclusiveSellingPrice';
	const GIFTWRAPTaxInclusivePromoAmount = 'GIFTWRAPTaxInclusivePromoAmount';
	const GIFTWRAPTaxAmountPromo = 'GIFTWRAPTaxAmountPromo';
	const GIFTWRAPTaxExclusivePromoAmount = 'GIFTWRAPTaxExclusivePromoAmount';
	const SellerTaxRegistration = 'SellerTaxRegistration';
	const SellerTaxRegistrationJurisdiction = 'SellerTaxRegistrationJurisdiction';
	const BuyerTaxRegistration = 'BuyerTaxRegistration';
	const BuyerTaxRegistrationJurisdiction = 'BuyerTaxRegistrationJurisdiction';
	const InvoiceLevelCurrencyCode = 'InvoiceLevelCurrencyCode';
	const InvoiceLevelExchangeRate = 'InvoiceLevelExchangeRate';
	const InvoiceLevelExchangeRateDate = 'InvoiceLevelExchangeRateDate';
	const ConvertedTaxAmount = 'ConvertedTaxAmount';
	const VATInvoiceNumber = 'VATInvoiceNumber';
	const InvoiceUrl = 'InvoiceUrl';
	const ExportOutsideEU = 'ExportOutsideEU';
	const ShipFromCity = 'ShipFromCity';
	const ShipFromState = 'ShipFromState';
	const ShipFromCountry = 'ShipFromCountry';
	const ShipFromPostalCode = 'ShipFromPostalCode';
	const ShipFromTaxLocationCode = 'ShipFromTaxLocationCode';
	const ShipToCity = 'ShipToCity';
	const ShipToState = 'ShipToState';
	const ShipToCountry = 'ShipToCountry';
	const ShipToPostalCode = 'ShipToPostalCode';
	const ShipToLocationCode = 'ShipToLocationCode';
	const ReturnFcCountry = 'ReturnFcCountry';
	const COLUMN_NAMES = [
		'kMessageId',
		'kUser',
		'MarketplaceID',
		'MerchantID',
		'OrderDate',
		'TransactionType',
		'OrderID',
		'ShipmentDate',
		'ShipmentID',
		'TransactionID',
		'ASIN',
		'SKU',
		'Quantity',
		'TaxCalculationDate',
		'TaxRate',
		'ProductTaxCode',
		'Currency',
		'TaxType',
		'TaxCalculationReasonCode',
		'TaxAddressRole',
		'JurisdictionLevel',
		'JurisdictionName',
		'OUR_PRICETaxInclusiveSellingPrice',
		'OUR_PRICETaxAmount',
		'OUR_PRICETaxExclusiveSellingPrice',
		'OUR_PRICETaxInclusivePromoAmount',
		'OUR_PRICETaxAmountPromo',
		'OUR_PRICETaxExclusivePromoAmount',
		'SHIPPINGTaxInclusiveSellingPrice',
		'SHIPPINGTaxAmount',
		'SHIPPINGTaxExclusiveSellingPrice',
		'SHIPPINGTaxInclusivePromoAmount',
		'SHIPPINGTaxAmountPromo',
		'SHIPPINGTaxExclusivePromoAmount',
		'GIFTWRAPTaxInclusiveSellingPrice',
		'GIFTWRAPTaxAmount',
		'GIFTWRAPTaxExclusiveSellingPrice',
		'GIFTWRAPTaxInclusivePromoAmount',
		'GIFTWRAPTaxAmountPromo',
		'GIFTWRAPTaxExclusivePromoAmount',
		'SellerTaxRegistration',
		'SellerTaxRegistrationJurisdiction',
		'BuyerTaxRegistration',
		'BuyerTaxRegistrationJurisdiction',
		'InvoiceLevelCurrencyCode',
		'InvoiceLevelExchangeRate',
		'InvoiceLevelExchangeRateDate',
		'ConvertedTaxAmount',
		'VATInvoiceNumber',
		'InvoiceUrl',
		'ExportOutsideEU',
		'ShipFromCity',
		'ShipFromState',
		'ShipFromCountry',
		'ShipFromPostalCode',
		'ShipFromTaxLocationCode',
		'ShipToCity',
		'ShipToState',
		'ShipToCountry',
		'ShipToPostalCode',
		'ShipToLocationCode',
		'ReturnFcCountry',
	];
	const COLUMN_TYPES = [
		'kMessageId' => 'int',
		'kUser' => 'int',
		'MarketplaceID' => 'varchar',
		'MerchantID' => 'varchar',
		'OrderDate' => 'datetime',
		'TransactionType' => 'varchar',
		'OrderID' => 'varchar',
		'ShipmentDate' => 'datetime',
		'ShipmentID' => 'varchar',
		'TransactionID' => 'varchar',
		'ASIN' => 'varchar',
		'SKU' => 'varchar',
		'Quantity' => 'int',
		'TaxCalculationDate' => 'datetime',
		'TaxRate' => 'decimal',
		'ProductTaxCode' => 'varchar',
		'Currency' => 'varchar',
		'TaxType' => 'varchar',
		'TaxCalculationReasonCode' => 'varchar',
		'TaxAddressRole' => 'varchar',
		'JurisdictionLevel' => 'varchar',
		'JurisdictionName' => 'varchar',
		'OUR_PRICETaxInclusiveSellingPrice' => 'decimal',
		'OUR_PRICETaxAmount' => 'decimal',
		'OUR_PRICETaxExclusiveSellingPrice' => 'decimal',
		'OUR_PRICETaxInclusivePromoAmount' => 'decimal',
		'OUR_PRICETaxAmountPromo' => 'decimal',
		'OUR_PRICETaxExclusivePromoAmount' => 'decimal',
		'SHIPPINGTaxInclusiveSellingPrice' => 'decimal',
		'SHIPPINGTaxAmount' => 'decimal',
		'SHIPPINGTaxExclusiveSellingPrice' => 'decimal',
		'SHIPPINGTaxInclusivePromoAmount' => 'decimal',
		'SHIPPINGTaxAmountPromo' => 'decimal',
		'SHIPPINGTaxExclusivePromoAmount' => 'decimal',
		'GIFTWRAPTaxInclusiveSellingPrice' => 'decimal',
		'GIFTWRAPTaxAmount' => 'decimal',
		'GIFTWRAPTaxExclusiveSellingPrice' => 'decimal',
		'GIFTWRAPTaxInclusivePromoAmount' => 'decimal',
		'GIFTWRAPTaxAmountPromo' => 'decimal',
		'GIFTWRAPTaxExclusivePromoAmount' => 'decimal',
		'SellerTaxRegistration' => 'varchar',
		'SellerTaxRegistrationJurisdiction' => 'varchar',
		'BuyerTaxRegistration' => 'varchar',
		'BuyerTaxRegistrationJurisdiction' => 'varchar',
		'InvoiceLevelCurrencyCode' => 'varchar',
		'InvoiceLevelExchangeRate' => 'decimal',
		'InvoiceLevelExchangeRateDate' => 'datetime',
		'ConvertedTaxAmount' => 'decimal',
		'VATInvoiceNumber' => 'varchar',
		'InvoiceUrl' => 'varchar',
		'ExportOutsideEU' => 'varchar',
		'ShipFromCity' => 'varchar',
		'ShipFromState' => 'varchar',
		'ShipFromCountry' => 'varchar',
		'ShipFromPostalCode' => 'varchar',
		'ShipFromTaxLocationCode' => 'varchar',
		'ShipToCity' => 'varchar',
		'ShipToState' => 'varchar',
		'ShipToCountry' => 'varchar',
		'ShipToPostalCode' => 'varchar',
		'ShipToLocationCode' => 'varchar',
		'ReturnFcCountry' => 'varchar',
	];

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kUser */
	public $kUser;

	/** @var string MarketplaceID */
	public $MarketplaceID;

	/** @var string MerchantID */
	public $MerchantID;

	/** @var string OrderDate */
	public $OrderDate;

	/** @var string TransactionType */
	public $TransactionType;

	/** @var string OrderID */
	public $OrderID;

	/** @var string ShipmentDate */
	public $ShipmentDate;

	/** @var string ShipmentID */
	public $ShipmentID;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string ASIN */
	public $ASIN;

	/** @var string SKU */
	public $SKU;

	/** @var int Quantity */
	public $Quantity;

	/** @var string TaxCalculationDate */
	public $TaxCalculationDate;

	/** @var string TaxRate */
	public $TaxRate;

	/** @var string ProductTaxCode */
	public $ProductTaxCode;

	/** @var string Currency */
	public $Currency;

	/** @var string TaxType */
	public $TaxType;

	/** @var string TaxCalculationReasonCode */
	public $TaxCalculationReasonCode;

	/** @var string TaxAddressRole */
	public $TaxAddressRole;

	/** @var string JurisdictionLevel */
	public $JurisdictionLevel;

	/** @var string JurisdictionName */
	public $JurisdictionName;

	/** @var string OUR_PRICETaxInclusiveSellingPrice */
	public $OUR_PRICETaxInclusiveSellingPrice;

	/** @var string OUR_PRICETaxAmount */
	public $OUR_PRICETaxAmount;

	/** @var string OUR_PRICETaxExclusiveSellingPrice */
	public $OUR_PRICETaxExclusiveSellingPrice;

	/** @var string OUR_PRICETaxInclusivePromoAmount */
	public $OUR_PRICETaxInclusivePromoAmount;

	/** @var string OUR_PRICETaxAmountPromo */
	public $OUR_PRICETaxAmountPromo;

	/** @var string OUR_PRICETaxExclusivePromoAmount */
	public $OUR_PRICETaxExclusivePromoAmount;

	/** @var string SHIPPINGTaxInclusiveSellingPrice */
	public $SHIPPINGTaxInclusiveSellingPrice;

	/** @var string SHIPPINGTaxAmount */
	public $SHIPPINGTaxAmount;

	/** @var string SHIPPINGTaxExclusiveSellingPrice */
	public $SHIPPINGTaxExclusiveSellingPrice;

	/** @var string SHIPPINGTaxInclusivePromoAmount */
	public $SHIPPINGTaxInclusivePromoAmount;

	/** @var string SHIPPINGTaxAmountPromo */
	public $SHIPPINGTaxAmountPromo;

	/** @var string SHIPPINGTaxExclusivePromoAmount */
	public $SHIPPINGTaxExclusivePromoAmount;

	/** @var string GIFTWRAPTaxInclusiveSellingPrice */
	public $GIFTWRAPTaxInclusiveSellingPrice;

	/** @var string GIFTWRAPTaxAmount */
	public $GIFTWRAPTaxAmount;

	/** @var string GIFTWRAPTaxExclusiveSellingPrice */
	public $GIFTWRAPTaxExclusiveSellingPrice;

	/** @var string GIFTWRAPTaxInclusivePromoAmount */
	public $GIFTWRAPTaxInclusivePromoAmount;

	/** @var string GIFTWRAPTaxAmountPromo */
	public $GIFTWRAPTaxAmountPromo;

	/** @var string GIFTWRAPTaxExclusivePromoAmount */
	public $GIFTWRAPTaxExclusivePromoAmount;

	/** @var string SellerTaxRegistration */
	public $SellerTaxRegistration;

	/** @var string SellerTaxRegistrationJurisdiction */
	public $SellerTaxRegistrationJurisdiction;

	/** @var string BuyerTaxRegistration */
	public $BuyerTaxRegistration;

	/** @var string BuyerTaxRegistrationJurisdiction */
	public $BuyerTaxRegistrationJurisdiction;

	/** @var string InvoiceLevelCurrencyCode */
	public $InvoiceLevelCurrencyCode;

	/** @var string InvoiceLevelExchangeRate */
	public $InvoiceLevelExchangeRate;

	/** @var string InvoiceLevelExchangeRateDate */
	public $InvoiceLevelExchangeRateDate;

	/** @var string ConvertedTaxAmount */
	public $ConvertedTaxAmount;

	/** @var string VATInvoiceNumber */
	public $VATInvoiceNumber;

	/** @var string InvoiceUrl */
	public $InvoiceUrl;

	/** @var string ExportOutsideEU */
	public $ExportOutsideEU;

	/** @var string ShipFromCity */
	public $ShipFromCity;

	/** @var string ShipFromState */
	public $ShipFromState;

	/** @var string ShipFromCountry */
	public $ShipFromCountry;

	/** @var string ShipFromPostalCode */
	public $ShipFromPostalCode;

	/** @var string ShipFromTaxLocationCode */
	public $ShipFromTaxLocationCode;

	/** @var string ShipToCity */
	public $ShipToCity;

	/** @var string ShipToState */
	public $ShipToState;

	/** @var string ShipToCountry */
	public $ShipToCountry;

	/** @var string ShipToPostalCode */
	public $ShipToPostalCode;

	/** @var string ShipToLocationCode */
	public $ShipToLocationCode;

	/** @var string ReturnFcCountry */
	public $ReturnFcCountry;
}
