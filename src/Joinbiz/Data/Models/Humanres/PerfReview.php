<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $employee_party_id
 * @property string $employee_role_type_id
 * @property string $perf_review_id
 * @property string $manager_party_id
 * @property string $payment_id
 * @property string $manager_role_type_id
 * @property string $empl_position_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByEmployeePartyId
 * @property Party $partyByManagerPartyId
 * @property Payment $payment
 */
class PerfReview extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'perf_review';

    /**
     * @var array
     */
    protected $fillable = ['manager_party_id', 'payment_id', 'manager_role_type_id', 'empl_position_id', 'from_date', 'thru_date', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByEmployeePartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'employee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByManagerPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'manager_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\Payment', 'payment_id', 'payment_id');
    }
}
