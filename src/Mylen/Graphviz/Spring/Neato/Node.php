<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Neato;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Pin;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Node as BaseNode;

class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }
    
    /**
     * @param Pin pin
     * @return Node
     */
    public function setPin(Pin $pin)
    {
        $this->attribute($pin->getName(), $pin->getValue());
        return $this;
    }
    
}
