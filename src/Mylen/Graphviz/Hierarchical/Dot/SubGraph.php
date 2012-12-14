<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Hierarchical\Dot;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Rank;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }

    /**
    * @param Rank rank
    * @return SubGraph
    */
    public function setRank(Rank $rank)
    {
        $this->set($rank->getName(), $rank->getValue());
        return $this;
    }
}