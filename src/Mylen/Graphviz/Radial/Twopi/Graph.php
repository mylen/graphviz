<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Radial\Twopi;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Scale;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Root;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Ranksep;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Voro_margin;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Sep;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Packmode;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Pack;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Overlap;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Normalize;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Esep;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Graph as BaseGraph;

class Graph extends BaseGraph
{
    protected $command = "dot  -Ktwopi -Tsvg";
    
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
     *                        SPECIFIC TWOPI
    *****************************************************************/
    
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
     * @param Root root
     * @return Graph
     */
    public function setRoot(Root $root)
    {
        $this->set($root->getName(), $root->getValue());
        return $this;
    }
    
    /**
     * @param Scale scale
     * @return Graph
     */
    public function setScale(Scale $scale)
    {
        $this->set($scale->getName(), $scale->getValue());
        return $this;
    }
    
}
