<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $role_type_id
 * @property string $payroll_preference_seq_id
 * @property string $deduction_type_id
 * @property string $payment_method_type_id
 * @property string $period_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $percentage
 * @property float $flat_amount
 * @property string $routing_number
 * @property string $account_number
 * @property string $bank_name
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 */
class PayrollPreference extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'payroll_preference';

    /**
     * @var array
     */
    protected $fillable = ['deduction_type_id', 'payment_method_type_id', 'period_type_id', 'from_date', 'thru_date', 'percentage', 'flat_amount', 'routing_number', 'account_number', 'bank_name', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }
}
