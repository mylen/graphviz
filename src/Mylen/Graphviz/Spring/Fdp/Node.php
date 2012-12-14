<?php
namespace Mylen\GraphViz\Spring\Fdp;

use Mylen\GraphViz\Attributes\Pin;
use Mylen\GraphViz\Attributes\Levels;

use Mylen\GraphViz\Node as BaseNode;

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
