<?php
namespace Mylen\GraphViz\Radial\Twopi;

use Mylen\GraphViz\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

}
