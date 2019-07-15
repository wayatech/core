<?php

namespace ApiPlatform\Core\Event;

use Symfony\Component\EventDispatcher\Event;

class ContextEvent extends Event
{
    public const NAME = 'api-platform.context';

    public $normalizationContext;
    public $denormalizationContext;

    public function __construct(&$normalizationContext, &$denormalizationContext)
    {
        $this->normalizationContext = &$normalizationContext;
        $this->denormalizationContext = &$denormalizationContext;
    }
}