<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $from_date
 * @property string $thru_date
 * @property string $termination_reason_id
 * @property string $termination_type_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByPartyIdFrom
 * @property Party $partyByPartyIdTo
 */
class Employment extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'employment';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'termination_reason_id', 'termination_type_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPartyIdFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPartyIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id_to', 'party_id');
    }
}
