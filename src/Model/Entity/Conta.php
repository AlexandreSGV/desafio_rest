<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conta Entity
 *
 * @property int $idConta
 * @property int $idPessoa
 * @property float $saldo
 * @property float $limiteSaqueDiario
 * @property bool $flagAtivo
 * @property int $tipoConta
 * @property \Cake\I18n\FrozenTime $dataCriacao
 */
class Conta extends Entity
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
        'idPessoa' => true,
        'saldo' => true,
        'limiteSaqueDiario' => true,
        'flagAtivo' => true,
        'tipoConta' => true,
        'dataCriacao' => true
    ];
}
