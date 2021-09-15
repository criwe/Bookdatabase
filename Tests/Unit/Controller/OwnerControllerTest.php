<?php
namespace Itfoo\Extbookdatabase\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class OwnerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Itfoo\Extbookdatabase\Controller\OwnerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Itfoo\Extbookdatabase\Controller\OwnerController::class)
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
    public function listActionFetchesAllOwnersFromRepositoryAndAssignsThemToView()
    {

        $allOwners = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $ownerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $ownerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOwners));
        $this->inject($this->subject, 'ownerRepository', $ownerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('owners', $allOwners);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOwnerToView()
    {
        $owner = new \Itfoo\Extbookdatabase\Domain\Model\Owner();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('owner', $owner);

        $this->subject->showAction($owner);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenOwnerToOwnerRepository()
    {
        $owner = new \Itfoo\Extbookdatabase\Domain\Model\Owner();

        $ownerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $ownerRepository->expects(self::once())->method('add')->with($owner);
        $this->inject($this->subject, 'ownerRepository', $ownerRepository);

        $this->subject->createAction($owner);
    }
}
