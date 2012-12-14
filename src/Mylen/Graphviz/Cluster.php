<?php
namespace Mylen\GraphViz;

use Alom\Graphviz\Subgraph;

use Mylen\GraphViz\Attributes\K;
use Mylen\GraphViz\Attributes\URL;
use Mylen\GraphViz\Attributes\Area;
use Mylen\GraphViz\Attributes\Bgcolor;
use Mylen\GraphViz\Attributes\Color;
use Mylen\GraphViz\Attributes\Colorscheme;
use Mylen\GraphViz\Attributes\Fillcolor;
use Mylen\GraphViz\Attributes\Fontcolor;
use Mylen\GraphViz\Attributes\Fontname;
use Mylen\GraphViz\Attributes\Fontsize;
use Mylen\GraphViz\Attributes\Gradientangle;
use Mylen\GraphViz\Attributes\Href;
use Mylen\GraphViz\Attributes\Label;
use Mylen\GraphViz\Attributes\Labeljust;
use Mylen\GraphViz\Attributes\Labelloc;
use Mylen\GraphViz\Attributes\Layer;
use Mylen\GraphViz\Attributes\Lheight;
use Mylen\GraphViz\Attributes\Lp;
use Mylen\GraphViz\Attributes\Lwidth;
use Mylen\GraphViz\Attributes\Margin;
use Mylen\GraphViz\Attributes\Nojustify;
use Mylen\GraphViz\Attributes\Pencolor;
use Mylen\GraphViz\Attributes\Penwidth;
use Mylen\GraphViz\Attributes\Peripheries;
use Mylen\GraphViz\Attributes\Sortv;
use Mylen\GraphViz\Attributes\Style;
use Mylen\GraphViz\Attributes\Target;
use Mylen\GraphViz\Attributes\Tooltip;

class Cluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }
    
    /**
     * @param Bgcolor bgcolor
     * @return Cluster
     */
    public function setBgcolor(Bgcolor $bgcolor)
    {
        $this->set($bgcolor->getName(), $bgcolor->getValue());
        return $this;
    }
    
    /**
     * @param Color color
     * @return Cluster
     */
    public function setColor(Color $color)
    {
        $this->set($color->getName(), $color->getValue());
        return $this;
    }
    
    /**
     * @param Colorscheme colorscheme
     * @return Cluster
     */
    public function setColorscheme(Colorscheme $colorscheme)
    {
        $this->set($colorscheme->getName(), $colorscheme->getValue());
        return $this;
    }
    
    /**
     * @param Fillcolor fillcolor
     * @return Cluster
     */
    public function setFillcolor(Fillcolor $fillcolor)
    {
        $this->set($fillcolor->getName(), $fillcolor->getValue());
        return $this;
    }
    
    /**
     * @param Fontcolor fontcolor
     * @return Cluster
     */
    public function setFontcolor(Fontcolor $fontcolor)
    {
        $this->set($fontcolor->getName(), $fontcolor->getValue());
        return $this;
    }
    
    /**
     * @param Fontname fontname
     * @return Cluster
     */
    public function setFontname(Fontname $fontname)
    {
        $this->set($fontname->getName(), $fontname->getValue());
        return $this;
    }
    
    /**
     * @param Fontsize fontsize
     * @return Cluster
     */
    public function setFontsize(Fontsize $fontsize)
    {
        $this->set($fontsize->getName(), $fontsize->getValue());
        return $this;
    }
    
    /**
     * @param Gradientangle gradientangle
     * @return Cluster
     */
    public function setGradientangle(Gradientangle $gradientangle)
    {
        $this->set($gradientangle->getName(), $gradientangle->getValue());
        return $this;
    }
    
    /**
     * @param Label label
     * @return Cluster
     */
    public function setLabel(Label $label)
    {
        $this->set($label->getName(), $label->getValue());
        return $this;
    }
    
    /**
     * @param Labeljust labeljust
     * @return Cluster
     */
    public function setLabeljust(Labeljust $labeljust)
    {
        $this->set($labeljust->getName(), $labeljust->getValue());
        return $this;
    }
    
    /**
     * @param Labelloc labelloc
     * @return Cluster
     */
    public function setLabelloc(Labelloc $labelloc)
    {
        $this->set($labelloc->getName(), $labelloc->getValue());
        return $this;
    }
    
    /**
     * @param Layer layer
     * @return Cluster
     */
    public function setLayer(Layer $layer)
    {
        $this->set($layer->getName(), $layer->getValue());
        return $this;
    }
    
    /**
     * @param Margin margin
     * @return Cluster
     */
    public function setMargin(Margin $margin)
    {
        $this->set($margin->getName(), $margin->getValue());
        return $this;
    }
    
    /**
     * @param Nojustify nojustify
     * @return Cluster
     */
    public function setNojustify(Nojustify $nojustify)
    {
        $this->set($nojustify->getName(), $nojustify->getValue());
        return $this;
    }
    
    /**
     * @param Pencolor pencolor
     * @return Cluster
     */
    public function setPencolor(Pencolor $pencolor)
    {
        $this->set($pencolor->getName(), $pencolor->getValue());
        return $this;
    }
    
    /**
     * @param Penwidth penwidth
     * @return Cluster
     */
    public function setPenwidth(Penwidth $penwidth)
    {
        $this->set($penwidth->getName(), $penwidth->getValue());
        return $this;
    }
    
    /**
     * @param Peripheries peripheries
     * @return Cluster
     */
    public function setPeripheries(Peripheries $peripheries)
    {
        $this->set($peripheries->getName(), $peripheries->getValue());
        return $this;
    }
    
    /**
     * @param Sortv sortv
     * @return Cluster
     */
    public function setSortv(Sortv $sortv)
    {
        $this->set($sortv->getName(), $sortv->getValue());
        return $this;
    }
    
    /**
     * @param Style style
     * @return Cluster
     */
    public function setStyle(Style $style)
    {
        $this->set($style->getName(), $style->getValue());
        return $this;
    }
    
    /******************************************************************
     *                        SPECIFIC OUPUT
    *****************************************************************/

    /**
     * @param Area area
     * @return Cluster
     */
    public function setArea(Area $area)
    {
        $this->set($area->getName(), $area->getValue());
        return $this;
    }
    
    /**
     * @param Href href
     * @return Cluster
     */
    public function setHref(Href $href)
    {
        $this->set($href->getName(), $href->getValue());
        return $this;
    }
    
    /**
     * @param Lheight lheight
     * @return Cluster
     */
    public function setLheight(Lheight $lheight)
    {
        $this->set($lheight->getName(), $lheight->getValue());
        return $this;
    }
    
    /**
     * @param Lp lp
     * @return Cluster
     */
    public function setLp(Lp $lp)
    {
        $this->set($lp->getName(), $lp->getValue());
        return $this;
    }
    
    /**
     * @param Lwidth lwidth
     * @return Cluster
     */
    public function setLwidth(Lwidth $lwidth)
    {
        $this->set($lwidth->getName(), $lwidth->getValue());
        return $this;
    }
    
    /**
     * @param Target target
     * @return Cluster
     */
    public function setTarget(Target $target)
    {
        $this->set($target->getName(), $target->getValue());
        return $this;
    }
    
    /**
     * @param Tooltip tooltip
     * @return Cluster
     */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->set($tooltip->getName(), $tooltip->getValue());
        return $this;
    }
    
    /**
     * @param URL URL
     * @return Cluster
     */
    public function setURL(URL $URL)
    {
        $this->set($URL->getName(), $URL->getValue());
        return $this;
    }
}
