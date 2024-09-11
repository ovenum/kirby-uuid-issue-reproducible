<?php

use Kirby\Cms\Page;
use Kirby\Toolkit\Collection;

class TestPage extends Page
{
    public function relatedPagesPanel(): Collection {

        /**
         * Calling uuid() will cause the issue when this method is called from
         * from test-fields value property.
         *
         * @see /site/plugins/test/index.php:14
         */

        $this->uuid()->toString();

        // For testing just return an empty collection
        return new Collection();
    }
}
