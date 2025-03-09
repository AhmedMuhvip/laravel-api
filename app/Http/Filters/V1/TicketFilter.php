<?php

namespace App\Http\Filters\V1;

class TicketFilter
{
    public function status($value)
    {
        return $this->builder->where('status', $value);
    }
}
