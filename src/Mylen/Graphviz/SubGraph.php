<?php
namespace Mylen\GraphViz;

use Alom\Graphviz\Subgraph;
use Mylen\GraphViz\Attributes\URL;
use Mylen\GraphViz\Attributes\EdgeURL;
use Mylen\GraphViz\Attributes\Edgehref;
use Mylen\GraphViz\Attributes\Edgetarget;
use Mylen\GraphViz\Attributes\Edgetooltip;
use Mylen\GraphViz\Attributes\HeadURL;
use Mylen\GraphViz\Attributes\Headhref;
use Mylen\GraphViz\Attributes\Headlabel;
use Mylen\GraphViz\Attributes\Headtarget;
use Mylen\GraphViz\Attributes\Headtooltip;
use Mylen\GraphViz\Attributes\Href;
use Mylen\GraphViz\Attributes\Id;
use Mylen\GraphViz\Attributes\Label;
use Mylen\GraphViz\Attributes\LabelURL;
use Mylen\GraphViz\Attributes\Labelhref;
use Mylen\GraphViz\Attributes\Labeltarget;
use Mylen\GraphViz\Attributes\Labeltooltip;
use Mylen\GraphViz\Attributes\Rank;
use Mylen\GraphViz\Attributes\TailURL;
use Mylen\GraphViz\Attributes\Tailhref;
use Mylen\GraphViz\Attributes\Taillabel;
use Mylen\GraphViz\Attributes\Tailtarget;
use Mylen\GraphViz\Attributes\Tailtooltip;
use Mylen\GraphViz\Attributes\Target;
use Mylen\GraphViz\Attributes\Tooltip;
use Mylen\GraphViz\Attributes\Xlabel;

class SubGraph extends Subgraph
{
    
    /**
     * @param Headlabel headlabel
     * @return SubGraph
     */
    public function setHeadlabel(Headlabel $headlabel)
    {
        $this->set($headlabel->getName(), $headlabel->getValue());
        return $this;
    }
    
    /**
     * @param Label label
     * @return SubGraph
     */
    public function setLabel(Label $label)
    {
        $this->set($label->getName(), $label->getValue());
        return $this;
    }
    
    /**
     * @param Taillabel taillabel
     * @return SubGraph
     */
    public function setTaillabel(Taillabel $taillabel)
    {
        $this->set($taillabel->getName(), $taillabel->getValue());
        return $this;
    }
    
    /**
     * @param Xlabel xlabel
     * @return SubGraph
     */
    public function setXlabel(Xlabel $xlabel)
    {
        $this->set($xlabel->getName(), $xlabel->getValue());
        return $this;
    }
    
    /******************************************************************
     *                        SPECIFIC OUPUT
    *****************************************************************/
        
    /**
     * @param Edgehref edgehref
     * @return SubGraph
     */
    public function setEdgehref(Edgehref $edgehref)
    {
        $this->set($edgehref->getName(), $edgehref->getValue());
        return $this;
    }
    
    /**
     * @param Edgetarget edgetarget
     * @return SubGraph
     */
    public function setEdgetarget(Edgetarget $edgetarget)
    {
        $this->set($edgetarget->getName(), $edgetarget->getValue());
        return $this;
    }
    
    /**
     * @param Edgetooltip edgetooltip
     * @return SubGraph
     */
    public function setEdgetooltip(Edgetooltip $edgetooltip)
    {
        $this->set($edgetooltip->getName(), $edgetooltip->getValue());
        return $this;
    }
    
    /**
     * @param EdgeURL edgeURL
     * @return SubGraph
     */
    public function setEdgeURL(EdgeURL $edgeURL)
    {
        $this->set($edgeURL->getName(), $edgeURL->getValue());
        return $this;
    }
    
    /**
     * @param Headhref headhref
     * @return SubGraph
     */
    public function setHeadhref(Headhref $headhref)
    {
        $this->set($headhref->getName(), $headhref->getValue());
        return $this;
    }
    
    /**
     * @param Headtarget headtarget
     * @return SubGraph
     */
    public function setHeadtarget(Headtarget $headtarget)
    {
        $this->set($headtarget->getName(), $headtarget->getValue());
        return $this;
    }
    
    /**
     * @param Headtooltip headtooltip
     * @return SubGraph
     */
    public function setHeadtooltip(Headtooltip $headtooltip)
    {
        $this->set($headtooltip->getName(), $headtooltip->getValue());
        return $this;
    }
    
    /**
     * @param HeadURL headURL
     * @return SubGraph
     */
    public function setHeadURL(HeadURL $headURL)
    {
        $this->set($headURL->getName(), $headURL->getValue());
        return $this;
    }
    
    /**
     * @param Href href
     * @return SubGraph
     */
    public function setHref(Href $href)
    {
        $this->set($href->getName(), $href->getValue());
        return $this;
    }
    
    /**
     * @param Id id
     * @return SubGraph
     */
    public function setId(Id $id)
    {
        $this->set($id->getName(), $id->getValue());
        return $this;
    }
    
    /**
     * @param Labelhref labelhref
     * @return SubGraph
     */
    public function setLabelhref(Labelhref $labelhref)
    {
        $this->set($labelhref->getName(), $labelhref->getValue());
        return $this;
    }
    
    /**
     * @param Labeltarget labeltarget
     * @return SubGraph
     */
    public function setLabeltarget(Labeltarget $labeltarget)
    {
        $this->set($labeltarget->getName(), $labeltarget->getValue());
        return $this;
    }
    
    /**
     * @param Labeltooltip labeltooltip
     * @return SubGraph
     */
    public function setLabeltooltip(Labeltooltip $labeltooltip)
    {
        $this->set($labeltooltip->getName(), $labeltooltip->getValue());
        return $this;
    }
    
    /**
     * @param LabelURL labelURL
     * @return SubGraph
     */
    public function setLabelURL(LabelURL $labelURL)
    {
        $this->set($labelURL->getName(), $labelURL->getValue());
        return $this;
    }
    
    /**
     * @param Tailhref tailhref
     * @return SubGraph
     */
    public function setTailhref(Tailhref $tailhref)
    {
        $this->set($tailhref->getName(), $tailhref->getValue());
        return $this;
    }
    
    /**
     * @param Tailtarget tailtarget
     * @return SubGraph
     */
    public function setTailtarget(Tailtarget $tailtarget)
    {
        $this->set($tailtarget->getName(), $tailtarget->getValue());
        return $this;
    }
    
    /**
     * @param Tailtooltip tailtooltip
     * @return SubGraph
     */
    public function setTailtooltip(Tailtooltip $tailtooltip)
    {
        $this->set($tailtooltip->getName(), $tailtooltip->getValue());
        return $this;
    }
    
    /**
     * @param TailURL tailURL
     * @return SubGraph
     */
    public function setTailURL(TailURL $tailURL)
    {
        $this->set($tailURL->getName(), $tailURL->getValue());
        return $this;
    }
    
    /**
     * @param Target target
     * @return SubGraph
     */
    public function setTarget(Target $target)
    {
        $this->set($target->getName(), $target->getValue());
        return $this;
    }
    
    /**
     * @param Tooltip tooltip
     * @return SubGraph
     */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->set($tooltip->getName(), $tooltip->getValue());
        return $this;
    }
    
    /**
     * @param URL URL
     * @return SubGraph
     */
    public function setURL(URL $URL)
    {
        $this->set($URL->getName(), $URL->getValue());
        return $this;
    }
}
