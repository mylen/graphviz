<?php
namespace Mylen\GraphViz;

use Alom\Graphviz\Node as BaseNode;
use Mylen\GraphViz\Attributes\URL;
use Mylen\GraphViz\Attributes\Area;
use Mylen\GraphViz\Attributes\Color;
use Mylen\GraphViz\Attributes\Colorscheme;
use Mylen\GraphViz\Attributes\Comment;
use Mylen\GraphViz\Attributes\Distortion;
use Mylen\GraphViz\Attributes\Fillcolor;
use Mylen\GraphViz\Attributes\Fixedsize;
use Mylen\GraphViz\Attributes\Fontcolor;
use Mylen\GraphViz\Attributes\Fontname;
use Mylen\GraphViz\Attributes\Fontsize;
use Mylen\GraphViz\Attributes\Gradientangle;
use Mylen\GraphViz\Attributes\Group;
use Mylen\GraphViz\Attributes\Height;
use Mylen\GraphViz\Attributes\Href;
use Mylen\GraphViz\Attributes\Id;
use Mylen\GraphViz\Attributes\Image;
use Mylen\GraphViz\Attributes\Imagescale;
use Mylen\GraphViz\Attributes\Label;
use Mylen\GraphViz\Attributes\Labelloc;
use Mylen\GraphViz\Attributes\Layer;
use Mylen\GraphViz\Attributes\Levels;
use Mylen\GraphViz\Attributes\Margin;
use Mylen\GraphViz\Attributes\Nojustify;
use Mylen\GraphViz\Attributes\Ordering;
use Mylen\GraphViz\Attributes\Orientation;
use Mylen\GraphViz\Attributes\Penwidth;
use Mylen\GraphViz\Attributes\Peripheries;
use Mylen\GraphViz\Attributes\Pin;
use Mylen\GraphViz\Attributes\Pos;
use Mylen\GraphViz\Attributes\Rects;
use Mylen\GraphViz\Attributes\Regular;
use Mylen\GraphViz\Attributes\Root;
use Mylen\GraphViz\Attributes\Samplepoints;
use Mylen\GraphViz\Attributes\Shape;
use Mylen\GraphViz\Attributes\Shapefile;
use Mylen\GraphViz\Attributes\Showboxes;
use Mylen\GraphViz\Attributes\Sides;
use Mylen\GraphViz\Attributes\Skew;
use Mylen\GraphViz\Attributes\Sortv;
use Mylen\GraphViz\Attributes\Style;
use Mylen\GraphViz\Attributes\Target;
use Mylen\GraphViz\Attributes\Tooltip;
use Mylen\GraphViz\Attributes\Vertices;
use Mylen\GraphViz\Attributes\Width;
use Mylen\GraphViz\Attributes\Xlabel;
use Mylen\GraphViz\Attributes\Xlp;
use Mylen\GraphViz\Attributes\Z;

class Node extends BaseNode
{

    public static function create($id)
    {
        return new Node($id);
    }

    /**
     * Set attributes to make node invisible
     * @return Node
     */
    public function invisible()
    {
        return $this
        ->setStyle(new Style('invisible'))
        ->setWidth(new Width('.1'))
        ->setHeight(new Height('.1'))
        ->setFixedsize(new Fixedsize('true'));
    }
    
    /**
     * @param Color color
     * @return Node
     */
    public function setColor(Color $color)
    {
        $this->attribute($color->getName(), $color->getValue());
        return $this;
    }
    
    /**
     * @param Colorscheme colorscheme
     * @return Node
     */
    public function setColorscheme(Colorscheme $colorscheme)
    {
        $this->attribute($colorscheme->getName(), $colorscheme->getValue());
        return $this;
    }
    
    /**
     * @param Comment comment
     * @return Node
     */
    public function setComment(Comment $comment)
    {
        $this->attribute($comment->getName(), $comment->getValue());
        return $this;
    }
    
    /**
     * @param Distortion distortion
     * @return Node
     */
    public function setDistortion(Distortion $distortion)
    {
        $this->attribute($distortion->getName(), $distortion->getValue());
        return $this;
    }
    
    /**
     * @param Fillcolor fillcolor
     * @return Node
     */
    public function setFillcolor(Fillcolor $fillcolor)
    {
        $this->attribute($fillcolor->getName(), $fillcolor->getValue());
        return $this;
    }
    
    /**
     * @param Fixedsize fixedsize
     * @return Node
     */
    public function setFixedsize(Fixedsize $fixedsize)
    {
        $this->attribute($fixedsize->getName(), $fixedsize->getValue());
        return $this;
    }
    
    /**
     * @param Fontcolor fontcolor
     * @return Node
     */
    public function setFontcolor(Fontcolor $fontcolor)
    {
        $this->attribute($fontcolor->getName(), $fontcolor->getValue());
        return $this;
    }
    
    /**
     * @param Fontname fontname
     * @return Node
     */
    public function setFontname(Fontname $fontname)
    {
        $this->attribute($fontname->getName(), $fontname->getValue());
        return $this;
    }
    
    /**
     * @param Fontsize fontsize
     * @return Node
     */
    public function setFontsize(Fontsize $fontsize)
    {
        $this->attribute($fontsize->getName(), $fontsize->getValue());
        return $this;
    }
    
    /**
     * @param Gradientangle gradientangle
     * @return Node
     */
    public function setGradientangle(Gradientangle $gradientangle)
    {
        $this->attribute($gradientangle->getName(), $gradientangle->getValue());
        return $this;
    }
    
    /**
     * @param Height height
     * @return Node
     */
    public function setHeight(Height $height)
    {
        $this->attribute($height->getName(), $height->getValue());
        return $this;
    }
    
    /**
     * @param Image image
     * @return Node
     */
    public function setImage(Image $image)
    {
        $this->attribute($image->getName(), $image->getValue());
        return $this;
    }
    
    /**
     * @param Imagescale imagescale
     * @return Node
     */
    public function setImagescale(Imagescale $imagescale)
    {
        $this->attribute($imagescale->getName(), $imagescale->getValue());
        return $this;
    }
    
    /**
     * @param Label label
     * @return Node
     */
    public function setLabel(Label $label)
    {
        $this->attribute($label->getName(), $label->getValue());
        return $this;
    }
    
    /**
     * @param Labelloc labelloc
     * @return Node
     */
    public function setLabelloc(Labelloc $labelloc)
    {
        $this->attribute($labelloc->getName(), $labelloc->getValue());
        return $this;
    }
    
    /**
     * @param Layer layer
     * @return Node
     */
    public function setLayer(Layer $layer)
    {
        $this->attribute($layer->getName(), $layer->getValue());
        return $this;
    }
    
    /**
     * @param Margin margin
     * @return Node
     */
    public function setMargin(Margin $margin)
    {
        $this->attribute($margin->getName(), $margin->getValue());
        return $this;
    }
    
    /**
     * @param Nojustify nojustify
     * @return Node
     */
    public function setNojustify(Nojustify $nojustify)
    {
        $this->attribute($nojustify->getName(), $nojustify->getValue());
        return $this;
    }
    
    /**
     * @param Orientation orientation
     * @return Node
     */
    public function setOrientation(Orientation $orientation)
    {
        $this->attribute($orientation->getName(), $orientation->getValue());
        return $this;
    }
    
    /**
     * @param Penwidth penwidth
     * @return Node
     */
    public function setPenwidth(Penwidth $penwidth)
    {
        $this->attribute($penwidth->getName(), $penwidth->getValue());
        return $this;
    }
    
    /**
     * @param Peripheries peripheries
     * @return Node
     */
    public function setPeripheries(Peripheries $peripheries)
    {
        $this->attribute($peripheries->getName(), $peripheries->getValue());
        return $this;
    }
    
    /**
     * @param Pos pos
     * @return Node
     */
    public function setPos(Pos $pos)
    {
        $this->attribute($pos->getName(), $pos->getValue());
        return $this;
    }
    
    /**
     * @param Regular regular
     * @return Node
     */
    public function setRegular(Regular $regular)
    {
        $this->attribute($regular->getName(), $regular->getValue());
        return $this;
    }
    
    /**
     * @param Samplepoints samplepoints
     * @return Node
     */
    public function setSamplepoints(Samplepoints $samplepoints)
    {
        $this->attribute($samplepoints->getName(), $samplepoints->getValue());
        return $this;
    }
    
    /**
     * @param Shape shape
     * @return Node
     */
    public function setShape(Shape $shape)
    {
        $this->attribute($shape->getName(), $shape->getValue());
        return $this;
    }
    
    /**
     * @param Shapefile shapefile
     * @return Node
     */
    public function setShapefile(Shapefile $shapefile)
    {
        $this->attribute($shapefile->getName(), $shapefile->getValue());
        return $this;
    }
    
    /**
     * @param Sides sides
     * @return Node
     */
    public function setSides(Sides $sides)
    {
        $this->attribute($sides->getName(), $sides->getValue());
        return $this;
    }
    
    /**
     * @param Skew skew
     * @return Node
     */
    public function setSkew(Skew $skew)
    {
        $this->attribute($skew->getName(), $skew->getValue());
        return $this;
    }
    
    /**
     * @param Sortv sortv
     * @return Node
     */
    public function setSortv(Sortv $sortv)
    {
        $this->attribute($sortv->getName(), $sortv->getValue());
        return $this;
    }
    
    /**
     * @param Style style
     * @return Node
     */
    public function setStyle(Style $style)
    {
        $this->attribute($style->getName(), $style->getValue());
        return $this;
    }
    
    /**
     * @param Width width
     * @return Node
     */
    public function setWidth(Width $width)
    {
        $this->attribute($width->getName(), $width->getValue());
        return $this;
    }
    
    /**
     * @param Xlabel xlabel
     * @return Node
     */
    public function setXlabel(Xlabel $xlabel)
    {
        $this->attribute($xlabel->getName(), $xlabel->getValue());
        return $this;
    }
    
    /**
     * @param Z z
     * @return Node
     */
    public function setZ(Z $z)
    {
        $this->attribute($z->getName(), $z->getValue());
        return $this;
    }
    
    /******************************************************************
     *                        SPECIFIC OUPUT
    *****************************************************************/
    
    /**
     * @param Area area
     * @return Node
     */
    public function setArea(Area $area)
    {
        $this->attribute($area->getName(), $area->getValue());
        return $this;
    }
    
    /**
     * @param Href href
     * @return Node
     */
    public function setHref(Href $href)
    {
        $this->attribute($href->getName(), $href->getValue());
        return $this;
    }
    
    /**
     * @param Id id
     * @return Node
     */
    public function setId(Id $id)
    {
        $this->attribute($id->getName(), $id->getValue());
        return $this;
    }
    
    /**
     * @param Rects rects
     * @return Node
     */
    public function setRects(Rects $rects)
    {
        $this->attribute($rects->getName(), $rects->getValue());
        return $this;
    }
    
    /**
     * @param Target target
     * @return Node
     */
    public function setTarget(Target $target)
    {
        $this->attribute($target->getName(), $target->getValue());
        return $this;
    }
    
    /**
     * @param Tooltip tooltip
     * @return Node
     */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->attribute($tooltip->getName(), $tooltip->getValue());
        return $this;
    }
    
    /**
     * @param URL URL
     * @return Node
     */
    public function setURL(URL $URL)
    {
        $this->attribute($URL->getName(), $URL->getValue());
        return $this;
    }
    
    /**
     * @param Vertices vertices
     * @return Node
     */
    public function setVertices(Vertices $vertices)
    {
        $this->attribute($vertices->getName(), $vertices->getValue());
        return $this;
    }
    
    /**
     * @param Xlp xlp
     * @return Node
     */
    public function setXlp(Xlp $xlp)
    {
        $this->attribute($xlp->getName(), $xlp->getValue());
        return $this;
    }
}
