<?php
namespace Itfoo\ExtBookdatabase\Tests\Unit\Controller;
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
 * Test case for class Itfoo\ExtBookdatabase\Controller\BooksController.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class BooksControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Itfoo\ExtBookdatabase\Controller\BooksController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Itfoo\\ExtBookdatabase\\Controller\\BooksController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllBookssFromRepositoryAndAssignsThemToView() {

		$allBookss = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$booksRepository = $this->getMock('Itfoo\\ExtBookdatabase\\Domain\\Repository\\BooksRepository', array('findAll'), array(), '', FALSE);
		$booksRepository->expects($this->once())->method('findAll')->will($this->returnValue($allBookss));
		$this->inject($this->subject, 'booksRepository', $booksRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('bookss', $allBookss);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenBooksToView() {
		$books = new \Itfoo\ExtBookdatabase\Domain\Model\Books();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('books', $books);

		$this->subject->showAction($books);
	}
}
