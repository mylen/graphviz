<?php
namespace Mylen\GraphViz\Spring\Fdp;

use Mylen\GraphViz\Attributes\Start;
use Mylen\GraphViz\Attributes\Smoothing;
use Mylen\GraphViz\Attributes\Rotation;
use Mylen\GraphViz\Attributes\Repulsiveforce;
use Mylen\GraphViz\Attributes\Quadtree;
use Mylen\GraphViz\Attributes\Maxiter;
use Mylen\GraphViz\Attributes\Levels;
use Mylen\GraphViz\Attributes\Label_scheme;
use Mylen\GraphViz\Attributes\K;
use Mylen\GraphViz\Attributes\Dimen;
use Mylen\GraphViz\Attributes\Dim;
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
    protected $command = "dot  -Kfdp -Tsvg";
    
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
     *                        SPECIFIC FDP
     *****************************************************************/
    
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
     * @param K K
     * @return Graph
     */
    public function setK(K $K)
    {
        $this->set($K->getName(), $K->getValue());
        return $this;
    }
    
    /**
     * @param Label_scheme label_scheme
     * @return Graph
     */
    public function setLabel_scheme(Label_scheme $label_scheme)
    {
        $this->set($label_scheme->getName(), $label_scheme->getValue());
        return $this;
    }
    
    /**
     * @param Levels levels
     * @return Graph
     */
    public function setLevels(Levels $levels)
    {
        $this->set($levels->getName(), $levels->getValue());
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
     * @param Quadtree quadtree
     * @return Graph
     */
    public function setQuadtree(Quadtree $quadtree)
    {
        $this->set($quadtree->getName(), $quadtree->getValue());
        return $this;
    }
    
    /**
     * @param Repulsiveforce repulsiveforce
     * @return Graph
     */
    public function setRepulsiveforce(Repulsiveforce $repulsiveforce)
    {
        $this->set($repulsiveforce->getName(), $repulsiveforce->getValue());
        return $this;
    }
    
    /**
     * @param Rotation rotation
     * @return Graph
     */
    public function setRotation(Rotation $rotation)
    {
        $this->set($rotation->getName(), $rotation->getValue());
        return $this;
    }
    
    /**
     * @param Smoothing smoothing
     * @return Graph
     */
    public function setSmoothing(Smoothing $smoothing)
    {
        $this->set($smoothing->getName(), $smoothing->getValue());
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
