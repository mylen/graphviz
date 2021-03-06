<?php 
namespace Mylen\GraphViz\Attributes;


/**
 * If the value of the attribute is "out", then
 *   the outedges of a node, that is, edges with the node as its tail node,
 *   must appear
 *   left-to-right in the same order in which they are defined in
 *   the input.
 *   If the value of the attribute is "in", then
 *   the inedges of a node must appear
 *   left-to-right in the same order in which they are defined in
 *   the input.
 *   If defined as a graph or subgraph attribute, the value is applied to all nodes
 *   in the graph or subgraph. Note that the graph attribute takes
 *   precedence over the node attribute.
 */
class Ordering extends AbstractAttributes
{                
    
    protected $name = "ordering";
}
