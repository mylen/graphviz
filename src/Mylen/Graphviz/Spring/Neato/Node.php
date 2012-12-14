<?php
namespace Mylen\GraphViz\Spring\Neato;

use Mylen\GraphViz\Attributes\Pin;

use Mylen\GraphViz\Node as BaseNode;

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
