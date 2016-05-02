<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockQuote as CoreBlockQuote;

class BlockQuote extends CoreBlockQuote
{
    public function getStartTag()
    {
        return '<blockquote class="project-blockquote">';
    }
}