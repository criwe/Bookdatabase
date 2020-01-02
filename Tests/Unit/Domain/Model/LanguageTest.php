<?php
namespace Cw\Extbookdatabase\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class LanguageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Domain\Model\Language
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Cw\Extbookdatabase\Domain\Model\Language();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLanguageitemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLanguageitem()
        );
    }

    /**
     * @test
     */
    public function setLanguageitemForStringSetsLanguageitem()
    {
        $this->subject->setLanguageitem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'languageitem',
            $this->subject
        );
    }
}
