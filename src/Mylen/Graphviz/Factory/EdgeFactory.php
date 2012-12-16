<?php
/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

class EdgeFactory implements Factory
{
    /**
     * @param Factory $what
     * @param array $list
     * @throws Exception if graph type is unkwown
     * @return \Mylen\GraphViz\Spring\Neato\Edge|\Mylen\GraphViz\Circular\Circo\Edge|\Mylen\GraphViz\Hierarchical\Dot\Edge|\Mylen\GraphViz\Spring\Fdp\Edge|\Mylen\GraphViz\Spring\Fdp\Sfdp\Edge|\Mylen\GraphViz\Radial\Twopi\Edge
     */
    public static function create($format, $list)
    {
        switch ($format) {
            case Format::NEATO:
                return new \Mylen\GraphViz\Spring\Neato\Edge($list);
            case Format::CIRCO:
                return new \Mylen\GraphViz\Circular\Circo\Edge($list);
            case Format::DOT:
                return new \Mylen\GraphViz\Hierarchical\Dot\Edge($list);
            case Format::FDP:
                return new \Mylen\GraphViz\Spring\Fdp\Edge($list);
            case Format::SFDP:
                return new \Mylen\GraphViz\Spring\Fdp\Sfdp\Edge($list);
            case Format::TWOPI:
                return new \Mylen\GraphViz\Radial\Twopi\Edge($list);
            default:
                throw new Exception('uknown Graphviz format: ' . $what);
                break;
        }
    }
}
