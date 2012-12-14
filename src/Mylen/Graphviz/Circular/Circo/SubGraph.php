<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Circular\Circo;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
