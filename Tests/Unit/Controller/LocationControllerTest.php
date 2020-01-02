<?php
namespace Cw\Extbookdatabase\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class LocationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Controller\LocationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cw\Extbookdatabase\Controller\LocationController::class)
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
    public function listActionFetchesAllLocationsFromRepositoryAndAssignsThemToView()
    {

        $allLocations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $locationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $locationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLocations));
        $this->inject($this->subject, 'locationRepository', $locationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('locations', $allLocations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLocationToView()
    {
        $location = new \Cw\Extbookdatabase\Domain\Model\Location();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('location', $location);

        $this->subject->showAction($location);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenLocationToLocationRepository()
    {
        $location = new \Cw\Extbookdatabase\Domain\Model\Location();

        $locationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $locationRepository->expects(self::once())->method('add')->with($location);
        $this->inject($this->subject, 'locationRepository', $locationRepository);

        $this->subject->createAction($location);
    }
}
