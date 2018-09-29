<?php

namespace Itfoo\ExtBookdatabase\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Christoph Werner <info@itfoo.de>
 *
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
 * Test case for class \Itfoo\ExtBookdatabase\Domain\Model\Books.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class BooksTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Itfoo\ExtBookdatabase\Domain\Model\Books
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Itfoo\ExtBookdatabase\Domain\Model\Books();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAuthorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAuthor()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorForStringSetsAuthor() {
		$this->subject->setAuthor('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'author',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIsbnReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getIsbn()
		);
	}

	/**
	 * @test
	 */
	public function setIsbnForStringSetsIsbn() {
		$this->subject->setIsbn('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'isbn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPublishingyearReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getPublishingyear()
		);
	}

	/**
	 * @test
	 */
	public function setPublishingyearForDateTimeSetsPublishingyear() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setPublishingyear($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'publishingyear',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEditionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEdition()
		);
	}

	/**
	 * @test
	 */
	public function setEditionForStringSetsEdition() {
		$this->subject->setEdition('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'edition',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKeywordsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getKeywords()
		);
	}

	/**
	 * @test
	 */
	public function setKeywordsForStringSetsKeywords() {
		$this->subject->setKeywords('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'keywords',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPublisherReturnsInitialValueForPublisher() {
		$this->assertEquals(
			NULL,
			$this->subject->getPublisher()
		);
	}

	/**
	 * @test
	 */
	public function setPublisherForPublisherSetsPublisher() {
		$publisherFixture = new \Itfoo\ExtBookdatabase\Domain\Model\Publisher();
		$this->subject->setPublisher($publisherFixture);

		$this->assertAttributeEquals(
			$publisherFixture,
			'publisher',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory() {
		$this->assertEquals(
			NULL,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForCategorySetsCategory() {
		$categoryFixture = new \Itfoo\ExtBookdatabase\Domain\Model\Category();
		$this->subject->setCategory($categoryFixture);

		$this->assertAttributeEquals(
			$categoryFixture,
			'category',
			$this->subject
		);
	}
}
