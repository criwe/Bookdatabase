<?php
namespace Cw\ExtBookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class BookTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\ExtBookdatabase\Domain\Model\Book
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cw\ExtBookdatabase\Domain\Model\Book();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTranslatorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTranslator()
        );
    }

    /**
     * @test
     */
    public function setTranslatorForStringSetsTranslator()
    {
        $this->subject->setTranslator('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'translator',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIsbnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIsbn()
        );
    }

    /**
     * @test
     */
    public function setIsbnForStringSetsIsbn()
    {
        $this->subject->setIsbn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'isbn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublishingyearReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPublishingyear()
        );
    }

    /**
     * @test
     */
    public function setPublishingyearForStringSetsPublishingyear()
    {
        $this->subject->setPublishingyear('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'publishingyear',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEditionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEdition()
        );
    }

    /**
     * @test
     */
    public function setEditionForStringSetsEdition()
    {
        $this->subject->setEdition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'edition',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKeywordsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKeywords()
        );
    }

    /**
     * @test
     */
    public function setKeywordsForStringSetsKeywords()
    {
        $this->subject->setKeywords('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'keywords',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSignedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getSigned()
        );
    }

    /**
     * @test
     */
    public function setSignedForBoolSetsSigned()
    {
        $this->subject->setSigned(true);

        self::assertAttributeEquals(
            true,
            'signed',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSoldoutReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getSoldout()
        );
    }

    /**
     * @test
     */
    public function setSoldoutForBoolSetsSoldout()
    {
        $this->subject->setSoldout(true);

        self::assertAttributeEquals(
            true,
            'soldout',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBorroweddateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBorroweddate()
        );
    }

    /**
     * @test
     */
    public function setBorroweddateForDateTimeSetsBorroweddate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBorroweddate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'borroweddate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublisherReturnsInitialValueForPublisher()
    {
        self::assertEquals(
            null,
            $this->subject->getPublisher()
        );
    }

    /**
     * @test
     */
    public function setPublisherForPublisherSetsPublisher()
    {
        $publisherFixture = new \Cw\ExtBookdatabase\Domain\Model\Publisher();
        $this->subject->setPublisher($publisherFixture);

        self::assertAttributeEquals(
            $publisherFixture,
            'publisher',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForObjectStorageContainingCategorySetsCategory()
    {
        $category = new \Cw\ExtBookdatabase\Domain\Model\Category();
        $objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCategory->attach($category);
        $this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCategory,
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCategoryToObjectStorageHoldingCategory()
    {
        $category = new \Cw\ExtBookdatabase\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->addCategory($category);
    }

    /**
     * @test
     */
    public function removeCategoryFromObjectStorageHoldingCategory()
    {
        $category = new \Cw\ExtBookdatabase\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->removeCategory($category);
    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForLocation()
    {
        self::assertEquals(
            null,
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForLocationSetsLocation()
    {
        $locationFixture = new \Cw\ExtBookdatabase\Domain\Model\Location();
        $this->subject->setLocation($locationFixture);

        self::assertAttributeEquals(
            $locationFixture,
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOwnerReturnsInitialValueForOwner()
    {
        self::assertEquals(
            null,
            $this->subject->getOwner()
        );
    }

    /**
     * @test
     */
    public function setOwnerForOwnerSetsOwner()
    {
        $ownerFixture = new \Cw\ExtBookdatabase\Domain\Model\Owner();
        $this->subject->setOwner($ownerFixture);

        self::assertAttributeEquals(
            $ownerFixture,
            'owner',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForType()
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForTypeSetsType()
    {
        $typeFixture = new \Cw\ExtBookdatabase\Domain\Model\Type();
        $this->subject->setType($typeFixture);

        self::assertAttributeEquals(
            $typeFixture,
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLanguageReturnsInitialValueForLanguage()
    {
        self::assertEquals(
            null,
            $this->subject->getLanguage()
        );
    }

    /**
     * @test
     */
    public function setLanguageForLanguageSetsLanguage()
    {
        $languageFixture = new \Cw\ExtBookdatabase\Domain\Model\Language();
        $this->subject->setLanguage($languageFixture);

        self::assertAttributeEquals(
            $languageFixture,
            'language',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookconditionReturnsInitialValueForBookcondition()
    {
        self::assertEquals(
            null,
            $this->subject->getBookcondition()
        );
    }

    /**
     * @test
     */
    public function setBookconditionForBookconditionSetsBookcondition()
    {
        $bookconditionFixture = new \Cw\ExtBookdatabase\Domain\Model\Bookcondition();
        $this->subject->setBookcondition($bookconditionFixture);

        self::assertAttributeEquals(
            $bookconditionFixture,
            'bookcondition',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookseriesReturnsInitialValueForBookseries()
    {
        self::assertEquals(
            null,
            $this->subject->getBookseries()
        );
    }

    /**
     * @test
     */
    public function setBookseriesForBookseriesSetsBookseries()
    {
        $bookseriesFixture = new \Cw\ExtBookdatabase\Domain\Model\Bookseries();
        $this->subject->setBookseries($bookseriesFixture);

        self::assertAttributeEquals(
            $bookseriesFixture,
            'bookseries',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPersonborrowedReturnsInitialValueForPersonborrowed()
    {
        self::assertEquals(
            null,
            $this->subject->getPersonborrowed()
        );
    }

    /**
     * @test
     */
    public function setPersonborrowedForPersonborrowedSetsPersonborrowed()
    {
        $personborrowedFixture = new \Cw\ExtBookdatabase\Domain\Model\Personborrowed();
        $this->subject->setPersonborrowed($personborrowedFixture);

        self::assertAttributeEquals(
            $personborrowedFixture,
            'personborrowed',
            $this->subject
        );
    }
}
