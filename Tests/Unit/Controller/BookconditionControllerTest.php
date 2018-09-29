<?php
namespace Cw\ExtBookdatabase\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class BookconditionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\ExtBookdatabase\Controller\BookconditionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cw\ExtBookdatabase\Controller\BookconditionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBookconditionToBookconditionRepository()
    {
        $bookcondition = new \Cw\ExtBookdatabase\Domain\Model\Bookcondition();

        $bookconditionRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookconditionRepository->expects(self::once())->method('add')->with($bookcondition);
        $this->inject($this->subject, 'bookconditionRepository', $bookconditionRepository);

        $this->subject->createAction($bookcondition);
    }
}
