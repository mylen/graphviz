<?php
/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

class SubGraphFactory
{
    /**
     * @param Factory $what
     * @param string $id
     * @throws Exception if graph type is unkwown
     * @return \Mylen\GraphViz\Spring\Neato\SubGraph|\Mylen\GraphViz\Circular\Circo\SubGraph|\Mylen\GraphViz\Hierarchical\Dot\SubGraph|\Mylen\GraphViz\Spring\Fdp\SubGraph|\Mylen\GraphViz\Spring\Fdp\Sfdp\SubGraph|\Mylen\GraphViz\Radial\Twopi\SubGraph
     */
    public static function create($format, $id)
    {
        switch ($format) {
            case Format::NEATO:
                return new \Mylen\GraphViz\Spring\Neato\SubGraph($id);
            case Format::CIRCO:
                return new \Mylen\GraphViz\Circular\Circo\SubGraph($id);
            case Format::DOT:
                return new \Mylen\GraphViz\Hierarchical\Dot\SubGraph($id);
            case Format::FDP:
                return new \Mylen\GraphViz\Spring\Fdp\SubGraph($id);
            case Format::SFDP:
                return new \Mylen\GraphViz\Spring\Fdp\Sfdp\SubGraph($id);
            case Format::TWOPI:
                return new \Mylen\GraphViz\Radial\Twopi\SubGraph($id);
            default:
                throw new Exception('uknown Graphviz format: ' . $what);
                break;
        }
    }
}
