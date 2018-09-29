<?php
namespace Cw\ExtBookdatabase\Domain\Model;

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
 * Owner
 */
class Owner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * owneritem
     * 
     * @var string
     */
    protected $owneritem = '';

    /**
     * owneritemshortcut
     * 
     * @var string
     */
    protected $owneritemshortcut = '';

    /**
     * Returns the owneritem
     * 
     * @return string $owneritem
     */
    public function getOwneritem()
    {
        return $this->owneritem;
    }

    /**
     * Sets the owneritem
     * 
     * @param string $owneritem
     * @return void
     */
    public function setOwneritem($owneritem)
    {
        $this->owneritem = $owneritem;
    }

    /**
     * Returns the owneritemshortcut
     * 
     * @return string $owneritemshortcut
     */
    public function getOwneritemshortcut()
    {
        return $this->owneritemshortcut;
    }

    /**
     * Sets the owneritemshortcut
     * 
     * @param string $owneritemshortcut
     * @return void
     */
    public function setOwneritemshortcut($owneritemshortcut)
    {
        $this->owneritemshortcut = $owneritemshortcut;
    }
}
