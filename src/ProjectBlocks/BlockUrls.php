<?php

namespace Project\ProjectBlocks;

use Kisphp\Blocks\BlockUrls as CoreBlockUrls;

class BlockUrls extends CoreBlockUrls
{
    public function getStartTag($targetBlank = false)
    {
        $htmlUrl = '<a class="test-url" href="{url}" title="{title}"';
        if ($targetBlank === true) {
            $htmlUrl .= ' target="_blank"';
        }
        $htmlUrl .= '>{text}';

        return $htmlUrl;
    }
}
