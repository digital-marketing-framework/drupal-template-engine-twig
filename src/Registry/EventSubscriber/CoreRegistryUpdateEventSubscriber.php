<?php

namespace Drupal\dmf_template_engine_twig\Registry\EventSubscriber;

use DigitalMarketingFramework\TemplateEngineTwig\TemplateEngineTwigInitialization;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

/**
 * Event subscriber for initializing the Twig template engine.
 */
class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(new TemplateEngineTwigInitialization('dmf_template_engine_twig'));
    }
}