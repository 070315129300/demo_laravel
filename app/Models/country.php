<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class country extends Model
{
    use HasFactory;
    protected $primaryKey = "country_id";

    public static function getCountries(){
        // row SQL

        $result = DB::select("SELECT * from countries");

        return $result;
    }
}
