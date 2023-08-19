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
 * Class Event
 * 
 * @property int $id
 * @property string $event_name
 * @property Carbon $event_date
 * @property string $location
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|EventRegistration[] $event_registrations
 *
 * @package App\Models
 */
class Event extends Model
{
	use SoftDeletes;
	protected $table = 'events';

	protected $casts = [
		'event_date' => 'datetime'
	];

	protected $fillable = [
		'event_name',
		'event_date',
		'location',
		'description'
	];

	public function event_registrations()
	{
		return $this->hasMany(EventRegistration::class);
	}
}
