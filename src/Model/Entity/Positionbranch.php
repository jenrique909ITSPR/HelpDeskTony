<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Positionbranch Entity
 *
 * @property int $id
 * @property int $branch_id
 * @property int $position_id
 * @property string $name
 *
 * @property \App\Model\Entity\Branch $branch
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Itemcode[] $itemcodes
 * @property \App\Model\Entity\User[] $users
 */
class Positionbranch extends Entity
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
