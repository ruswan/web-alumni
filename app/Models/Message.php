<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * 
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $message_content
 * @property Carbon $send_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Message extends Model
{
	use SoftDeletes;
	protected $table = 'messages';

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'send_date' => 'datetime'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id',
		'message_content',
		'send_date'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'sender_id');
	}
}
