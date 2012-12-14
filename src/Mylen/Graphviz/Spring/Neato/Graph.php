<?php
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Spring\Neato;

use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Start;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Mosek;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Model;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Mode;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Maxiter;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Levelsgap;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Epsilon;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Diredgeconstraints;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Dimen;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Dim;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Defaultdist;
use Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Attributes\Damping;
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
    protected $command = "dot  -Kneato -Tsvg";
    
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
     *                        SPECIFIC NEATO
    *****************************************************************/
        
    /**
     * @param Damping Damping
     * @return Graph
     */
    public function setDamping(Damping $Damping)
    {
        $this->set($Damping->getName(), $Damping->getValue());
        return $this;
    }
    
    /**
     * @param Defaultdist defaultdist
     * @return Graph
     */
    public function setDefaultdist(Defaultdist $defaultdist)
    {
        $this->set($defaultdist->getName(), $defaultdist->getValue());
        return $this;
    }
    
    /**
     * @param Dim dim
     * @return Graph
     */
    public function setDim(Dim $dim)
    {
        $this->set($dim->getName(), $dim->getValue());
        return $this;
    }
    
    /**
     * @param Dimen dimen
     * @return Graph
     */
    public function setDimen(Dimen $dimen)
    {
        $this->set($dimen->getName(), $dimen->getValue());
        return $this;
    }
    
    /**
     * @param Diredgeconstraints diredgeconstraints
     * @return Graph
     */
    public function setDiredgeconstraints(Diredgeconstraints $diredgeconstraints)
    {
        $this->set($diredgeconstraints->getName(), $diredgeconstraints->getValue());
        return $this;
    }
    
    /**
     * @param Epsilon epsilon
     * @return Graph
     */
    public function setEpsilon(Epsilon $epsilon)
    {
        $this->set($epsilon->getName(), $epsilon->getValue());
        return $this;
    }
    
    /**
     * @param Levelsgap levelsgap
     * @return Graph
     */
    public function setLevelsgap(Levelsgap $levelsgap)
    {
        $this->set($levelsgap->getName(), $levelsgap->getValue());
        return $this;
    }
    
    /**
     * @param Maxiter maxiter
     * @return Graph
     */
    public function setMaxiter(Maxiter $maxiter)
    {
        $this->set($maxiter->getName(), $maxiter->getValue());
        return $this;
    }
    
    /**
     * @param Mode mode
     * @return Graph
     */
    public function setMode(Mode $mode)
    {
        $this->set($mode->getName(), $mode->getValue());
        return $this;
    }
    
    /**
     * @param Model model
     * @return Graph
     */
    public function setModel(Model $model)
    {
        $this->set($model->getName(), $model->getValue());
        return $this;
    }
    
    /**
     * @param Mosek mosek
     * @return Graph
     */
    public function setMosek(Mosek $mosek)
    {
        $this->set($mosek->getName(), $mosek->getValue());
        return $this;
    }
    
    /**
     * @param Start start
     * @return Graph
     */
    public function setStart(Start $start)
    {
        $this->set($start->getName(), $start->getValue());
        return $this;
    }
    
}
