<?php declare(strict_types=1);

namespace Leutze\Popup\Model;

use Leutze\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\AbstractModel;

class Popup extends AbstractModel {
    protected function _construct() {
        $this->_init(PopupResource::class);
    }
}