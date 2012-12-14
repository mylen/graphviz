<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\K;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }
    
    /**
     * @param K K
     * @return Cluster
     */
    public function setK(K $K)
    {
        $this->set($K->getName(), $K->getValue());
        return $this;
    }
    
}