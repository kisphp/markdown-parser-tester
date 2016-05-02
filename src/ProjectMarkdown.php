<?php

namespace Project;

use Kisphp\Markdown;

class ProjectMarkdown extends Markdown
{
    const BLOCK_CUSTOM = 'BlockCustom';

    /**
     * @return $this
     */
    protected function createRules()
    {
        parent::createRules();

        $this->factory
            ->addBlockPlugin('^', self::BLOCK_CUSTOM)
        ;

        return $this;
    }
}
