<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $empl_position_id
 * @property string $status_id
 * @property string $party_id
 * @property string $budget_id
 * @property string $budget_item_seq_id
 * @property string $empl_position_type_id
 * @property string $estimated_from_date
 * @property string $estimated_thru_date
 * @property string $salary_flag
 * @property string $exempt_flag
 * @property string $fulltime_flag
 * @property string $temporary_flag
 * @property string $actual_from_date
 * @property string $actual_thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplPositionResponsibility[] $emplPositionResponsibilities
 * @property EmplPositionReportingStruct[] $emplPositionReportingStructsByEmplPositionIdManagedBy
 * @property EmplPositionReportingStruct[] $emplPositionReportingStructsByEmplPositionIdReportingTo
 * @property EmplPositionFulfillment[] $emplPositionFulfillments
 * @property Party $party
 * @property StatusItem $statusItem
 */
class EmplPosition extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empl_position';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'empl_position_id';

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
    protected $fillable = ['status_id', 'party_id', 'budget_id', 'budget_item_seq_id', 'empl_position_type_id', 'estimated_from_date', 'estimated_thru_date', 'salary_flag', 'exempt_flag', 'fulltime_flag', 'temporary_flag', 'actual_from_date', 'actual_thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionResponsibilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionResponsibility', 'empl_position_id', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionReportingStructsByEmplPositionIdManagedBy()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionReportingStruct', 'empl_position_id_managed_by', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionReportingStructsByEmplPositionIdReportingTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionReportingStruct', 'empl_position_id_reporting_to', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionFulfillment', 'empl_position_id', 'empl_position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\StatusItem', 'status_id', 'status_id');
    }
}
