<?php
namespace Cw\Extbookdatabase\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Christoph Werner <info@itfoo.de>
 */
class CategoryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Cw\Extbookdatabase\Controller\CategoryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Cw\Extbookdatabase\Controller\CategoryController::class)
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
    public function listActionFetchesAllCategoriesFromRepositoryAndAssignsThemToView()
    {

        $allCategories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCategories));
        $this->inject($this->subject, 'categoryRepository', $categoryRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('categories', $allCategories);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCategoryToView()
    {
        $category = new \Cw\Extbookdatabase\Domain\Model\Category();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('category', $category);

        $this->subject->showAction($category);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCategoryToCategoryRepository()
    {
        $category = new \Cw\Extbookdatabase\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('add')->with($category);
        $this->inject($this->subject, 'categoryRepository', $categoryRepository);

        $this->subject->createAction($category);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCategoryToView()
    {
        $category = new \Cw\Extbookdatabase\Domain\Model\Category();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('category', $category);

        $this->subject->editAction($category);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCategoryInCategoryRepository()
    {
        $category = new \Cw\Extbookdatabase\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('update')->with($category);
        $this->inject($this->subject, 'categoryRepository', $categoryRepository);

        $this->subject->updateAction($category);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCategoryFromCategoryRepository()
    {
        $category = new \Cw\Extbookdatabase\Domain\Model\Category();

        $categoryRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryRepository->expects(self::once())->method('remove')->with($category);
        $this->inject($this->subject, 'categoryRepository', $categoryRepository);

        $this->subject->deleteAction($category);
    }
}
