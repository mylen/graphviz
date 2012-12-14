<?php
namespace Mylen\GraphViz\Spring\Neato;

use Mylen\GraphViz\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
