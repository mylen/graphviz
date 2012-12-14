<?php
namespace Mylen\GraphViz\Spring\Fdp\Sfdp;

use Mylen\GraphViz\Spring\Fdp\Node as BaseNode;

class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }    
}
