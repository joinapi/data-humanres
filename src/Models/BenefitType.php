<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $benefit_type_id
 * @property string $parent_type_id
 * @property string $benefit_name
 * @property string $has_table
 * @property string $description
 * @property float $employer_paid_percentage
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property BenefitType $benefitTypeByParentTypeId
 * @property PartyBenefit[] $partyBenefits
 */
class BenefitType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'benefit_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'benefit_type_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['parent_type_id', 'benefit_name', 'has_table', 'description', 'employer_paid_percentage', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function benefitTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\BenefitType', 'parent_type_id', 'benefit_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyBenefits()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyBenefit', 'benefit_type_id', 'benefit_type_id');
    }
}
