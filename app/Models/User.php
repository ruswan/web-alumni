<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Filament\Panel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
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
 * @property string|null $photo
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
 * @property Consulate|null $consulate
 * @property Graduation|null $graduation
 * @property Major|null $major
 * @property Collection|EmploymentHistory[] $employment_histories
 * @property Collection|EventRegistration[] $event_registrations
 * @property Collection|Message[] $messages
 * @package App\Models
 * @property-read int|null $employment_histories_count
 * @property-read int|null $event_registrations_count
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereConsulateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEntryYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGraduationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMajorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
class User extends Authenticatable implements FilamentUser
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
        'photo',
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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}