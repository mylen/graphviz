<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Circular\Circo;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Root;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Node as BaseNode;

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
