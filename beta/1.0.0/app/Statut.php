<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Cviebrock\EloquentSluggable\SluggableInterface;
    use Cviebrock\EloquentSluggable\SluggableTrait;

    /**
 * App\Statut
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $slug
 * @property string $color
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Statut whereSlug($slug)
 */
class Statut extends Model implements SluggableInterface
    {
        use SluggableTrait;
        protected $sluggable = [
            'build_from' => 'name',
            'save_to'    => 'slug',
        ];

        protected $table = 'statuts';
        protected $fillable = [
            'slug',
            'name',
            'color',
            'is_default'
        ];

        public function presents()
        {
            $this->hasMany('\App\Present');
        }

        public function user()
        {
            $this->belongsTo('\App\User');
        }

    public function scopeDefault($query)
    {
        return $query->where('is_default', '=', 1);
    }
    public function scopeOderByDefault($query)
    {
        return $query->orderBy('is_default','desc');
    }
    

    }
