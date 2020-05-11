<?php

namespace ByTIC\LinkedIn\InsightTag;

/**
 * Trait HasPartnerId
 * @package ByTIC\LinkedIn\LinkedIn
 */
trait HasPartnerId
{
    /**
     * @var int
     */
    protected $partnerId;

    /**
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param int $partnerId
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
    }
}
