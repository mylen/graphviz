<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Neato;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }

}
