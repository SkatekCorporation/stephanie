<?php
/**
* UsersTable.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Model gerant les utilisateurs (Users)
*/
namespace App\Model\Table;

use App\Model\Entity;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class UsersTable extends Table {

    public function initialize(array $config)
    {
        
    }

    public function validationDefault(Validator $validator)
    {
        $validator->notEmpty([
            'username'          => ['message' => 'Veuillez renseigner le nom d\'utilisateur.'],
            'nom'               => ['message' => 'Veuillez mettre le nom de l\'agent'],
            'prenom'            => ['message' => 'Veuillez entrer le prenom'],
            'role'              => ['message' => 'Veuillez selectionner le type de l\'utilisateur'],
        ], 
        "Veuillez verifier vos informations !");

        $validator->notEmpty([
            'password'          => ['message' => 'Veuillez entrer le mot de passe de l\'agent'],
            'confirm_password'  => ['message' => 'Veuillez entrer la confirmation du mot de passe']
        ],
        "Veuillez fournir vos mots de passes",
        'create'
        );

        $validator->add('confirm_password', 'no-misspeling', [
            'rule'    => ['compareWith', 'password'],
            'message' => "Les mots de passes doivent être identiques."
        ]);        
        
        return $validator;
    }

    public function findUsers(Query $query, array $options = [])
    {
        $this->find('all')->where(['active' => true]);
        return $query;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username'], "Cet username n'est plus disponible."));
        // $rules->add($rules->isUnique(['email']   , "Cet adresse Email n'est plus diponible"));
        return $rules;
    }
}