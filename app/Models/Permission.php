<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	protected $fillable = ['group','name','display_name','description'];
}