<?php 
namespace Mylen\GraphViz\Attributes;


/**
 * Terminating condition. If the length squared of all energy gradients are
 *   &lt; <B>epsilon</b>, the algorithm stops.
 */
class Epsilon extends AbstractAttributes
{                
    
    protected $name = "epsilon";
}
