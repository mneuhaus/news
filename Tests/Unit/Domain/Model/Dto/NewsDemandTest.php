<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Georg Ringer <typo3@ringerge.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Tests for Tx_News_Domain_Model_Dto_NewsDemand
 *
 * @package TYPO3
 * @subpackage tx_news
 * @author Georg Ringer <typo3@ringerge.org>
 */
class Tx_News_Tests_Unit_Domain_Model_Dto_NewsDemandTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/** @var  Tx_News_Domain_Model_Dto_NewsDemand */
	protected $instance;

	public function setup() {
		$this->instance = new Tx_News_Domain_Model_Dto_NewsDemand();
	}

	/**
	 * @test
	 * @return void
	 */
	public function categoriesCanBeSet() {
		$value = array('Test 123');
		$this->instance->setCategories($value);
		$this->assertEquals($value, $this->instance->getCategories());
	}

	/**
	 * @test
	 * @return void
	 */
	public function categoryConjunctionCanBeSet() {
		$value = 'AND';
		$this->instance->setCategoryConjunction($value);
		$this->assertEquals($value, $this->instance->getCategoryConjunction());
	}

	/**
	 * @test
	 * @return void
	 */
	public function includeSubCategoriesCanBeSet() {
		$value = TRUE;
		$this->instance->setIncludeSubCategories($value);
		$this->assertEquals($value, $this->instance->getIncludeSubCategories());
	}

	/**
	 * @test
	 * @return void
	 */
	public function authorCanBeSet() {
		$value = '7elix';
		$this->instance->setAuthor($value);
		$this->assertEquals($value, $this->instance->getAuthor());
	}

	/**
	 * @test
	 * @return void
	 */
	public function tagsCanBeSet() {
		$value = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->instance->setTags($value);
		$this->assertEquals($value, $this->instance->getTags());
	}

	/**
	 * @test
	 * @return void
	 */
	public function archiveRestrictionCanBeSet() {
		$value = 'archive';
		$this->instance->setArchiveRestriction($value);
		$this->assertEquals($value, $this->instance->getArchiveRestriction());
	}

	/**
	 * @test
	 * @return void
	 */
	public function timeRestrictionCanBeSet() {
		$value = '2014-04-01';
		$this->instance->setTimeRestriction($value);
		$this->assertEquals($value, $this->instance->getTimeRestriction());
	}

	/**
	 * @test
	 * @return void
	 */
	public function timeRestrictionHighCanBeSet() {
		$value = '2014-05-01';
		$this->instance->setTimeRestrictionHigh($value);
		$this->assertEquals($value, $this->instance->getTimeRestrictionHigh());
	}

	/**
	 * @test
	 * @return void
	 */
	public function topNewsRestrictionCanBeSet() {
		$value = 1;
		$this->instance->setTopNewsRestriction($value);
		$this->assertEquals($value, $this->instance->getTopNewsRestriction());
	}

	/**
	 * @test
	 * @return void
	 */
	public function dateFieldCanBeSet() {
		$value = 'field';
		$this->instance->setDateField($value);
		$this->assertEquals($value, $this->instance->getDateField());
	}


	/**
	 * @test
	 * @return void
	 */
	public function monthCanBeSet() {
		$value = 4;
		$this->instance->setMonth($value);
		$this->assertEquals($value, $this->instance->getMonth());
	}

	/**
	 * @test
	 * @return void
	 */
	public function yearCanBeSet() {
		$value = 2014;
		$this->instance->setYear($value);
		$this->assertEquals($value, $this->instance->getYear());
	}

	/**
	 * @test
	 * @return void
	 */
	public function dayCanBeSet() {
		$value = 1;
		$this->instance->setDay($value);
		$this->assertEquals($value, $this->instance->getDay());
	}

	/**
	 * @test
	 * @return void
	 */
	public function searchFieldsCanBeSet() {
		$value = 'field1,field2';
		$this->instance->setSearchFields($value);
		$this->assertEquals($value, $this->instance->getSearchFields());
	}

	/**
	 * @test
	 * @return void
	 */
	public function searchCanBeSet() {
		$value = new Tx_News_Domain_Model_Dto_Search();
		$value->setSubject('fo');
		$this->instance->setSearch($value);
		$this->assertEquals($value, $this->instance->getSearch());
	}

	/**
	 * @test
	 * @return void
	 */
	public function orderCanBeSet() {
		$value = 'order';
		$this->instance->setOrder($value);
		$this->assertEquals($value, $this->instance->getOrder());
	}

	/**
	 * @test
	 * @return void
	 */
	public function orderByAllowedCanBeSet() {
		$value = 'order,order2';
		$this->instance->setOrderByAllowed($value);
		$this->assertEquals($value, $this->instance->getOrderByAllowed());
	}


	/**
	 * @test
	 * @return void
	 */
	public function topNewsFirstCanBeSet() {
		$value = TRUE;
		$this->instance->setTopNewsFirst($value);
		$this->assertEquals($value, $this->instance->getTopNewsFirst());
	}

	/**
	 * @test
	 * @return void
	 */
	public function storagePageCanBeSet() {
		$value = 456;
		$this->instance->setStoragePage($value);
		$this->assertEquals($value, $this->instance->getStoragePage());
	}

	/**
	 * @test
	 * @return void
	 */
	public function limitCanBeSet() {
		$value = 10;
		$this->instance->setLimit($value);
		$this->assertEquals($value, $this->instance->getLimit());
	}

	/**
	 * @test
	 * @return void
	 */
	public function offsetCanBeSet() {
		$value = 20;
		$this->instance->setOffset($value);
		$this->assertEquals($value, $this->instance->getOffset());
	}

	/**
	 * @test
	 * @return void
	 */
	public function excludeAlreadyDisplayedNewsCanBeSet() {
		$value = TRUE;
		$this->instance->setExcludeAlreadyDisplayedNews($value);
		$this->assertEquals($value, $this->instance->getExcludeAlreadyDisplayedNews());
	}
}
