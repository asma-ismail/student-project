<?php

namespace App\Models;

use PDPhilip\Elasticsearch\Eloquent\Model as ElasticModel;

/**
 * @mixin \Eloquent
 */
class Document extends ElasticModel
{
    protected $connection = 'elasticsearch';
    protected $index = 'elastic-demo1';

}
