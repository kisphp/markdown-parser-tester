<?php

namespace Project\Tests;

use Symfony\Component\Finder\Finder;

class BlockParserTest extends AbstractProjectTest
{
    /**
     * @dataProvider getFilesList
     *
     * @param string $filename
     */
    public function testBlockCode($filename)
    {
        $text = $this->getFileContent($filename . '.md');
        $html = $this->getFileContent($filename . '.html');

        $this->assertSame($html, $this->markdown->parse($text));
    }

    /**
     * @return array
     */
    public function getFilesList()
    {
        $data = [];

        $finder = new Finder();
        $finder->files()
            ->name('*.md')
            ->in(__DIR__ . self::DIRECTORY)
        ;

        foreach ($finder as $file) {
            $data[] = [
                str_replace('.md', '', $file->getFilename()),
            ];
        }

        return $data;
    }
}
