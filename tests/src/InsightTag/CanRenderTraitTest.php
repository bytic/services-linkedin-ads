<?php

namespace ByTIC\LinkedIn\Tests\InsightTag;

use ByTIC\LinkedIn\InsightTag;
use ByTIC\LinkedIn\Tests\AbstractTest;

/**
 * Class CanRenderTraitTest
 * @package ByTIC\LinkedIn\Tests\InsightTag
 */
class CanRenderTraitTest extends AbstractTest
{

    public function test_setPartnerId()
    {
        $tag = new InsightTag();
        $tag->setPartnerId("1930410");

        static::assertSame(
            file_get_contents(TEST_FIXTURE_PATH.'/codes/base.html'),
            $tag->render()
        );
    }
}