<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Sfdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

}
