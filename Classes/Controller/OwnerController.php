<?php
namespace Cw\Extbookdatabase\Controller;

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

/***
 *
 * This file is part of the "Bookdatabase" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Christoph Werner <info@itfoo.de>
 *
 ***/

/**
 * OwnerController
 */
class OwnerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $owners = $this->ownerRepository->findAll();
        $this->view->assign('owners', $owners);
    }

    /**
     * action show
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Owner $owner
     * @return void
     */
    public function showAction(\Cw\Extbookdatabase\Domain\Model\Owner $owner)
    {
        $this->view->assign('owner', $owner);
    }

    /**
     * action new
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Owner $newOwner
     * @ignorevalidation $newOwner
     * @return void
     */
    public function newAction(\Cw\Extbookdatabase\Domain\Model\Owner $newOwner = NULL)
    {
        $this->view->assign('newOwner', $newOwner);
    }

    /**
     * action create
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Owner $newOwner
     * @return void
     */
    public function createAction(\Cw\Extbookdatabase\Domain\Model\Owner $newOwner)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->ownerRepository->add($newOwner);
        $this->redirect('list');
    }
}
