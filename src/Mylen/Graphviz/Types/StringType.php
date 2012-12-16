<?php 
namespace Mylen\GraphViz\Types;

/**
* <P>A string "value".
*/
class StringType extends AbstractAttributeType
{
    public function __construct($value)
    {
        parent::__construct("\"$value\"");
    }
}
