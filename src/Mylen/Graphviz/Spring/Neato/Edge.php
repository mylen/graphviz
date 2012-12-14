<?php
namespace Mylen\GraphViz\Spring\Neato;

use Mylen\GraphViz\Attributes\Len;
use Mylen\GraphViz\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }
    
    /**
     * @param Len len
     * @return Edge
     */
    public function setLen(Len $len)
    {
        $this->attribute($len->getName(), $len->getValue());
        return $this;
    }
    
}
