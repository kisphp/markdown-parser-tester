<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockHorizontalRule as CoreHR;

class BlockHorizontalRule extends CoreHR
{
    /**
     * @return string
     */
    public function parse()
    {
        return $this->getStartTag() . $this->getEndTag();
    }

    /**
     * @return string
     */
    public function getStartTag()
    {
        return '<div class="horizontal-rule">';
    }

    /**
     * @return string
     */
    public function getEndTag()
    {
        return '</div>';
    }
}
