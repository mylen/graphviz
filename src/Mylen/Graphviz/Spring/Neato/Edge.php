<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Neato;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Len;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Edge as BaseEdge;

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