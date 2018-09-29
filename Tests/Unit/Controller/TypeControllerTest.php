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
 * Test case for class Itfoo\ExtBookdatabase\Controller\TypeController.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class TypeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Itfoo\ExtBookdatabase\Controller\TypeController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Itfoo\\ExtBookdatabase\\Controller\\TypeController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTypesFromRepositoryAndAssignsThemToView() {

		$allTypes = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$typeRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$typeRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTypes));
		$this->inject($this->subject, 'typeRepository', $typeRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('types', $allTypes);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTypeToView() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('type', $type);

		$this->subject->showAction($type);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTypeToView() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newType', $type);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($type);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTypeToTypeRepository() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$typeRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$typeRepository->expects($this->once())->method('add')->with($type);
		$this->inject($this->subject, 'typeRepository', $typeRepository);

		$this->subject->createAction($type);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTypeToView() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('type', $type);

		$this->subject->editAction($type);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTypeInTypeRepository() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$typeRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$typeRepository->expects($this->once())->method('update')->with($type);
		$this->inject($this->subject, 'typeRepository', $typeRepository);

		$this->subject->updateAction($type);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTypeFromTypeRepository() {
		$type = new \Itfoo\ExtBookdatabase\Domain\Model\Type();

		$typeRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$typeRepository->expects($this->once())->method('remove')->with($type);
		$this->inject($this->subject, 'typeRepository', $typeRepository);

		$this->subject->deleteAction($type);
	}
}
