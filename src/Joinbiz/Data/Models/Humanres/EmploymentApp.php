<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $application_id
 * @property string $approver_party_id
 * @property string $job_requisition_id
 * @property string $empl_position_id
 * @property string $status_id
 * @property string $employment_app_source_type_id
 * @property string $applying_party_id
 * @property string $referred_by_party_id
 * @property string $application_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByApproverPartyId
 * @property JobRequisition $jobRequisition
 */
class EmploymentApp extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'employment_app';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'application_id';

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
    protected $fillable = ['approver_party_id', 'job_requisition_id', 'empl_position_id', 'status_id', 'employment_app_source_type_id', 'applying_party_id', 'referred_by_party_id', 'application_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByApproverPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobRequisition()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\JobRequisition', 'job_requisition_id', 'job_requisition_id');
    }
}
