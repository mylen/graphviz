<?php
namespace Mylen\GraphViz;

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

class Cluster extends SubGraph
{
    /**
     * Creates a new cluster.
     *
     * @param string          $id     Identifier of the cluster
     * @param BaseInstruction $parent Parent element
     */
    public function __construct($id, $parent = null)
    {
        parent::__construct('cluster_' . $id, $parent);
    }
}
