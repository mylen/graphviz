<?php
/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

class ClusterFactory implements Factory
{
    /**
     * @param Factory $what
     * @param string $id
     * @throws Exception if graph type is unkwown
     * @return \Mylen\GraphViz\Spring\Neato\Cluster|\Mylen\GraphViz\Circular\Circo\Cluster|\Mylen\GraphViz\Hierarchical\Dot\Cluster|\Mylen\GraphViz\Spring\Fdp\Cluster|\Mylen\GraphViz\Spring\Fdp\Sfdp\Cluster|\Mylen\GraphViz\Radial\Twopi\Cluster
     */
    public static function create($format, $id)
    {
        switch ($format) {
            case Format::NEATO:
                return new \Mylen\GraphViz\Spring\Neato\Cluster($id);
            case Format::CIRCO:
                return new \Mylen\GraphViz\Circular\Circo\Cluster($id);
            case Format::DOT:
                return new \Mylen\GraphViz\Hierarchical\Dot\Cluster($id);
            case Format::FDP:
                return new \Mylen\GraphViz\Spring\Fdp\Cluster($id);
            case Format::SFDP:
                return new \Mylen\GraphViz\Spring\Fdp\Sfdp\Cluster($id);
            case Format::TWOPI:
                return new \Mylen\GraphViz\Radial\Twopi\Cluster($id);
            default:
                throw new Exception('uknown Graphviz format: ' . $what);
                break;
        }
    }
}
