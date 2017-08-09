<?php

namespace App\Search\Contracts;

interface SearchClientBuilder {

    /**
     * Status codes
     */
    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';

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
    
    /**
     * Perform paginated search.
     *
     * @param  int    $page
     * @param  int    $pageSize
     * @return SearchClientResponse
     */
    public function paginate($page, $pageSize);

    /**
     * Perform search.
     *
     * @return SearchClientResponse
     */
    public function get();

}