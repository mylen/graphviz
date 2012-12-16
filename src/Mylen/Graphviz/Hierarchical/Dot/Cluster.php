<?php
namespace Mylen\GraphViz\Hierarchical\Dot;

use Mylen\GraphViz\Cluster as BaseCluster;

/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }
}
