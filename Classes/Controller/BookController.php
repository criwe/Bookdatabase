<?php
declare(strict_types=1);
namespace Itfoo\Extbookdatabase\Controller;
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
     */
    protected $bookRepository = NULL;

    
     /**
     * @param \Itfoo\Extbookdatabase\Domain\Repository\BookRepository $bookRepository
     */
    public function injectBookRepository(\Itfoo\Extbookdatabase\Domain\Repository\BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    
    
    /**
     * action list
     * 
     * @return string|object|null|void
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
