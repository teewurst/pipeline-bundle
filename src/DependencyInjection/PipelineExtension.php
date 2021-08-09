<?php

declare(strict_types=1);

namespace Teewurst\PipelineBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use teewurst\Pipeline\PipelineService;

final class PipelineExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $container->register(PipelineService::class, PipelineService::class);
    }
}
