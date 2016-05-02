<?php

namespace Project\ProjectBlocks\Headers;

use Kisphp\Blocks\Headers\BlockHeader as CoreBlockHeader;

class BlockHeader extends CoreBlockHeader
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function getStartTag($number = 1)
    {
        return '<h' . (int) $number . ' class="header">';
    }
}
