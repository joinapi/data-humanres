<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $unemployment_claim_id
 * @property string $unemployment_claim_date
 * @property string $description
 * @property string $status_id
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 */
class UnemploymentClaim extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unemployment_claim';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'unemployment_claim_id';

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
    protected $fillable = ['unemployment_claim_date', 'description', 'status_id', 'party_id_from', 'party_id_to', 'role_type_id_from', 'role_type_id_to', 'from_date', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];
}
