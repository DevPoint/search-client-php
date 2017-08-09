<?php

namespace App\Search\Database\Contracts;

interface BaseSearchBuilder {

    /**
     * Add search filter for a field.
     *
     * @param  string  key
     * @param  mixed   value
     * @return self
     */
    public function filterExp($key, $value);
    
    /**
     * Override the default index.
     *
     * @param  string  $index
     * @return self
     */
    public function index($index);
    
}