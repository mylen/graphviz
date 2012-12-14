<?php
namespace Mylen\GraphViz\Spring\Neato;

use Mylen\GraphViz\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }

}
