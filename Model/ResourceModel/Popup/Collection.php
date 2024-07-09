<?php declare(strict_types=1);

namespace Leutze\Popup\Model\ResourceModel\Popup;

use Leutze\Popup\Model\Popup;
use Leutze\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
    protected function _construct() {
        $this->_init(Popup::class, PopupResource::class);
    }
}