<?php 
namespace Mylen\GraphViz\Attributes;

use Mylen\GraphViz\Types\DoubleType;

/**
 * Indicates the preferred area for a node or empty cluster when laid out by patchwork.
 */
class Area extends AbstractAttributes
{
    
    protected $name = "area";

    public function __construct(DoubleType $value)
    {
        parent::__construct($value);
    }
    
}
