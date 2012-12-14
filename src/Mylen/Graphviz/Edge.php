<?php
namespace Mylen\GraphViz;

use Alom\Graphviz\DirectedEdge;
use Mylen\GraphViz\Attributes\URL;
use Mylen\GraphViz\Attributes\Arrowhead;
use Mylen\GraphViz\Attributes\Arrowsize;
use Mylen\GraphViz\Attributes\Arrowtail;
use Mylen\GraphViz\Attributes\Color;
use Mylen\GraphViz\Attributes\Colorscheme;
use Mylen\GraphViz\Attributes\Comment;
use Mylen\GraphViz\Attributes\Constraint;
use Mylen\GraphViz\Attributes\Decorate;
use Mylen\GraphViz\Attributes\Dir;
use Mylen\GraphViz\Attributes\EdgeURL;
use Mylen\GraphViz\Attributes\Edgehref;
use Mylen\GraphViz\Attributes\Edgetarget;
use Mylen\GraphViz\Attributes\Edgetooltip;
use Mylen\GraphViz\Attributes\Fillcolor;
use Mylen\GraphViz\Attributes\Fontcolor;
use Mylen\GraphViz\Attributes\Fontname;
use Mylen\GraphViz\Attributes\Fontsize;
use Mylen\GraphViz\Attributes\HeadURL;
use Mylen\GraphViz\Attributes\Head_lp;
use Mylen\GraphViz\Attributes\Headclip;
use Mylen\GraphViz\Attributes\Headhref;
use Mylen\GraphViz\Attributes\Headlabel;
use Mylen\GraphViz\Attributes\Headport;
use Mylen\GraphViz\Attributes\Headtarget;
use Mylen\GraphViz\Attributes\Headtooltip;
use Mylen\GraphViz\Attributes\Href;
use Mylen\GraphViz\Attributes\Id;
use Mylen\GraphViz\Attributes\Label;
use Mylen\GraphViz\Attributes\LabelURL;
use Mylen\GraphViz\Attributes\Labelangle;
use Mylen\GraphViz\Attributes\Labeldistance;
use Mylen\GraphViz\Attributes\Labelfloat;
use Mylen\GraphViz\Attributes\Labelfontcolor;
use Mylen\GraphViz\Attributes\Labelfontname;
use Mylen\GraphViz\Attributes\Labelfontsize;
use Mylen\GraphViz\Attributes\Labelhref;
use Mylen\GraphViz\Attributes\Labeltarget;
use Mylen\GraphViz\Attributes\Labeltooltip;
use Mylen\GraphViz\Attributes\Layer;
use Mylen\GraphViz\Attributes\Len;
use Mylen\GraphViz\Attributes\Lhead;
use Mylen\GraphViz\Attributes\Lp;
use Mylen\GraphViz\Attributes\Ltail;
use Mylen\GraphViz\Attributes\Minlen;
use Mylen\GraphViz\Attributes\Nojustify;
use Mylen\GraphViz\Attributes\Penwidth;
use Mylen\GraphViz\Attributes\Pos;
use Mylen\GraphViz\Attributes\Samehead;
use Mylen\GraphViz\Attributes\Sametail;
use Mylen\GraphViz\Attributes\Showboxes;
use Mylen\GraphViz\Attributes\Style;
use Mylen\GraphViz\Attributes\TailURL;
use Mylen\GraphViz\Attributes\Tail_lp;
use Mylen\GraphViz\Attributes\Tailclip;
use Mylen\GraphViz\Attributes\Tailhref;
use Mylen\GraphViz\Attributes\Taillabel;
use Mylen\GraphViz\Attributes\Tailport;
use Mylen\GraphViz\Attributes\Tailtarget;
use Mylen\GraphViz\Attributes\Tailtooltip;
use Mylen\GraphViz\Attributes\Target;
use Mylen\GraphViz\Attributes\Tooltip;
use Mylen\GraphViz\Attributes\Weight;
use Mylen\GraphViz\Attributes\Xlabel;
use Mylen\GraphViz\Attributes\Xlp;

class Edge extends DirectedEdge
{

    public static function create($list)
    {
        return new Edge($list);
    }

    /**
    * @param Arrowhead arrowhead
    * @return Edge
    */
    public function setArrowhead(Arrowhead $arrowhead)
    {
        $this->attribute($arrowhead->getName(), $arrowhead->getValue());
        return $this;
    }

    /**
    * @param Arrowsize arrowsize
    * @return Edge
    */
    public function setArrowsize(Arrowsize $arrowsize)
    {
        $this->attribute($arrowsize->getName(), $arrowsize->getValue());
        return $this;
    }

    /**
    * @param Arrowtail arrowtail
    * @return Edge
    */
    public function setArrowtail(Arrowtail $arrowtail)
    {
        $this->attribute($arrowtail->getName(), $arrowtail->getValue());
        return $this;
    }

    /**
    * @param Color color
    * @return Edge
    */
    public function setColor(Color $color)
    {
        $this->attribute($color->getName(), $color->getValue());
        return $this;
    }

    /**
    * @param Colorscheme colorscheme
    * @return Edge
    */
    public function setColorscheme(Colorscheme $colorscheme)
    {
        $this->attribute($colorscheme->getName(), $colorscheme->getValue());
        return $this;
    }

    /**
    * @param Comment comment
    * @return Edge
    */
    public function setComment(Comment $comment)
    {
        $this->attribute($comment->getName(), $comment->getValue());
        return $this;
    }

    /**
    * @param Decorate decorate
    * @return Edge
    */
    public function setDecorate(Decorate $decorate)
    {
        $this->attribute($decorate->getName(), $decorate->getValue());
        return $this;
    }

    /**
    * @param Dir dir
    * @return Edge
    */
    public function setDir(Dir $dir)
    {
        $this->attribute($dir->getName(), $dir->getValue());
        return $this;
    }

    /**
    * @param Fillcolor fillcolor
    * @return Edge
    */
    public function setFillcolor(Fillcolor $fillcolor)
    {
        $this->attribute($fillcolor->getName(), $fillcolor->getValue());
        return $this;
    }

    /**
    * @param Fontcolor fontcolor
    * @return Edge
    */
    public function setFontcolor(Fontcolor $fontcolor)
    {
        $this->attribute($fontcolor->getName(), $fontcolor->getValue());
        return $this;
    }

    /**
    * @param Fontname fontname
    * @return Edge
    */
    public function setFontname(Fontname $fontname)
    {
        $this->attribute($fontname->getName(), $fontname->getValue());
        return $this;
    }

    /**
    * @param Fontsize fontsize
    * @return Edge
    */
    public function setFontsize(Fontsize $fontsize)
    {
        $this->attribute($fontsize->getName(), $fontsize->getValue());
        return $this;
    }

    /**
    * @param Headclip headclip
    * @return Edge
    */
    public function setHeadclip(Headclip $headclip)
    {
        $this->attribute($headclip->getName(), $headclip->getValue());
        return $this;
    }

    /**
    * @param Headlabel headlabel
    * @return Edge
    */
    public function setHeadlabel(Headlabel $headlabel)
    {
        $this->attribute($headlabel->getName(), $headlabel->getValue());
        return $this;
    }

    /**
    * @param Headport headport
    * @return Edge
    */
    public function setHeadport(Headport $headport)
    {
        $this->attribute($headport->getName(), $headport->getValue());
        return $this;
    }

    /**
    * @param Label label
    * @return Edge
    */
    public function setLabel(Label $label)
    {
        $this->attribute($label->getName(), $label->getValue());
        return $this;
    }

    /**
    * @param Labelangle labelangle
    * @return Edge
    */
    public function setLabelangle(Labelangle $labelangle)
    {
        $this->attribute($labelangle->getName(), $labelangle->getValue());
        return $this;
    }

    /**
    * @param Labeldistance labeldistance
    * @return Edge
    */
    public function setLabeldistance(Labeldistance $labeldistance)
    {
        $this->attribute($labeldistance->getName(), $labeldistance->getValue());
        return $this;
    }

    /**
    * @param Labelfloat labelfloat
    * @return Edge
    */
    public function setLabelfloat(Labelfloat $labelfloat)
    {
        $this->attribute($labelfloat->getName(), $labelfloat->getValue());
        return $this;
    }

    /**
    * @param Labelfontcolor labelfontcolor
    * @return Edge
    */
    public function setLabelfontcolor(Labelfontcolor $labelfontcolor)
    {
        $this->attribute($labelfontcolor->getName(), $labelfontcolor->getValue());
        return $this;
    }

    /**
    * @param Labelfontname labelfontname
    * @return Edge
    */
    public function setLabelfontname(Labelfontname $labelfontname)
    {
        $this->attribute($labelfontname->getName(), $labelfontname->getValue());
        return $this;
    }

    /**
    * @param Labelfontsize labelfontsize
    * @return Edge
    */
    public function setLabelfontsize(Labelfontsize $labelfontsize)
    {
        $this->attribute($labelfontsize->getName(), $labelfontsize->getValue());
        return $this;
    }

    /**
    * @param Layer layer
    * @return Edge
    */
    public function setLayer(Layer $layer)
    {
        $this->attribute($layer->getName(), $layer->getValue());
        return $this;
    }

    /**
    * @param Nojustify nojustify
    * @return Edge
    */
    public function setNojustify(Nojustify $nojustify)
    {
        $this->attribute($nojustify->getName(), $nojustify->getValue());
        return $this;
    }

    /**
    * @param Penwidth penwidth
    * @return Edge
    */
    public function setPenwidth(Penwidth $penwidth)
    {
        $this->attribute($penwidth->getName(), $penwidth->getValue());
        return $this;
    }

    /**
    * @param Pos pos
    * @return Edge
    */
    public function setPos(Pos $pos)
    {
        $this->attribute($pos->getName(), $pos->getValue());
        return $this;
    }

    /**
    * @param Style style
    * @return Edge
    */
    public function setStyle(Style $style)
    {
        $this->attribute($style->getName(), $style->getValue());
        return $this;
    }

    /**
    * @param Tailclip tailclip
    * @return Edge
    */
    public function setTailclip(Tailclip $tailclip)
    {
        $this->attribute($tailclip->getName(), $tailclip->getValue());
        return $this;
    }

    /**
    * @param Taillabel taillabel
    * @return Edge
    */
    public function setTaillabel(Taillabel $taillabel)
    {
        $this->attribute($taillabel->getName(), $taillabel->getValue());
        return $this;
    }

    /**
    * @param Tailport tailport
    * @return Edge
    */
    public function setTailport(Tailport $tailport)
    {
        $this->attribute($tailport->getName(), $tailport->getValue());
        return $this;
    }

    /**
    * @param Weight weight
    * @return Edge
    */
    public function setWeight(Weight $weight)
    {
        $this->attribute($weight->getName(), $weight->getValue());
        return $this;
    }

    /**
    * @param Xlabel xlabel
    * @return Edge
    */
    public function setXlabel(Xlabel $xlabel)
    {
        $this->attribute($xlabel->getName(), $xlabel->getValue());
        return $this;
    }
    
    /******************************************************************
     *                        SPECIFIC OUPUT
    *****************************************************************/
    
    /**
    * @param Edgehref edgehref
    * @return Edge
    */
    public function setEdgehref(Edgehref $edgehref)
    {
        $this->attribute($edgehref->getName(), $edgehref->getValue());
        return $this;
    }

    /**
    * @param Edgetarget edgetarget
    * @return Edge
    */
    public function setEdgetarget(Edgetarget $edgetarget)
    {
        $this->attribute($edgetarget->getName(), $edgetarget->getValue());
        return $this;
    }

    /**
    * @param Edgetooltip edgetooltip
    * @return Edge
    */
    public function setEdgetooltip(Edgetooltip $edgetooltip)
    {
        $this->attribute($edgetooltip->getName(), $edgetooltip->getValue());
        return $this;
    }

    /**
    * @param EdgeURL edgeURL
    * @return Edge
    */
    public function setEdgeURL(EdgeURL $edgeURL)
    {
        $this->attribute($edgeURL->getName(), $edgeURL->getValue());
        return $this;
    }

    /**
    * @param Headhref headhref
    * @return Edge
    */
    public function setHeadhref(Headhref $headhref)
    {
        $this->attribute($headhref->getName(), $headhref->getValue());
        return $this;
    }

    /**
    * @param Head_lp head_lp
    * @return Edge
    */
    public function setHead_lp(Head_lp $head_lp)
    {
        $this->attribute($head_lp->getName(), $head_lp->getValue());
        return $this;
    }

    /**
    * @param Headtarget headtarget
    * @return Edge
    */
    public function setHeadtarget(Headtarget $headtarget)
    {
        $this->attribute($headtarget->getName(), $headtarget->getValue());
        return $this;
    }

    /**
    * @param Headtooltip headtooltip
    * @return Edge
    */
    public function setHeadtooltip(Headtooltip $headtooltip)
    {
        $this->attribute($headtooltip->getName(), $headtooltip->getValue());
        return $this;
    }

    /**
    * @param HeadURL headURL
    * @return Edge
    */
    public function setHeadURL(HeadURL $headURL)
    {
        $this->attribute($headURL->getName(), $headURL->getValue());
        return $this;
    }

    /**
    * @param Href href
    * @return Edge
    */
    public function setHref(Href $href)
    {
        $this->attribute($href->getName(), $href->getValue());
        return $this;
    }

    /**
    * @param Id id
    * @return Edge
    */
    public function setId(Id $id)
    {
        $this->attribute($id->getName(), $id->getValue());
        return $this;
    }

    /**
    * @param Labelhref labelhref
    * @return Edge
    */
    public function setLabelhref(Labelhref $labelhref)
    {
        $this->attribute($labelhref->getName(), $labelhref->getValue());
        return $this;
    }

    /**
    * @param Labeltarget labeltarget
    * @return Edge
    */
    public function setLabeltarget(Labeltarget $labeltarget)
    {
        $this->attribute($labeltarget->getName(), $labeltarget->getValue());
        return $this;
    }

    /**
    * @param Labeltooltip labeltooltip
    * @return Edge
    */
    public function setLabeltooltip(Labeltooltip $labeltooltip)
    {
        $this->attribute($labeltooltip->getName(), $labeltooltip->getValue());
        return $this;
    }

    /**
    * @param LabelURL labelURL
    * @return Edge
    */
    public function setLabelURL(LabelURL $labelURL)
    {
        $this->attribute($labelURL->getName(), $labelURL->getValue());
        return $this;
    }

    /**
    * @param Lp lp
    * @return Edge
    */
    public function setLp(Lp $lp)
    {
        $this->attribute($lp->getName(), $lp->getValue());
        return $this;
    }

    /**
    * @param Tailhref tailhref
    * @return Edge
    */
    public function setTailhref(Tailhref $tailhref)
    {
        $this->attribute($tailhref->getName(), $tailhref->getValue());
        return $this;
    }

    /**
    * @param Tail_lp tail_lp
    * @return Edge
    */
    public function setTail_lp(Tail_lp $tail_lp)
    {
        $this->attribute($tail_lp->getName(), $tail_lp->getValue());
        return $this;
    }

    /**
    * @param Tailtarget tailtarget
    * @return Edge
    */
    public function setTailtarget(Tailtarget $tailtarget)
    {
        $this->attribute($tailtarget->getName(), $tailtarget->getValue());
        return $this;
    }

    /**
    * @param Tailtooltip tailtooltip
    * @return Edge
    */
    public function setTailtooltip(Tailtooltip $tailtooltip)
    {
        $this->attribute($tailtooltip->getName(), $tailtooltip->getValue());
        return $this;
    }

    /**
    * @param TailURL tailURL
    * @return Edge
    */
    public function setTailURL(TailURL $tailURL)
    {
        $this->attribute($tailURL->getName(), $tailURL->getValue());
        return $this;
    }

    /**
    * @param Target target
    * @return Edge
    */
    public function setTarget(Target $target)
    {
        $this->attribute($target->getName(), $target->getValue());
        return $this;
    }

    /**
    * @param Tooltip tooltip
    * @return Edge
    */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->attribute($tooltip->getName(), $tooltip->getValue());
        return $this;
    }

    /**
    * @param URL URL
    * @return Edge
    */
    public function setURL(URL $URL)
    {
        $this->attribute($URL->getName(), $URL->getValue());
        return $this;
    }

    /**
    * @param Xlp xlp
    * @return Edge
    */
    public function setXlp(Xlp $xlp)
    {
        $this->attribute($xlp->getName(), $xlp->getValue());
        return $this;
    }
}
