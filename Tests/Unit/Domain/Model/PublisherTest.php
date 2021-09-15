<?php
namespace Itfoo\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class PublisherTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Itfoo\Extbookdatabase\Domain\Model\Publisher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Itfoo\Extbookdatabase\Domain\Model\Publisher();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPublisherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPublisher()
        );
    }

    /**
     * @test
     */
    public function setPublisherForStringSetsPublisher()
    {
        $this->subject->setPublisher('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'publisher',
            $this->subject
        );
    }
}
