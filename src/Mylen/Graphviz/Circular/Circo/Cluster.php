<?php
namespace Mylen\GraphViz\Circular\Circo;

use Mylen\GraphViz\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }

}
