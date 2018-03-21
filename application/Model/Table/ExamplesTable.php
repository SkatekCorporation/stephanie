<?php
/**
* ExamplesTable.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Model
*/
namespace App\Model\Table;

use App\Model\Entity;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class ExamplesTable extends Table {

    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {               
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        return $rules;
    }
}
