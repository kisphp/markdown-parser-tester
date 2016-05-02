<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockQuote as CoreBlockQuote;

class BlockQuote extends CoreBlockQuote
{
    /**
     * @return string
     */
    public function getStartTag()
    {
        return '<blockquote class="project-blockquote">';
    }
}
