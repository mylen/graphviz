<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Hierarchical\Dot;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Showboxes;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Sametail;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Samehead;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Minlen;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Ltail;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Lhead;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Constraint;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Edge as BaseEdge;

class Edge extends BaseEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

    /**
    * @param Constraint constraint
    * @return Edge
    */
    public function setConstraint(Constraint $constraint)
    {
        $this->attribute($constraint->getName(), $constraint->getValue());
        return $this;
    }

    /**
    * @param Lhead lhead
    * @return Edge
    */
    public function setLhead(Lhead $lhead)
    {
        $this->attribute($lhead->getName(), $lhead->getValue());
        return $this;
    }

    /**
    * @param Ltail ltail
    * @return Edge
    */
    public function setLtail(Ltail $ltail)
    {
        $this->attribute($ltail->getName(), $ltail->getValue());
        return $this;
    }

    /**
    * @param Minlen minlen
    * @return Edge
    */
    public function setMinlen(Minlen $minlen)
    {
        $this->attribute($minlen->getName(), $minlen->getValue());
        return $this;
    }

    /**
    * @param Samehead samehead
    * @return Edge
    */
    public function setSamehead(Samehead $samehead)
    {
        $this->attribute($samehead->getName(), $samehead->getValue());
        return $this;
    }

    /**
    * @param Sametail sametail
    * @return Edge
    */
    public function setSametail(Sametail $sametail)
    {
        $this->attribute($sametail->getName(), $sametail->getValue());
        return $this;
    }

    /**
    * @param Showboxes showboxes
    * @return Edge
    */
    public function setShowboxes(Showboxes $showboxes)
    {
        $this->attribute($showboxes->getName(), $showboxes->getValue());
        return $this;
    }
}
