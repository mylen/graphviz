<?php 
namespace Mylen\GraphViz\Attributes;


/**
 * If true, the tail of an edge is clipped to the boundary of the tail node;
 *   otherwise, the end of the edge goes to the center of the node, or the
 *   center of a port, if applicable.
 */
class Tailclip extends AbstractAttributes
{                
    
    protected $name = "tailclip";
}
