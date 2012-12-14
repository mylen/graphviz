<?php
namespace Mylen\GraphViz\Spring\Fdp;

use Mylen\GraphViz\Attributes\K;

use Mylen\GraphViz\Cluster as BaseCluster;

class Cluster extends BaseCluster
{

    public static function create($id)
    {
        return new Cluster($id);
    }
    
    /**
     * @param K K
     * @return Cluster
     */
    public function setK(K $K)
    {
        $this->set($K->getName(), $K->getValue());
        return $this;
    }
    
}
