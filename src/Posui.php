<?php

namespace Takielias\Posui;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Parent_;

class Posui extends Model
{
    private $posuiconfig;

    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->posuiconfig = \Config::get('posuiconfig');
        $this->table = $this->posuiconfig['table'];

    }
}