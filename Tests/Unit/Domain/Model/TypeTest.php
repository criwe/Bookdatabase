<?php
namespace Cw\ExtBookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class TypeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\ExtBookdatabase\Domain\Model\Type
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cw\ExtBookdatabase\Domain\Model\Type();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTypeitemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTypeitem()
        );
    }

    /**
     * @test
     */
    public function setTypeitemForStringSetsTypeitem()
    {
        $this->subject->setTypeitem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typeitem',
            $this->subject
        );
    }
}
