<?php
namespace Cw\Extbookdatabase\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class PublisherControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Controller\PublisherController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cw\Extbookdatabase\Controller\PublisherController::class)
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
    public function listActionFetchesAllPublishersFromRepositoryAndAssignsThemToView()
    {

        $allPublishers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $publisherRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $publisherRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPublishers));
        $this->inject($this->subject, 'publisherRepository', $publisherRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('publishers', $allPublishers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPublisherToView()
    {
        $publisher = new \Cw\Extbookdatabase\Domain\Model\Publisher();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('publisher', $publisher);

        $this->subject->showAction($publisher);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenPublisherToPublisherRepository()
    {
        $publisher = new \Cw\Extbookdatabase\Domain\Model\Publisher();

        $publisherRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $publisherRepository->expects(self::once())->method('add')->with($publisher);
        $this->inject($this->subject, 'publisherRepository', $publisherRepository);

        $this->subject->createAction($publisher);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenPublisherToView()
    {
        $publisher = new \Cw\Extbookdatabase\Domain\Model\Publisher();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('publisher', $publisher);

        $this->subject->editAction($publisher);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenPublisherInPublisherRepository()
    {
        $publisher = new \Cw\Extbookdatabase\Domain\Model\Publisher();

        $publisherRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $publisherRepository->expects(self::once())->method('update')->with($publisher);
        $this->inject($this->subject, 'publisherRepository', $publisherRepository);

        $this->subject->updateAction($publisher);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenPublisherFromPublisherRepository()
    {
        $publisher = new \Cw\Extbookdatabase\Domain\Model\Publisher();

        $publisherRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $publisherRepository->expects(self::once())->method('remove')->with($publisher);
        $this->inject($this->subject, 'publisherRepository', $publisherRepository);

        $this->subject->deleteAction($publisher);
    }
}
