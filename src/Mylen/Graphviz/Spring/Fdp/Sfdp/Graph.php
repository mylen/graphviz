<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Sfdp;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Voro_margin;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Sep;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Packmode;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Pack;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Overlap;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Normalize;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Esep;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Fdp\Graph as BaseGraph;

class Graph extends BaseGraph
{
    protected $command = "dot  -Ksfdp -Tsvg";
    
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
}
