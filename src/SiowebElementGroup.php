<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Sioweb\ElementGroup;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sioweb\ElementGroup\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class SiowebElementGroup extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new Extension();
    }
}
