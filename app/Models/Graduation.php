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
 * @property Collection|User[] $users
 * @package App\Models
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereBatchName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereGraduationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Graduation withoutTrashed()
 * @mixin \Eloquent
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
