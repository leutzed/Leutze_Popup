<?php declare(strict_types=1);

namespace Leutze\Popup\Ui\Source\Listing\Column;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class IsActive
 */
class IsActive implements OptionSourceInterface {
    private const ENABLED = 1;
    private const DISABLED = 0;

    public function toOptionArray() {
        return [
            ['value' => self::ENABLED, 'label' => __('Enabled')],
            ['value' => self::DISABLED, 'label' => __('Disabled')]
        ];
    }
}
