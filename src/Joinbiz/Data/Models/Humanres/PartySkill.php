<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $skill_type_id
 * @property float $years_experience
 * @property float $rating
 * @property float $skill_level
 * @property string $started_using_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 * @property SkillType $skillType
 */
class PartySkill extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party_skill';

    /**
     * @var array
     */
    protected $fillable = ['years_experience', 'rating', 'skill_level', 'started_using_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skillType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\SkillType', 'skill_type_id', 'skill_type_id');
    }
}
