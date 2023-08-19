<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmploymentHistory
 *
 * @property int $id
 * @property int $user_id
 * @property string $company_name
 * @property string $job_title
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property User $user
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentHistory withoutTrashed()
 * @mixin \Eloquent
 */
class EmploymentHistory extends Model
{
	use SoftDeletes;
	protected $table = 'employment_history';

	protected $casts = [
		'user_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'company_name',
		'job_title',
		'start_date',
		'end_date'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
