<?php 
namespace Atos\Worldline\Fm\Integration\Ucs\EventFlowAnalyser\GraphViz\Types;

/**
* <P>A double with an optional prefix '+'.
*/
class AddDoubleType extends AbstractAttributeType
{
    public function __construct($value)
    {
        if ( 0 == preg_match('#^\+?\d+(\.\d+)?$#', $value)) {
            throw new \Exception('value should be of form #^\+?\d+(\.\d+)?$#');
        }
        parent::__construct("\"$value\"");
    }
}
