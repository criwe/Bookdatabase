<?php
namespace Cw\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Domain\Model\Location
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cw\Extbookdatabase\Domain\Model\Location();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLocationitemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocationitem()
        );
    }

    /**
     * @test
     */
    public function setLocationitemForStringSetsLocationitem()
    {
        $this->subject->setLocationitem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locationitem',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocationshortcutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocationshortcut()
        );
    }

    /**
     * @test
     */
    public function setLocationshortcutForStringSetsLocationshortcut()
    {
        $this->subject->setLocationshortcut('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locationshortcut',
            $this->subject
        );
    }
}
