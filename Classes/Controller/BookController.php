<?php
namespace Itfoo\Extbookdatabase\Controller;

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
 * BookController
 */
class BookController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * bookRepository
     * 
     * @var \Itfoo\Extbookdatabase\Domain\Repository\BookRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $bookRepository = NULL;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        /*if ($this->request->hasArgument('search')) {
            $search = $this->request->getArgument('search');
        }
        if ($this->request->hasArgument('searchwhat')) {
            $searchwhat = $this->request->getArgument('searchwhat');
        }        
        
        if($search!='') {
        $this->view->assign('books', $this->bookRepository->findSearchForm($search, $searchwhat));
        $this->view->assign('search',$search);
        }
        else {*/
        $books = $this->bookRepository->findAll();
        $this->view->assign('books', $books);
        //}
    }

    /**
     * action show
     * 
     * @param \Itfoo\Extbookdatabase\Domain\Model\Book $book
     * @return void
     */
    public function showAction(\Itfoo\Extbookdatabase\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }
}
