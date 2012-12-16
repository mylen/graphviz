<?php
namespace Mylen\GraphViz\Attributes;

use Mylen\GraphViz\Types\StringType;

use Mylen\GraphViz\Types\AttributeType;

/**
 * The table below describes the attributes used by various Graphviz tools.
 * The table gives the name of the attribute, the graph components (node,
 * edge, etc.) which use the attribute and the type of the attribute
 * (strings representing legal values of that type). Where applicable, the table
 * also gives a default value for the attribute, a minimum allowed setting
 * for numeric attributes, and certain restrictions on the use of the attribute.
 */
abstract class AbstractAttributes implements Attributes
{
    protected $name = null;
    protected $value = null;

    public function __construct($value)
    {
        if ($value instanceof AttributeType) {
            $this->value = $value;
        }
        else {
            $this->value = new StringType($value);            
        }
    }
    
    public static function create($value)
    {
        $caller = get_called_class();
        return new $caller($value);
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

}
