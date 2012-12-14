<?php 
namespace Mylen\GraphViz\Types;

/**
* <P>A string "value".
*/
class StringType extends AbstractAttributeType
{
    public function setValue($value)
    {
        parent::setValue("\"$value\"");
    }
}
