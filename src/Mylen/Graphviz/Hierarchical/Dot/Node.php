<?php
namespace Mylen\GraphViz\Hierarchical\Dot;

use Mylen\GraphViz\Attributes\Showboxes;
use Mylen\GraphViz\Attributes\Ordering;
use Mylen\GraphViz\Attributes\Group;

use Mylen\GraphViz\Node as BaseNode;

/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }

    /**
    * @param Group group
    * @return Node
    */
    public function setGroup(Group $group)
    {
        $this->attribute($group->getName(), $group->getValue());
        return $this;
    }

    /**
    * @param Ordering ordering
    * @return Node
    */
    public function setOrdering(Ordering $ordering)
    {
        $this->attribute($ordering->getName(), $ordering->getValue());
        return $this;
    }

    /**
    * @param Showboxes showboxes
    * @return Node
    */
    public function setShowboxes(Showboxes $showboxes)
    {
        $this->attribute($showboxes->getName(), $showboxes->getValue());
        return $this;
    }
}
