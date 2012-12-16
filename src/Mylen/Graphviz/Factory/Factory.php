<?php
namespace Mylen\GraphViz\Factory;

use Mylen\GraphViz\Factory\Format;

interface Factory
{
    public static function create($format, $id);
}
