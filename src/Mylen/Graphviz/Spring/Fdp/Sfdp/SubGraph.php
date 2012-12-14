<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Sfdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
