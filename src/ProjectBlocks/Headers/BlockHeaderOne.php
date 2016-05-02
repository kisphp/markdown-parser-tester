<?php

namespace Project\ProjectBlocks\Headers;

use Kisphp\Blocks\Headers\BlockHeaderOne as CoreH1;

class BlockHeaderOne extends CoreH1
{
    /**
     * @return string
     */
    public function getStartTag()
    {
        return '<h1 class="header-h1">';
    }
}
