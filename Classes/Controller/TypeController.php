<?php
namespace Itfoo\ExtBookdatabase\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Christoph Werner <info@itfoo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * TypeController
 */
class TypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$types = $this->typeRepository->findAll();
		$this->view->assign('types', $types);
	}

	/**
	 * action show
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $type
	 * @return void
	 */
	public function showAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $type) {
		$this->view->assign('type', $type);
	}

	/**
	 * action new
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $newType
	 * @ignorevalidation $newType
	 * @return void
	 */
	public function newAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $newType = NULL) {
		$this->view->assign('newType', $newType);
	}

	/**
	 * action create
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $newType
	 * @return void
	 */
	public function createAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $newType) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->typeRepository->add($newType);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $type
	 * @ignorevalidation $type
	 * @return void
	 */
	public function editAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $type) {
		$this->view->assign('type', $type);
	}

	/**
	 * action update
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $type
	 * @return void
	 */
	public function updateAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $type) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->typeRepository->update($type);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \Itfoo\ExtBookdatabase\Domain\Model\Type $type
	 * @return void
	 */
	public function deleteAction(\Itfoo\ExtBookdatabase\Domain\Model\Type $type) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->typeRepository->remove($type);
		$this->redirect('list');
	}

}