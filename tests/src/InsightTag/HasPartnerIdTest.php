<?php

namespace ByTIC\LinkedIn\Tests\InsightTag;

use ByTIC\LinkedIn\InsightTag;
use ByTIC\LinkedIn\Tests\AbstractTest;

/**
 * Class HasPartnerIdTest
 * @package ByTIC\LinkedIn\Tests\InsightTag
 */
class HasPartnerIdTest extends AbstractTest
{
    public function test_setPartnerId()
    {
        $tag = new InsightTag();

        static::assertNull($tag->getPartnerId());

        $tag->setPartnerId('11111');

        static::assertSame('11111', $tag->getPartnerId());
    }
}
