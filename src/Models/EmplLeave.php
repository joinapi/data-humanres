<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $leave_type_id
 * @property string $from_date
 * @property string $empl_leave_reason_type_id
 * @property string $approver_party_id
 * @property string $leave_status
 * @property string $thru_date
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property EmplLeaveReasonType $emplLeaveReasonType
 * @property Party $partyByApproverPartyId
 * @property EmplLeaveType $emplLeaveType
 * @property Party $party
 * @property StatusItem $statusItemByLeaveStatus
 */
class EmplLeave extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empl_leave';

    /**
     * @var array
     */
    protected $fillable = ['empl_leave_reason_type_id', 'approver_party_id', 'leave_status', 'thru_date', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplLeaveReasonType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplLeaveReasonType', 'empl_leave_reason_type_id', 'empl_leave_reason_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByApproverPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\Party', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplLeaveType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\EmplLeaveType', 'leave_type_id', 'leave_type_id');
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
    public function statusItemByLeaveStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\StatusItem', 'leave_status', 'status_id');
    }
}
