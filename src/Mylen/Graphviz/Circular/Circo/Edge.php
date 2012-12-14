<?php
namespace Mylen\GraphViz\Circular\Circo;

use Mylen\GraphViz\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

}
