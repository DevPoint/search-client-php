<?php

namespace App\Search\Database\Contracts;

interface BaseSearchResponse {

    /**
     * Get the take limit.
     *
     * @return int
     */
    public function limit();
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function status();
    
    /**
     * Get the values count.
     *
     * @return int
     */
    public function count();
    
    /**
     * Get the total count.
     *
     * @return int
     */
    public function totalCount();
    
    /**
     * Get the maximal score.
     *
     * @return float
     */
    public function maxScore();

    /**
     * Retrieve values ids.
     *
     * @return array
     */
    public function ids();

}