<?php
namespace Mylen\GraphViz\Circular\Circo;

use Mylen\GraphViz\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
