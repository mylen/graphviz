<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Pin;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Levels;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Node as BaseNode;

class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }
    
    /**
     * @param Levels levels
     * @return Node
     */
    public function setLevels(Levels $levels)
    {
        $this->attribute($levels->getName(), $levels->getValue());
        return $this;
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