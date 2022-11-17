<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'price',
        'description',
        'in_stock',
        'name',
        'company_slug'
    ];

    public const SCHEER_SLUG  = "scheer";
    public const SG_FACAS_SLUG = "sg-facas";
    public const GUINDANI_SLUG = "guindani";
    public const ELTZ_SLUG = "eltz-chopeiras";
    public const QUATRUN_SLUG  = "quatrun";

    static $COMPANY_OPTIONS  = [
        self::SCHEER_SLUG => 'Scheer',
        self::SG_FACAS_SLUG => 'SG - Facas',
        self::GUINDANI_SLUG => 'Guindani Fogões',
        self::ELTZ_SLUG => 'Eltz Chopeiras',
        self::QUATRUN_SLUG => 'Quatrun Lareiras'
    ];

    public function getCompanyAttribute()
    {
        return isset(self::$COMPANY_OPTIONS[$this->company_slug]) ?  self::$COMPANY_OPTIONS[$this->company_slug] : 'Empresa não informada';
    }
}
