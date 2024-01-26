<?php

declare(strict_types=1);
namespace Itfoo\Extbookdatabase\Controller;

/* * *
 *
 * This file is part of the "Bookdatabase" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Christoph Werner <info@itfoo.de>
 *
 * * */

namespace Itfoo\Extbookdatabase\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BookController extends ActionController {

    /**
     * bookRepository
     * 
     * @var \Itfoo\Extbookdatabase\Domain\Repository\BookRepository
     */
    protected $bookRepository = NULL;

    /**
     * @param \Itfoo\Extbookdatabase\Domain\Repository\BookRepository $bookRepository
     */
    public function injectBookRepository(\Itfoo\Extbookdatabase\Domain\Repository\BookRepository $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    /**
     * action list
     * 
     * @return string|object|null|void
     */
    public function listAction(): ResponseInterface {
        $books = $this->bookRepository->findAll();
        $this->view->assign('books', $books);

        return $this->htmlResponse();
    }

    /**
     * action show
     * 
     * @param \Itfoo\Extbookdatabase\Domain\Model\Book $book
     * @return void
     */
    public function showAction(\Itfoo\Extbookdatabase\Domain\Model\Book $book): ResponseInterface  {
        $this->view->assign('book', $book);
        return $this->htmlResponse();
    }

}
