<?php
namespace Itfoo\Extbookdatabase\Domain\Model;

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
 * Location
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * locationitem
     * 
     * @var string
     */
    protected $locationitem = '';

    /**
     * locationshortcut
     * 
     * @var string
     */
    protected $locationshortcut = '';

    /**
     * Returns the locationitem
     * 
     * @return string $locationitem
     */
    public function getLocationitem()
    {
        return $this->locationitem;
    }

    /**
     * Sets the locationitem
     * 
     * @param string $locationitem
     * @return void
     */
    public function setLocationitem($locationitem)
    {
        $this->locationitem = $locationitem;
    }

    /**
     * Returns the locationshortcut
     * 
     * @return string $locationshortcut
     */
    public function getLocationshortcut()
    {
        return $this->locationshortcut;
    }

    /**
     * Sets the locationshortcut
     * 
     * @param string $locationshortcut
     * @return void
     */
    public function setLocationshortcut($locationshortcut)
    {
        $this->locationshortcut = $locationshortcut;
    }
}
