<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Positiontypebranch Entity
 *
 * @property int $id
 * @property int $branch_id
 * @property int $positiontype_id
 * @property int $qty
 *
 * @property \App\Model\Entity\Branch $branch
 * @property \App\Model\Entity\Positiontype $positiontype
 * @property \App\Model\Entity\Position[] $positions
 * @property \App\Model\Entity\Itemcategory[] $itemcategories
 */class Positiontypebranch extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
