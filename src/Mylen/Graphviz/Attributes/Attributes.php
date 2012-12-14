<?php
namespace Mylen\GraphViz\Attributes;

use Mylen\GraphViz\Types\AttributeType;

interface Attributes
{
    /**
     * @return AttributeType
     */
    public function getValue();
    
    /**
     * @return string
     */
    public function getName();
}
