<?php namespace Dlp\Events\Models;

use Model;

/**
 * Model
 */
class Inscription extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dlp_events_inscriptions';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



    /*
     * Relations
     */
    public $belongsTo = [
        'user' => ['Rainlab\User\\Models\User'],
        'event' => ['Dlp\Events\Models\Event'],
        'instrument' => ['Dlp\Events\Models\Instrument'],
    ];
}
