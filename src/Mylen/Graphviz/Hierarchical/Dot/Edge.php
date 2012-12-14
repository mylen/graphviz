<?php
namespace Mylen\GraphViz\Hierarchical\Dot;

use Mylen\GraphViz\Attributes\Showboxes;
use Mylen\GraphViz\Attributes\Sametail;
use Mylen\GraphViz\Attributes\Samehead;
use Mylen\GraphViz\Attributes\Minlen;
use Mylen\GraphViz\Attributes\Ltail;
use Mylen\GraphViz\Attributes\Lhead;
use Mylen\GraphViz\Attributes\Constraint;

use Mylen\GraphViz\Edge as BaseEdge;

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
