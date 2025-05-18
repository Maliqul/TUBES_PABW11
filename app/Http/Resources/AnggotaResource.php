<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Anggota extends JsonResource
{

    public $resource;

    public function __construct($resource)
    {
        parent::__construct($resource);
    }
    

    public function toArray(Request $request): array
    {
        return ["data Anggota" => $this->resource];
    }
}
