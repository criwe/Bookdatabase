<?php
namespace Itfoo\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class OwnerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Itfoo\Extbookdatabase\Domain\Model\Owner
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Itfoo\Extbookdatabase\Domain\Model\Owner();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOwneritemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOwneritem()
        );
    }

    /**
     * @test
     */
    public function setOwneritemForStringSetsOwneritem()
    {
        $this->subject->setOwneritem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'owneritem',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOwneritemshortcutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOwneritemshortcut()
        );
    }

    /**
     * @test
     */
    public function setOwneritemshortcutForStringSetsOwneritemshortcut()
    {
        $this->subject->setOwneritemshortcut('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'owneritemshortcut',
            $this->subject
        );
    }
}
