<?php
/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

class NodeFactory implements Factory
{
    /**
     * @param Factory $what
     * @param string $id
     * @throws Exception if graph type is unkwown
     * @return \Mylen\GraphViz\Spring\Neato\Node|\Mylen\GraphViz\Circular\Circo\Node|\Mylen\GraphViz\Hierarchical\Dot\Node|\Mylen\GraphViz\Spring\Fdp\Node|\Mylen\GraphViz\Spring\Fdp\Sfdp\Node|\Mylen\GraphViz\Radial\Twopi\Node
     */
    public static function create($format, $id)
    {
        switch ($format) {
            case Format::NEATO:
                return new \Mylen\GraphViz\Spring\Neato\Node($id);
            case Format::CIRCO:
                return new \Mylen\GraphViz\Circular\Circo\Node($id);
            case Format::DOT:
                return new \Mylen\GraphViz\Hierarchical\Dot\Node($id);
            case Format::FDP:
                return new \Mylen\GraphViz\Spring\Fdp\Node($id);
            case Format::SFDP:
                return new \Mylen\GraphViz\Spring\Fdp\Sfdp\Node($id);
            case Format::TWOPI:
                return new \Mylen\GraphViz\Radial\Twopi\Node($id);
            default:
                throw new Exception('uknown Graphviz format: ' . $what);
                break;
        }
    }
}
