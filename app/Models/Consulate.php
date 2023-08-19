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
 * Class Consulate
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property Collection|User[] $users
 * @package App\Models
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Consulate withoutTrashed()
 * @mixin \Eloquent
 */
class Consulate extends Model
{
	use SoftDeletes;
	protected $table = 'consulates';

	protected $fillable = [
		'name'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
