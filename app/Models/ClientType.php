<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientType extends Model
{
    use HasFactory;

    const WEB_TYPE_CLIENT = 'web';
    const GRAPHIC_TYPE_CLIENT = 'graphic';
    const SEO_TYPE_CLIENT = 'seo';
    const PPC_TYPE_CLIENT = 'ppc';

    public static function getAllClientTypes(): array
    {
        return [
            self::WEB_TYPE_CLIENT,
            self::GRAPHIC_TYPE_CLIENT,
            self::SEO_TYPE_CLIENT,
            self::PPC_TYPE_CLIENT
        ];
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
