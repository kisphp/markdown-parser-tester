<?php

namespace Project\ProjectBlocks\Lists;

use Kisphp\Blocks\Lists\BlockList as CoreBlockList;

class BlockList extends CoreBlockList
{
    /**
     * @return ListBuilder
     */
    protected function createBuilder()
    {
        return new ListBuilder();
    }
}