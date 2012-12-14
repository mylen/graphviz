<?php
namespace Mylen\GraphViz\Spring\Fdp\Sfdp;

use Mylen\GraphViz\Spring\Fdp\SubGraph as BaseSubgraph;

class SubGraph extends BaseSubgraph
{

    public static function create($id)
    {
        return new SubGraph($id);
    }
}
