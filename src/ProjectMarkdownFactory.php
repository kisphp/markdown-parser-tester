<?php

namespace Project;

use Kisphp\MarkdownFactory;

class ProjectMarkdownFactory extends MarkdownFactory
{
    protected function getAvailableNamespaces()
    {
        $projectNamespaces = [
            'Project\\ProjectBlocks\\',
            'Project\\ProjectBlocks\\Headers\\',
        ];

        $coreNamespaces = parent::getAvailableNamespaces();

        return array_merge($projectNamespaces, $coreNamespaces);
    }

    public static function createMarkdown()
    {
        $factory = new static();

        return new ProjectMarkdown($factory);
    }
}
