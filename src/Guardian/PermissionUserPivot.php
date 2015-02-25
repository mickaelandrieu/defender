<?php  namespace Artesaos\Guardian;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class PermissionUserPivot
 * @package Artesaos\Guardian
 */
class PermissionUserPivot extends Pivot {

	/**
	 * @var array
	 */
	protected $casts = [
		'value' => 'boolean'
	];

}