<?php
namespace Mylen\GraphViz\Hierarchical\Dot;

use Mylen\GraphViz\Attributes\Showboxes;
use Mylen\GraphViz\Attributes\Searchsize;
use Mylen\GraphViz\Attributes\Remincross;
use Mylen\GraphViz\Attributes\Ranksep;
use Mylen\GraphViz\Attributes\Rankdir;
use Mylen\GraphViz\Attributes\Ordering;
use Mylen\GraphViz\Attributes\Nslimit1;
use Mylen\GraphViz\Attributes\Nslimit;
use Mylen\GraphViz\Attributes\Mclimit;
use Mylen\GraphViz\Attributes\Compound;
use Mylen\GraphViz\Attributes\Clusterrank;
use Mylen\GraphViz\Attributes\Aspect;

use Mylen\GraphViz\Graph as BaseGraph;

/**
 * http://www.graphviz.org/pdf/dotguide.pdf 
 * @author alexandre@melard.fr
 *
 */
class Graph extends BaseGraph
{
    protected $command = "dot  -Kdot -Tsvg";
    
    public static function create($id)
    {
        return new Graph($id);
    }

    /**
    * @param Aspect aspect
    * @return Graph
    */
    public function setAspect(Aspect $aspect)
    {
        $this->set($aspect->getName(), $aspect->getValue());
        return $this;
    }

    /**
    * @param Clusterrank clusterrank
    * @return Graph
    */
    public function setClusterrank(Clusterrank $clusterrank)
    {
        $this->set($clusterrank->getName(), $clusterrank->getValue());
        return $this;
    }

    /**
    * @param Compound compound
    * @return Graph
    */
    public function setCompound(Compound $compound)
    {
        $this->set($compound->getName(), $compound->getValue());
        return $this;
    }

    /**
    * @param Mclimit mclimit
    * @return Graph
    */
    public function setMclimit(Mclimit $mclimit)
    {
        $this->set($mclimit->getName(), $mclimit->getValue());
        return $this;
    }

    /**
    * @param Nslimit nslimit
    * @return Graph
    */
    public function setNslimit(Nslimit $nslimit)
    {
        $this->set($nslimit->getName(), $nslimit->getValue());
        return $this;
    }

    /**
    * @param Nslimit1 nslimit1
    * @return Graph
    */
    public function setNslimit1(Nslimit1 $nslimit1)
    {
        $this->set($nslimit1->getName(), $nslimit1->getValue());
        return $this;
    }

    /**
    * @param Ordering ordering
    * @return Graph
    */
    public function setOrdering(Ordering $ordering)
    {
        $this->set($ordering->getName(), $ordering->getValue());
        return $this;
    }

    /**
    * @param Rankdir rankdir
    * @return Graph
    */
    public function setRankdir(Rankdir $rankdir)
    {
        $this->set($rankdir->getName(), $rankdir->getValue());
        return $this;
    }

    /**
    * @param Ranksep ranksep
    * @return Graph
    */
    public function setRanksep(Ranksep $ranksep)
    {
        $this->set($ranksep->getName(), $ranksep->getValue());
        return $this;
    }

    /**
    * @param Remincross remincross
    * @return Graph
    */
    public function setRemincross(Remincross $remincross)
    {
        $this->set($remincross->getName(), $remincross->getValue());
        return $this;
    }

    /**
    * @param Searchsize searchsize
    * @return Graph
    */
    public function setSearchsize(Searchsize $searchsize)
    {
        $this->set($searchsize->getName(), $searchsize->getValue());
        return $this;
    }

    /**
    * @param Showboxes showboxes
    * @return Graph
    */
    public function setShowboxes(Showboxes $showboxes)
    {
        $this->set($showboxes->getName(), $showboxes->getValue());
        return $this;
    }
}
