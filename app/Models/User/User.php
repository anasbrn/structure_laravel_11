<?php

namespace App\Models\User;

use Carbon\Carbon;
use App\Models\AbstractModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends AbstractModel implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, Notifiable;

    public const TABLE = 'users';

    protected $table = self::TABLE;

    public const EMAIL_COLUMN = 'email';
    public const NAME_COLUMN = 'first_name';
    public const PRENOM_COLUMN = 'last_name';
    public const PHONE_COLUMN = 'phone';
    public const EMAIL_VERIFIED_AT_COLUMN = 'email_verified_at';
    public const REMEMBER_TOKEN_COLUMN = 'remember_token';
    public const PASSWORD_COLUMN = 'password';

    public const ADMIN_ROLE = 'admin';

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    protected $guarded = [];
    protected $hidden = [
        self::PASSWORD_COLUMN,
    ];

    protected function casts(): array
    {
        return [
            self::EMAIL_VERIFIED_AT_COLUMN => 'date',
        ];
    }

    public function getPassword(): string
    {
        return $this->getAttribute(self::PASSWORD_COLUMN);
    }

    public function getEmail(): string
    {
        return $this->getAttribute(self::EMAIL_COLUMN);
    }

    public function getName(): ?string
    {
        return $this->getAttribute(self::NAME_COLUMN);
    }

    public function getLastName() : ?string
    {
        return $this->getAttribute(self::PRENOM_COLUMN);
    }

    public function getPhone(): ?string
    {
        return $this->getAttribute(self::PHONE_COLUMN);
    }

    public function getEmailVerifiedAt(): ?Carbon
    {
        return $this->getAttribute(self::EMAIL_VERIFIED_AT_COLUMN);
    }

    public function isActive(): bool
    {
        return $this->getStatus() === self::STATUS_ACTIVE;
    }

    public function getPrenom(): ?string
    {
        return $this->getAttribute(self::PRENOM_COLUMN);
    }
}
