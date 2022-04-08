<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Returns the options for a select list.
     *
     * @return array
     */
    public static function selectOptions()
    {
        $data = [];
        foreach (collect(self::all()->toArray())->sortBy('name') as $row) {
            $data[$row['id']] = $row['name'];
        };

        return $data;
    }
}
