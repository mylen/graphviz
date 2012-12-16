<?php
namespace Mylen\GraphViz\Spring\Neato;

use Mylen\GraphViz\Subgraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
