<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $graduation_id
 * @property int|null $major_id
 * @property int|null $consulate_id
 * @property string|null $address
 * @property string|null $phone_number
 * @property Carbon|null $entry_year
 * @property string|null $deleted_at
 *
 * @property Consulate|null $consulate
 * @property Graduation|null $graduation
 * @property Major|null $major
 * @property Collection|EmploymentHistory[] $employment_histories
 * @property Collection|EventRegistration[] $event_registrations
 * @property Collection|Message[] $messages
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table = 'users';

    protected $casts = [
        'email_verified_at' => 'datetime',
        'graduation_id' => 'int',
        'major_id' => 'int',
        'consulate_id' => 'int',
        'entry_year' => 'datetime'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'graduation_id',
        'major_id',
        'consulate_id',
        'address',
        'phone_number',
        'entry_year'
    ];

    public function consulate()
    {
        return $this->belongsTo(Consulate::class);
    }

    public function graduation()
    {
        return $this->belongsTo(Graduation::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function employment_histories()
    {
        return $this->hasMany(EmploymentHistory::class);
    }

    public function event_registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
}
