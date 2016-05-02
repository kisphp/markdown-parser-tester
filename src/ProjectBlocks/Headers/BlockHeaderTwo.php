<?php

namespace Project\ProjectBlocks\Headers;

use Kisphp\Blocks\Headers\BlockHeaderTwo as CoreH2;

class BlockHeaderTwo extends CoreH2
{
    /**
     * @return string
     */
    public function getStartTag()
    {
        return '<h2 class="header-h2">';
    }
}
