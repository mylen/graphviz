<?php
namespace Mylen\GraphViz\Hierarchical\Dot;

use Mylen\GraphViz\Attributes\Rank;
use Mylen\GraphViz\SubGraph as BaseSubgraph;

/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
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
