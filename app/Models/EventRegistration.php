<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventRegistration
 * 
 * @property int $id
 * @property int|null $event_id
 * @property int|null $user_id
 * @property Carbon|null $registration_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Event|null $event
 * @property User|null $user
 *
 * @package App\Models
 */
class EventRegistration extends Model
{
	use SoftDeletes;
	protected $table = 'event_registrations';

	protected $casts = [
		'event_id' => 'int',
		'user_id' => 'int',
		'registration_date' => 'datetime'
	];

	protected $fillable = [
		'event_id',
		'user_id',
		'registration_date'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
