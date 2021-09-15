<?php
namespace Itfoo\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class BookconditionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Itfoo\Extbookdatabase\Domain\Model\Bookcondition
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Itfoo\Extbookdatabase\Domain\Model\Bookcondition();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getConditionitemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConditionitem()
        );
    }

    /**
     * @test
     */
    public function setConditionitemForStringSetsConditionitem()
    {
        $this->subject->setConditionitem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'conditionitem',
            $this->subject
        );
    }
}
