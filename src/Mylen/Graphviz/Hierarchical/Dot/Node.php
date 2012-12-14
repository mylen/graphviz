<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Hierarchical\Dot;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Showboxes;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Ordering;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Group;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Node as BaseNode;

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