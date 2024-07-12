<?php declare(strict_types=1);

namespace Leutze\Popup\Controller\Adminhtml\Popup;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;

class Index extends Action {
  public function execute(): ResultInterface {
    /** @var Page $page */
    $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

    $page->setActiveMenu('Leutze_Popup::popup');
    $page->addBreadcrumb(__('Popups'), __('Popups'));
    $page->addBreadcrumb(__('Manage Popups'), __('Manage Popups'));
    $page->getConfig()->getTitle()->prepend(__('Popup'));

    return $page;
  }
}
