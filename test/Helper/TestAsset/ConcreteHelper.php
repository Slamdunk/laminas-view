<?php

/**
 * @see       https://github.com/laminas/laminas-view for the canonical source repository
 * @copyright https://github.com/laminas/laminas-view/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-view/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\View\Helper\TestAsset;

use Laminas\View\Helper\AbstractHelper;

class ConcreteHelper extends AbstractHelper
{
    public function __invoke($output)
    {
        return $output;
    }
}
