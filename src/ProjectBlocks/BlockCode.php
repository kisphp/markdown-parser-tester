<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockCode as CoreBlockCode;

class BlockCode extends CoreBlockCode
{
    public function getStartTag($class = null)
    {
        $tagClass = ' class="text-info';
        if (!empty($class) && is_string($class)) {
            $tagClass .= ' language-' . $class;
        }
        $tagClass .= '"';

        return '<pre><code' . $tagClass . '>';
    }
}
