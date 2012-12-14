<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Sfdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }    
}
