<?php
namespace Mylen\GraphViz\Circular\Circo;

use Mylen\GraphViz\Attributes\Root;
use Mylen\GraphViz\Attributes\Mindist;
use Mylen\GraphViz\Attributes\Voro_margin;
use Mylen\GraphViz\Attributes\Sep;
use Mylen\GraphViz\Attributes\Packmode;
use Mylen\GraphViz\Attributes\Pack;
use Mylen\GraphViz\Attributes\Overlap;
use Mylen\GraphViz\Attributes\Normalize;
use Mylen\GraphViz\Attributes\Esep;

use Mylen\GraphViz\Graph as BaseGraph;

class Graph extends BaseGraph
{
    protected $command = "dot  -Kcirco -Tsvg";
    
    public static function create($id)
    {
        return new Graph($id);
    }
    
    /**
     * @param Esep esep
     * @return Graph
     */
    public function setEsep(Esep $esep)
    {
        $this->set($esep->getName(), $esep->getValue());
        return $this;
    }
    
    /**
     * @param Normalize normalize
     * @return Graph
     */
    public function setNormalize(Normalize $normalize)
    {
        $this->set($normalize->getName(), $normalize->getValue());
        return $this;
    }
    
    /**
     * @param Overlap overlap
     * @return Graph
     */
    public function setOverlap(Overlap $overlap)
    {
        $this->set($overlap->getName(), $overlap->getValue());
        return $this;
    }
    
    /**
     * @param Pack pack
     * @return Graph
     */
    public function setPack(Pack $pack)
    {
        $this->set($pack->getName(), $pack->getValue());
        return $this;
    }
    
    /**
     * @param Packmode packmode
     * @return Graph
     */
    public function setPackmode(Packmode $packmode)
    {
        $this->set($packmode->getName(), $packmode->getValue());
        return $this;
    }
    
    /**
     * @param Sep sep
     * @return Graph
     */
    public function setSep(Sep $sep)
    {
        $this->set($sep->getName(), $sep->getValue());
        return $this;
    }
    
    /**
     * @param Voro_margin voro_margin
     * @return Graph
     */
    public function setVoro_margin(Voro_margin $voro_margin)
    {
        $this->set($voro_margin->getName(), $voro_margin->getValue());
        return $this;
    }
    
    /******************************************************************
     *                        SPECIFIC CIRCO
    *****************************************************************/
    
    /**
     * @param Mindist mindist
     * @return Graph
     */
    public function setMindist(Mindist $mindist)
    {
        $this->set($mindist->getName(), $mindist->getValue());
        return $this;
    }
    
    /**
     * @param Root root
     * @return Graph
     */
    public function setRoot(Root $root)
    {
        $this->set($root->getName(), $root->getValue());
        return $this;
    }
    
}
