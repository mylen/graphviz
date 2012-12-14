<?php 
namespace Mylen\GraphViz\Attributes;


/**
 * If true, the node size is specified by the values of the
 *   <A HREF=#dwidth><B>width</b></a>
 *   and <A HREF=#dheight><B>height</b></a> attributes only
 *   and is not expanded to contain the text label.
 */
class Fixedsize extends AbstractAttributes
{                
    
    protected $name = "fixedsize";
}
