<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class Storage extends Model
{
    use HasFactory;


    public static function dupli($fname)
    {
        return  preg_replace_callback('!(?:-([0-9]+)(\.jpg|\.png|\.gif)$|(?=\.(?:jpg|png|gif)$))!', function ($m) {

            if (isset($m[1]) && isset($m[2])) {
                return '-' . ($m[1] + 1) . $m[2];
            } else {
                return "-2";
            }
        }, $fname);
    }


    public static function Insert($inp)
    {

        $createstorage = null;

        $inserttedid = 0;
        $atemp = 0;
        do {
            $atemp++;
            try {
                $createstorage =  Storage::create($inp);


                $inserttedid = $createstorage->id;
            } catch (QueryException $e) {


                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {

                    $inp['path'] = Storage::dupli($inp['path']);
                }
            }
        } while ($inserttedid == 0 && $atemp <= 10000);


        return  $createstorage;
    }
}
