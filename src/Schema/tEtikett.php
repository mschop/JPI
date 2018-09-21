<?php

namespace App\Schema;

class tEtikett
{
	const TABLE_NAME = 'tEtikett';
	const kEtikett = 'kEtikett';
	const cName = 'cName';
	const cEZeile1 = 'cEZeile1';
	const cEZeile2 = 'cEZeile2';
	const cEZeile3 = 'cEZeile3';
	const cEZeile4 = 'cEZeile4';
	const cEZeile5 = 'cEZeile5';
	const cEZeile6 = 'cEZeile6';
	const dEX1 = 'dEX1';
	const dEX2 = 'dEX2';
	const dEX3 = 'dEX3';
	const dEX4 = 'dEX4';
	const dEX5 = 'dEX5';
	const dEX6 = 'dEX6';
	const dEY1 = 'dEY1';
	const dEY2 = 'dEY2';
	const dEY3 = 'dEY3';
	const dEY4 = 'dEY4';
	const dEY5 = 'dEY5';
	const dEY6 = 'dEY6';
	const cAZeile1 = 'cAZeile1';
	const cAZeile2 = 'cAZeile2';
	const cAZeile3 = 'cAZeile3';
	const cAZeile4 = 'cAZeile4';
	const cAZeile5 = 'cAZeile5';
	const dAX1 = 'dAX1';
	const dAX2 = 'dAX2';
	const dAX3 = 'dAX3';
	const dAX4 = 'dAX4';
	const dAX5 = 'dAX5';
	const dAY1 = 'dAY1';
	const dAY2 = 'dAY2';
	const dAY3 = 'dAY3';
	const dAY4 = 'dAY4';
	const dAY5 = 'dAY5';
	const nEFontSize = 'nEFontSize';
	const cEFontName = 'cEFontName';
	const nAFontSize = 'nAFontSize';
	const cAFontName = 'cAFontName';
	const dEXX1 = 'dEXX1';
	const dEXX2 = 'dEXX2';
	const dEXX3 = 'dEXX3';
	const dEXX4 = 'dEXX4';
	const dEXX5 = 'dEXX5';
	const dEXX6 = 'dEXX6';
	const dEYY1 = 'dEYY1';
	const dEYY2 = 'dEYY2';
	const dEYY3 = 'dEYY3';
	const dEYY4 = 'dEYY4';
	const dEYY5 = 'dEYY5';
	const dEYY6 = 'dEYY6';
	const dAXX1 = 'dAXX1';
	const dAXX2 = 'dAXX2';
	const dAXX3 = 'dAXX3';
	const dAXX4 = 'dAXX4';
	const dAXX5 = 'dAXX5';
	const dAYY1 = 'dAYY1';
	const dAYY2 = 'dAYY2';
	const dAYY3 = 'dAYY3';
	const dAYY4 = 'dAYY4';
	const dAYY5 = 'dAYY5';
	const COLUMN_NAMES = [
		'kEtikett',
		'cName',
		'cEZeile1',
		'cEZeile2',
		'cEZeile3',
		'cEZeile4',
		'cEZeile5',
		'cEZeile6',
		'dEX1',
		'dEX2',
		'dEX3',
		'dEX4',
		'dEX5',
		'dEX6',
		'dEY1',
		'dEY2',
		'dEY3',
		'dEY4',
		'dEY5',
		'dEY6',
		'cAZeile1',
		'cAZeile2',
		'cAZeile3',
		'cAZeile4',
		'cAZeile5',
		'dAX1',
		'dAX2',
		'dAX3',
		'dAX4',
		'dAX5',
		'dAY1',
		'dAY2',
		'dAY3',
		'dAY4',
		'dAY5',
		'nEFontSize',
		'cEFontName',
		'nAFontSize',
		'cAFontName',
		'dEXX1',
		'dEXX2',
		'dEXX3',
		'dEXX4',
		'dEXX5',
		'dEXX6',
		'dEYY1',
		'dEYY2',
		'dEYY3',
		'dEYY4',
		'dEYY5',
		'dEYY6',
		'dAXX1',
		'dAXX2',
		'dAXX3',
		'dAXX4',
		'dAXX5',
		'dAYY1',
		'dAYY2',
		'dAYY3',
		'dAYY4',
		'dAYY5',
	];
	const COLUMN_TYPES = [
		'kEtikett' => 'int',
		'cName' => 'varchar',
		'cEZeile1' => 'varchar',
		'cEZeile2' => 'varchar',
		'cEZeile3' => 'varchar',
		'cEZeile4' => 'varchar',
		'cEZeile5' => 'varchar',
		'cEZeile6' => 'varchar',
		'dEX1' => 'decimal',
		'dEX2' => 'decimal',
		'dEX3' => 'decimal',
		'dEX4' => 'decimal',
		'dEX5' => 'decimal',
		'dEX6' => 'decimal',
		'dEY1' => 'decimal',
		'dEY2' => 'decimal',
		'dEY3' => 'decimal',
		'dEY4' => 'decimal',
		'dEY5' => 'decimal',
		'dEY6' => 'decimal',
		'cAZeile1' => 'varchar',
		'cAZeile2' => 'varchar',
		'cAZeile3' => 'varchar',
		'cAZeile4' => 'varchar',
		'cAZeile5' => 'varchar',
		'dAX1' => 'decimal',
		'dAX2' => 'decimal',
		'dAX3' => 'decimal',
		'dAX4' => 'decimal',
		'dAX5' => 'decimal',
		'dAY1' => 'decimal',
		'dAY2' => 'decimal',
		'dAY3' => 'decimal',
		'dAY4' => 'decimal',
		'dAY5' => 'decimal',
		'nEFontSize' => 'tinyint',
		'cEFontName' => 'varchar',
		'nAFontSize' => 'tinyint',
		'cAFontName' => 'varchar',
		'dEXX1' => 'decimal',
		'dEXX2' => 'decimal',
		'dEXX3' => 'decimal',
		'dEXX4' => 'decimal',
		'dEXX5' => 'decimal',
		'dEXX6' => 'decimal',
		'dEYY1' => 'decimal',
		'dEYY2' => 'decimal',
		'dEYY3' => 'decimal',
		'dEYY4' => 'decimal',
		'dEYY5' => 'decimal',
		'dEYY6' => 'decimal',
		'dAXX1' => 'decimal',
		'dAXX2' => 'decimal',
		'dAXX3' => 'decimal',
		'dAXX4' => 'decimal',
		'dAXX5' => 'decimal',
		'dAYY1' => 'decimal',
		'dAYY2' => 'decimal',
		'dAYY3' => 'decimal',
		'dAYY4' => 'decimal',
		'dAYY5' => 'decimal',
	];

	/** @var int kEtikett */
	public $kEtikett;

	/** @var string cName */
	public $cName;

	/** @var string cEZeile1 */
	public $cEZeile1;

	/** @var string cEZeile2 */
	public $cEZeile2;

	/** @var string cEZeile3 */
	public $cEZeile3;

	/** @var string cEZeile4 */
	public $cEZeile4;

	/** @var string cEZeile5 */
	public $cEZeile5;

	/** @var string cEZeile6 */
	public $cEZeile6;

	/** @var string dEX1 */
	public $dEX1;

	/** @var string dEX2 */
	public $dEX2;

	/** @var string dEX3 */
	public $dEX3;

	/** @var string dEX4 */
	public $dEX4;

	/** @var string dEX5 */
	public $dEX5;

	/** @var string dEX6 */
	public $dEX6;

	/** @var string dEY1 */
	public $dEY1;

	/** @var string dEY2 */
	public $dEY2;

	/** @var string dEY3 */
	public $dEY3;

	/** @var string dEY4 */
	public $dEY4;

	/** @var string dEY5 */
	public $dEY5;

	/** @var string dEY6 */
	public $dEY6;

	/** @var string cAZeile1 */
	public $cAZeile1;

	/** @var string cAZeile2 */
	public $cAZeile2;

	/** @var string cAZeile3 */
	public $cAZeile3;

	/** @var string cAZeile4 */
	public $cAZeile4;

	/** @var string cAZeile5 */
	public $cAZeile5;

	/** @var string dAX1 */
	public $dAX1;

	/** @var string dAX2 */
	public $dAX2;

	/** @var string dAX3 */
	public $dAX3;

	/** @var string dAX4 */
	public $dAX4;

	/** @var string dAX5 */
	public $dAX5;

	/** @var string dAY1 */
	public $dAY1;

	/** @var string dAY2 */
	public $dAY2;

	/** @var string dAY3 */
	public $dAY3;

	/** @var string dAY4 */
	public $dAY4;

	/** @var string dAY5 */
	public $dAY5;

	/** @var int nEFontSize */
	public $nEFontSize;

	/** @var string cEFontName */
	public $cEFontName;

	/** @var int nAFontSize */
	public $nAFontSize;

	/** @var string cAFontName */
	public $cAFontName;

	/** @var string dEXX1 */
	public $dEXX1;

	/** @var string dEXX2 */
	public $dEXX2;

	/** @var string dEXX3 */
	public $dEXX3;

	/** @var string dEXX4 */
	public $dEXX4;

	/** @var string dEXX5 */
	public $dEXX5;

	/** @var string dEXX6 */
	public $dEXX6;

	/** @var string dEYY1 */
	public $dEYY1;

	/** @var string dEYY2 */
	public $dEYY2;

	/** @var string dEYY3 */
	public $dEYY3;

	/** @var string dEYY4 */
	public $dEYY4;

	/** @var string dEYY5 */
	public $dEYY5;

	/** @var string dEYY6 */
	public $dEYY6;

	/** @var string dAXX1 */
	public $dAXX1;

	/** @var string dAXX2 */
	public $dAXX2;

	/** @var string dAXX3 */
	public $dAXX3;

	/** @var string dAXX4 */
	public $dAXX4;

	/** @var string dAXX5 */
	public $dAXX5;

	/** @var string dAYY1 */
	public $dAYY1;

	/** @var string dAYY2 */
	public $dAYY2;

	/** @var string dAYY3 */
	public $dAYY3;

	/** @var string dAYY4 */
	public $dAYY4;

	/** @var string dAYY5 */
	public $dAYY5;
}
