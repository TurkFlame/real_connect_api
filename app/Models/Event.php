<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';
    public $fillable = [
        "name",
        "start_date",
        "end_date",
        "cost",
        "participants_number",
        "image_url"
    ];
    public $cast = [
        "name" => "string",
        "start_date" => "datetime",
        "end_date" => "datetime",
        "cost" => "float",
        "participants_number" => "integer",
        "image_url" => "string"
    ];
}
