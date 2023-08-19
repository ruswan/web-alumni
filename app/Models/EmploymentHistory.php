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
 * 
 * @property User $user
 *
 * @package App\Models
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
