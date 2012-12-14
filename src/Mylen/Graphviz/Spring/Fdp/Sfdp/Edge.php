<?php
namespace Mylen\GraphViz\Spring\Fdp\Sfdp;

use Mylen\GraphViz\Spring\Fdp\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

}
