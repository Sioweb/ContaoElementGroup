<?php

namespace Sioweb\ElementGroup\EventListener;

use Sioweb\ElementGroup\Element\ElementGroupStart;
use Sioweb\ElementGroup\Element\ElementGroupSeparator;
use Sioweb\ElementGroup\Element\ElementGroupStop;

class System
{
    public function onInitializeSystem()
    {
        $GLOBALS['TL_WRAPPERS']['start'][] = 'swGroupStart';
        $GLOBALS['TL_WRAPPERS']['separator'][] = 'swGroupSeparator';
        $GLOBALS['TL_WRAPPERS']['stop'][] = 'swGroupStop';
        $GLOBALS['TL_CTE']['sioweb']['swGroupStart'] = ElementGroupStart::class;
        $GLOBALS['TL_CTE']['sioweb']['swGroupSeparator'] = ElementGroupSeparator::class;
        $GLOBALS['TL_CTE']['sioweb']['swGroupStop'] = ElementGroupStop::class;
    }
}
