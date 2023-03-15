<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $anfitrion
 * @property string $created_at
 * @property string $updated_at
 * @property integer $active
 * @property integer $love
 */
class Evento extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'evento';
    protected $primaryKey   = 'id';

    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['anfitrion', 'created_at', 'updated_at', 'active', 'love'];
}
