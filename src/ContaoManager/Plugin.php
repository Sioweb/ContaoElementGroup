<?php

declare(strict_types=1);

/*
 * This file is part of Sioweb\ElementGroup.
 *
 * (c) Sascha Weidner
 *
 * @license LGPL-3.0-or-later
 */

namespace Sioweb\ElementGroup\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Sioweb\ElementGroup\SiowebElementGroup;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SiowebElementGroup::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
