<?php

namespace Joinbiz\Data\Models\Humanres;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $party_qual_type_id
 * @property string $from_date
 * @property string $status_id
 * @property string $verif_status_id
 * @property string $qualification_desc
 * @property string $title
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyQualType $partyQualType
 * @property Party $party
 * @property StatusItem $statusItem
 * @property StatusItem $statusItemByVerifStatusId
 */
class PartyQual extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_qual';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'verif_status_id', 'qualification_desc', 'title', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyQualType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\PartyQualType', 'party_qual_type_id', 'party_qual_type_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByVerifStatusId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Humanres\StatusItem', 'verif_status_id', 'status_id');
    }
}
