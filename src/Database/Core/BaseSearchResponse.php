<?php

namespace App\Search\Database\Core;

use Illuminate\Support\Collection;
use App\Search\Database\Contracts\BaseSearchResponse as BaseSearchResponseContract;
use App\Search\Contracts\SearchClientResponse;

class BaseSearchResponse implements BaseSearchResponseContract {

    /**
     * @var SearchClientResponse
     */
    protected $response;

    /**
     * Constructor
     *
     * @param  SearchClientResponse  $response
     */
    public function __construct(SearchClientResponse $response)
    {
        $this->response = $response;
    }

    /**
     * Get the search client response.
     *
     * @return SearchClientResponse
     */
    protected function response()
    {
        return $this->response;
    }

    /**
     * Get the take limit.
     *
     * @return int
     */
    public function limit()
    {
        return $this->response()->limit();
    }
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function status()
    {
        return $this->response()->status();
    }

    /**
     * Get the values count.
     *
     * @return int
     */
    public function count()
    {
        return $this->response()->count();
    }

    /**
     * Get the total count.
     *
     * @return int
     */
    public function totalCount()
    {
        return $this->response()->totalCount();
    }
    
    /**
     * Get the maximal score.
     *
     * @return float
     */
    public function maxScore()
    {
        return $this->response()->maxScore();
    }

    /**
     * Retrieve values ids.
     *
     * @return array
     */
    public function ids()
    {
        return $this->response()->ids();
    }

}