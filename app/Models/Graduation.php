<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Graduation
 * 
 * @property int $id
 * @property string $batch_name
 * @property int $graduation_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Graduation extends Model
{
	use SoftDeletes;
	protected $table = 'graduations';

	protected $casts = [
		'graduation_year' => 'int'
	];

	protected $fillable = [
		'batch_name',
		'graduation_year'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
