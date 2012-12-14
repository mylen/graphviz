<?php
namespace Mylen\GraphViz\Spring\Fdp\Sfdp;

use Mylen\GraphViz\Spring\Fdp\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }    
}
