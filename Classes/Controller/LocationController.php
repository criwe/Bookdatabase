<?php
namespace Cw\ExtBookdatabase\Controller;

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
 * LocationController
 */
class LocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $locations = $this->locationRepository->findAll();
        $this->view->assign('locations', $locations);
    }

    /**
     * action show
     * 
     * @param \Cw\ExtBookdatabase\Domain\Model\Location $location
     * @return void
     */
    public function showAction(\Cw\ExtBookdatabase\Domain\Model\Location $location)
    {
        $this->view->assign('location', $location);
    }

    /**
     * action new
     * 
     * @param \Cw\ExtBookdatabase\Domain\Model\Location $newLocation
     * @ignorevalidation $newLocation
     * @return void
     */
    public function newAction(\Cw\ExtBookdatabase\Domain\Model\Location $newLocation = NULL)
    {
        $this->view->assign('newLocation', $newLocation);
    }

    /**
     * action create
     * 
     * @param \Cw\ExtBookdatabase\Domain\Model\Location $newLocation
     * @return void
     */
    public function createAction(\Cw\ExtBookdatabase\Domain\Model\Location $newLocation)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->locationRepository->add($newLocation);
        $this->redirect('list');
    }
}
