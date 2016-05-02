<?php

namespace Project\ProjectBlocks\Lists;

use Kisphp\Blocks\Lists\Tree\Builder;
use Kisphp\Blocks\Lists\Tree\ItemInterface;

class ListBuilder extends Builder
{
    /**
     * @param ItemInterface $item
     *
     * @return string
     */
    public function createListStartTag(ItemInterface $item)
    {
        return '<' . $item->getListType() . ' class="list">' . "\n";
    }

    /**
     * @return string
     */
    public function createListItemStartTag()
    {
        return '<li class="list-item">';
    }
}