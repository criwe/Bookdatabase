<?php
namespace Cw\ExtBookdatabase\Domain\Repository;

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
 * The repository for Books
 */
class BookRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /*
     * Default ordering for all queries created by this repository
     */

    protected $defaultOrderings = [
        'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
    ];

    // Suche
    /**
     * @param $search
     * @param $searchwhat
     */
    public function findSearchForm($search, $searchwhat)
    {
        // Suche nach Titel
        if ($searchwhat == 'title') {
            $query = $this->createQuery();
            $query->matching($query->like('title', '%' . $search . '%'));
            $query->setOrderings(['title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
            $query->setLimit(5);
            return $query->execute();
        } elseif ($searchwhat == 'author') {
            $query = $this->createQuery();
            $query->matching($query->like('author', '%' . $search . '%'));
            $query->setOrderings(['title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
            $query->setLimit(5);
            return $query->execute();
        } else {
            $query = $this->createQuery();
            $query->matching($query->like('keywords', '%' . $search . '%'));
            $query->setOrderings(['title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
            $query->setLimit(5);
            return $query->execute();
        }
    }
}
