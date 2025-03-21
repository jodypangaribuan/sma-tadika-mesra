<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        // Common fields
        'phone_number',
        'address',
        'birth_date',
        'gender',
        'profile_photo',
        // Student specific fields
        'nis',
        'nisn',
        'class',
        'academic_year',
        'parent_name',
        'parent_phone',
        // Teacher specific fields
        'nip',
        'nuptk',
        'subject',
        'position',
        'join_date',
        'education_level',
        'education_institution',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
            'birth_date' => 'date',
            'join_date' => 'date',
        ];
    }
    
    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getProfilePhotoUrlAttribute()
    {
        if ($this->profile_photo) {
            return url('storage/' . $this->profile_photo);
        }
        
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=0066b3&color=fff&bold=true&size=200';
    }
    
    /**
     * Append virtual attributes to JSON output
     */
    protected $appends = ['profile_photo_url'];
}
