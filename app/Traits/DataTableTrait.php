<?php
/**
 * Created by PhpStorm.
 * User: alfju
 * Date: 9/26/2018
 * Time: 10:59
 */
namespace App\Traits;
use Illuminate\Support\Facades\Auth;

trait DataTableTrait
{
    public function dataTable($model=null, $columns=[], $nostatus=null)
    {
        if($nostatus==null){
            $result = $model->select($columns)->where('configuration_id', Auth::user()->configuration_id)->where('status_id', '!=', 10);
        }else{
            $result = $model->select($columns)->where('configuration_id', Auth::user()->configuration_id);
        }
        return $result;
    }
}