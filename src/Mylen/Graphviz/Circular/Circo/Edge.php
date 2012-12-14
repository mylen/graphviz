<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Circular\Circo;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

}
