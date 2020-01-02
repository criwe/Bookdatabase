<?php
namespace Cw\Extbookdatabase\Domain\Model;

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
 * Book
 */
class Book extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * author
     * 
     * @var string
     */
    protected $author = '';

    /**
     * translator
     * 
     * @var string
     */
    protected $translator = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * isbn
     * 
     * @var string
     */
    protected $isbn = '';

    /**
     * publishingyear
     * 
     * @var string
     */
    protected $publishingyear = '';

    /**
     * edition
     * 
     * @var string
     */
    protected $edition = '';

    /**
     * keywords
     * 
     * @var string
     */
    protected $keywords = '';

    /**
     * signed
     * 
     * @var bool
     */
    protected $signed = FALSE;

    /**
     * soldout
     * 
     * @var bool
     */
    protected $soldout = FALSE;

    /**
     * borroweddate
     * 
     * @var \DateTime
     */
    protected $borroweddate = '';

    /**
     * publisher
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Publisher
     */
    protected $publisher = NULL;

    /**
     * category
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cw\Extbookdatabase\Domain\Model\Category>
     */
    protected $category = NULL;

    /**
     * location
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Location
     */
    protected $location = NULL;

    /**
     * owner
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Owner
     */
    protected $owner = NULL;

    /**
     * type
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Type
     */
    protected $type = NULL;

    /**
     * language
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Language
     */
    protected $language = NULL;

    /**
     * bookcondition
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Bookcondition
     */
    protected $bookcondition = NULL;

    /**
     * bookseries
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Bookseries
     */
    protected $bookseries = NULL;

    /**
     * personborrowed
     * 
     * @var \Cw\Extbookdatabase\Domain\Model\Personborrowed
     */
    protected $personborrowed = NULL;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the author
     * 
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     * 
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the translator
     * 
     * @return string $translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * Sets the translator
     * 
     * @param string $translator
     * @return void
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the isbn
     * 
     * @return string $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Sets the isbn
     * 
     * @param string $isbn
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Returns the publishingyear
     * 
     * @return string $publishingyear
     */
    public function getPublishingyear()
    {
        return $this->publishingyear;
    }

    /**
     * Sets the publishingyear
     * 
     * @param string $publishingyear
     * @return void
     */
    public function setPublishingyear($publishingyear)
    {
        $this->publishingyear = $publishingyear;
    }

    /**
     * Returns the edition
     * 
     * @return string $edition
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Sets the edition
     * 
     * @param string $edition
     * @return void
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }

    /**
     * Returns the keywords
     * 
     * @return string $keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets the keywords
     * 
     * @param string $keywords
     * @return void
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * Returns the signed
     * 
     * @return boolean $signed
     */
    public function getSigned()
    {
        return $this->signed;
    }

    /**
     * Sets the signed
     * 
     * @param boolean $signed
     * @return void
     */
    public function setSigned($signed)
    {
        $this->signed = $signed;
    }

    /**
     * Returns the boolean state of signed
     * 
     * @return boolean
     */
    public function isSigned()
    {
        return $this->signed;
    }

    /**
     * Returns the soldout
     * 
     * @return boolean $soldout
     */
    public function getSoldout()
    {
        return $this->soldout;
    }

    /**
     * Sets the soldout
     * 
     * @param boolean $soldout
     * @return void
     */
    public function setSoldout($soldout)
    {
        $this->soldout = $soldout;
    }

    /**
     * Returns the boolean state of soldout
     * 
     * @return boolean
     */
    public function isSoldout()
    {
        return $this->soldout;
    }

    /**
     * Returns the publisher
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Publisher $publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets the publisher
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Publisher $publisher
     * @return void
     */
    public function setPublisher(\Cw\Extbookdatabase\Domain\Model\Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Adds a Category
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Cw\Extbookdatabase\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Cw\Extbookdatabase\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cw\Extbookdatabase\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Cw\Extbookdatabase\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the location
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Location $location
     * @return void
     */
    public function setLocation(\Cw\Extbookdatabase\Domain\Model\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Returns the owner
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Owner $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the owner
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Owner $owner
     * @return void
     */
    public function setOwner(\Cw\Extbookdatabase\Domain\Model\Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Returns the type
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Type $type
     * @return void
     */
    public function setType(\Cw\Extbookdatabase\Domain\Model\Type $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the language
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Language $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the language
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Language $language
     * @return void
     */
    public function setLanguage(\Cw\Extbookdatabase\Domain\Model\Language $language)
    {
        $this->language = $language;
    }

    /**
     * Returns the bookcondition
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Bookcondition $bookcondition
     */
    public function getBookcondition()
    {
        return $this->bookcondition;
    }

    /**
     * Sets the bookcondition
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Bookcondition $bookcondition
     * @return void
     */
    public function setBookcondition(\Cw\Extbookdatabase\Domain\Model\Bookcondition $bookcondition)
    {
        $this->bookcondition = $bookcondition;
    }

    /**
     * Returns the bookseries
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Bookseries $bookseries
     */
    public function getBookseries()
    {
        return $this->bookseries;
    }

    /**
     * Sets the bookseries
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Bookseries $bookseries
     * @return void
     */
    public function setBookseries(\Cw\Extbookdatabase\Domain\Model\Bookseries $bookseries)
    {
        $this->bookseries = $bookseries;
    }

    /**
     * Returns the personborrowed
     * 
     * @return \Cw\Extbookdatabase\Domain\Model\Personborrowed $personborrowed
     */
    public function getPersonborrowed()
    {
        return $this->personborrowed;
    }

    /**
     * Sets the personborrowed
     * 
     * @param \Cw\Extbookdatabase\Domain\Model\Personborrowed $personborrowed
     * @return void
     */
    public function setPersonborrowed(\Cw\Extbookdatabase\Domain\Model\Personborrowed $personborrowed)
    {
        $this->personborrowed = $personborrowed;
    }

    /**
     * Returns the borroweddate
     * 
     * @return \DateTime borroweddate
     */
    public function getBorroweddate()
    {
        return $this->borroweddate;
    }

    /**
     * Sets the borroweddate
     * 
     * @param string $borroweddate
     * @return void
     */
    public function setBorroweddate($borroweddate)
    {
        $this->borroweddate = $borroweddate;
    }
}
