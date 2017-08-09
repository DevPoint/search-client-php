<?php

namespace Devpoint\SearchClient\Database\Core;

use Devpoint\SearchClient\Database\Contracts\BaseSearchBuilder as BaseSearchBuilderContract;
use Devpoint\SearchClient\Contracts\SearchClientBuilder;

class BaseSearchBuilder implements BaseSearchBuilderContract {

    /**
     * @var SearchClientBuilder
     */
    protected $builder;

    /**
     * Constructor
     *
     * @param  SearchClientBuilder  $builder
     */
    public function __construct(SearchClientBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Add search filter for a field.
     *
     * @param  string  key
     * @param  mixed   value
     * @return self
     */
    public function filterExp($key, $value)
    {
        $this->builder->filterExp($key, $value);
    }
    
    /**
     * Override the default index.
     *
     * @param  string  $index
     * @return self
     */
    public function index($index)
    {
        $this->builder->index($index);
    }
}