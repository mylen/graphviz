<?php
namespace Mylen\GraphViz\Circular\Circo;

use Mylen\GraphViz\Attributes\Root;

use Mylen\GraphViz\Node as BaseNode;

class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }
    
    /**
     * @param Root root
     * @return Node
     */
    public function setRoot(Root $root)
    {
        $this->attribute($root->getName(), $root->getValue());
        return $this;
    }
    
}
