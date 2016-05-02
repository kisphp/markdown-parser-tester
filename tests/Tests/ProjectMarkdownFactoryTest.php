<?php

namespace Project\Tests;

use Project\ProjectMarkdownFactory;

class ProjectMarkdownFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testNewNamespace()
    {
        $markdown = ProjectMarkdownFactory::createMarkdown();
    }
}
