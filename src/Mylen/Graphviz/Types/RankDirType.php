<?php 
namespace Mylen\GraphViz\Types;

/**
* "TB", "LR", "BT", "RL", corresponding to directed graphs drawn
*   from top to bottom, from left to right, from bottom to top, and from
*   right to left, respectively.
*/
class AttributeType extends AbstractAttributeType
{
    protected $name = "rankdir";
}
