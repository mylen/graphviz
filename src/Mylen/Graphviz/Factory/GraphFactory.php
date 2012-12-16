<?php
/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

class GraphFactory 
{
    /**
     * @param Factory $what
     * @param string $îd
     * @throws Exception if graph type is unkwown
     * @return \Mylen\GraphViz\Spring\Neato\Graph|\Mylen\GraphViz\Circular\Circo\Graph|\Mylen\GraphViz\Hierarchical\Dot\Graph|\Mylen\GraphViz\Spring\Fdp\Graph|\Mylen\GraphViz\Spring\Fdp\Sfdp\Graph|\Mylen\GraphViz\Radial\Twopi\Graph
     */
    public static function create($format, $id)
    {
        switch ($format) {
            case Format::NEATO:
                return new \Mylen\GraphViz\Spring\Neato\Graph($id);
            case Format::CIRCO:
                return new \Mylen\GraphViz\Circular\Circo\Graph($id);
            case Format::DOT:
                return new \Mylen\GraphViz\Hierarchical\Dot\Graph($id);
            case Format::FDP:
                return new \Mylen\GraphViz\Spring\Fdp\Graph($id);
            case Format::SFDP:
                return new \Mylen\GraphViz\Spring\Fdp\Sfdp\Graph($id);
            case Format::TWOPI:
                return new \Mylen\GraphViz\Radial\Twopi\Graph($id);
            default:
                throw new Exception('uknown Graphviz format: ' . $what);
                break;
        }
    }
}
