<?php
/**
 * Created by PhpStorm.
 * User: alfju
 * Date: 9/15/2018
 * Time: 18:36
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class QuoteIten extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'quote_itens';
    protected $fillable = [
        'product_name',
        'qty',
        'price',
        'subtotal',
        'quote_id',
        'product_id'
    ];

    public function status() {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
    public function configuration() {
        return $this->belongsTo('App\Models\Configuration', 'configuration_id');
    }
}