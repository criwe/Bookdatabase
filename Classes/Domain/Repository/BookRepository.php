<?php
declare(strict_types=1);
namespace Itfoo\Extbookdatabase\Domain\Repository;

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
