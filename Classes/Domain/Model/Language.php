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
 * Language
 */
class Language extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * languageitem
     * 
     * @var string
     */
    protected $languageitem = '';

    /**
     * Returns the languageitem
     * 
     * @return string $languageitem
     */
    public function getLanguageitem()
    {
        return $this->languageitem;
    }

    /**
     * Sets the languageitem
     * 
     * @param string $languageitem
     * @return void
     */
    public function setLanguageitem($languageitem)
    {
        $this->languageitem = $languageitem;
    }
}
