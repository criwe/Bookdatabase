<?php
namespace Itfoo\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Itfoo\Extbookdatabase\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Itfoo\Extbookdatabase\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForStringSetsCategory()
    {
        $this->subject->setCategory('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryshortcutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategoryshortcut()
        );
    }

    /**
     * @test
     */
    public function setCategoryshortcutForStringSetsCategoryshortcut()
    {
        $this->subject->setCategoryshortcut('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'categoryshortcut',
            $this->subject
        );
    }
}
