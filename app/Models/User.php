<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    private static $user;

    public static function saveInfo($request, $id=null)
    {
        if ($id != null)
        {
            self::$user = User::find($id);
        }
        else
        {
            self::$user = new User();
        }
        if ($request->profile_photo_path)
        {
            if (file_exists(self::$user->profile_photo_path))
            {
                unlink(self::$user->profile_photo_path);
            }
            $imageUrl = getImageUrl($request->profile_photo_path, 'upload/user-images/');
        }
        else
        {
            $imageUrl = self::$user->profile_photo_path;
        }
        return self::saveBasicInfo(self::$user, $request, $imageUrl);
    }
    public static function saveBasicInfo($user, $request, $imageUrl){
        $user->name                     = $request->name;
        $user->moderator                = $request->moderator;
        $user->email                    = $request->email;
        $user->password                 = bcrypt($request->password);
        $user->profile_photo_path       = $imageUrl;
        $user->save();
        return $user;
    }
}
