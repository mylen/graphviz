<?php 
namespace Mylen\GraphViz\Attributes;


use Mylen\GraphViz\Types\DoubleType;

/**
 * Multiplicative scale factor for arrowheads.
 */
class Arrowsize extends AbstractAttributes
{
    
    protected $name = "arrowsize";
    
    public function __construct(DoubleType $value)
    {
        parent::__construct($value);
    }
}
