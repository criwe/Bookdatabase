<?php
namespace Cw\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class PersonborrowedTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Domain\Model\Personborrowed
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cw\Extbookdatabase\Domain\Model\Personborrowed();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPersonnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPersonname()
        );
    }

    /**
     * @test
     */
    public function setPersonnameForStringSetsPersonname()
    {
        $this->subject->setPersonname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'personname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPersonadressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPersonadress()
        );
    }

    /**
     * @test
     */
    public function setPersonadressForStringSetsPersonadress()
    {
        $this->subject->setPersonadress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'personadress',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPersonemailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPersonemail()
        );
    }

    /**
     * @test
     */
    public function setPersonemailForStringSetsPersonemail()
    {
        $this->subject->setPersonemail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'personemail',
            $this->subject
        );
    }
}
