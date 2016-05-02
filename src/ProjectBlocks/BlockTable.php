<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockTable as CoreBlockTable;

class BlockTable extends CoreBlockTable
{
    public function getStartTableTag()
    {
        return '<table class="table-class">' . "\n";
    }

    protected function getTableRowStartTag()
    {
        return '<tr class="table-row">' . "\n";
    }

    protected function getTableColumnStartTag($rowIndex, $isTableHeader = false)
    {
        $rowMetaData = $this->getCompiledRowMetaData($rowIndex);

        if ($isTableHeader === true) {
            return '<th' . $rowMetaData . '>';
        }

        return '<td' . $rowMetaData . '>';
    }

    protected function createColumnMetaDataArray($alignment)
    {
        return [
            'class' => 'text-' . $alignment,
        ];
    }

}