<?php

namespace Project\Tests;

use Project\ProjectMarkdown;
use Project\ProjectMarkdownFactory;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;

abstract class AbstractProjectTest extends \PHPUnit_Framework_TestCase
{
    const DIRECTORY = '/../data/';

    /**
     * @var ProjectMarkdown
     */
    protected $markdown;

    public function setUp()
    {
        $this->markdown = ProjectMarkdownFactory::createMarkdown();
    }

    /**
     * @param string $filename
     *
     * @return string
     */
    protected function getFileContent($filename)
    {
        $filePath = __DIR__ . self::DIRECTORY . $filename;

        if (is_file($filePath)) {
            return file_get_contents($filePath);
        }

        throw new FileNotFoundException('File "' . $filename . '" could not be found');
    }
}
