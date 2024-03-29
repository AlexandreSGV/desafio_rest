<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $idPessoa
 * @property string $nome
 * @property string $cpf
 * @property \Cake\I18n\FrozenDate $dataNascimento
 */
class Pessoa extends Entity
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
        'nome' => true,
        'cpf' => true,
        'dataNascimento' => true
    ];
}
