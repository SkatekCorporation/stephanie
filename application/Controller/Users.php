<?php
/**
* Users.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Gestion des Utilisateurs
*/
namespace App\Controller;

use Stephanie\Controller\AppController;
use Cake\ORM\TableRegistry;

class Users extends AppController {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Connexion des utilisateurs:: Ouverture de session
     */
    public function connexion()
    {
        if ($this->request->is('post')){
            $data = $this->request->getData();

            $user = $this->auth->identify($data['username'], $data['password']);

            if ($user){
                $this->auth->setUser($user);
                return $this->redirect('/users');
            }
            $this->flash->error("Informations incorrectes. Veuillez réesayer !");
        }
        $this->render('login', [
            'title' => 'Connexion'
        ]);
    }

    /**
     * Deconnecter un utilisateur
     */
    public function deconnexion()
    {
        $this->auth->logout();
        return $this->redirect('/');
    }

    /**
     * Affichage des informations de l'utilisateur
     * @param integer $id ID de l'utilisateur
     */
    public function profile($id = null)
    {
        if ($id == null){
            $id = $this->auth->getUser()['id'];
        }
        $this->isAuthorized($id);
        
        $user = $this->getModel()->find()->where(['id' => $id])->first();

        $this->render('profile', [
            'title' => 'Profil de l\'agent',
            'user'  => $user
        ]);
    }

    /**
     * Lister touts les utilisateurs enregistrer
     */
    public function liste()
    {
        $this->isAuthorized();

        $users = $this->getModel()->find('users');
        
        $this->render('liste', [
            'title' => 'Liste de tous les agents',
            'users' => $users
        ]);
    }

    /**
     * Creation d'un nouveau utilisateur
     */
    public function ajouter()
    {
        $this->isAuthorized();

        $user = $this->getModel()->newEntity();

        if ($this->request->is('post')){
            $user = $this->getModel()->newEntity($this->request->getData());
            
            if ($this->getModel()->save($user)) {
                return $this->redirect('/users');
            }            
            debugErrors($this->modelErrors($user->errors()));
        }
        
        $this->render('add', [
            'title' => 'Ajouter un nouvel agent',
            'roles' => $this->getRoles(),
            'user'  => $user
        ]);
    }

    /**
     * Modification d'un utilisateur
     * Par lui meme ou par l'admin
     */
    public function modifier($id = null)
    {
        if ($id == null){
            $id = $this->auth->getUser()['id'];
        }

        $this->isAuthorized($id);

        $user = $this->getModel()->find()->where(['id' => $id])->first();
        
        if ($this->request->is('post')){
            $data = $this->request->getData();
            $user = $this->getModel()->patchEntity($user, $data);

            if (empty($data['password'])){
                $user->setDirty('password',         false);
                $user->setDirty('confirm_password', false);
            }

            if(! in_array($this->auth->getUser()['role'], ['admin'])){
                ['username', 'role', 'fonction', 'active'];
                $user->setDirty('username', false);
                $user->setDirty('role',     false);
                $user->setDirty('fonction', false);
                $user->setDirty('active',   false);
            }

            if ($this->getModel()->save($user)){
                $this->flash->success("Modifié avec succès.");
                return $this->redirect("Users#profile/" . $id);
            } 
            \debugErrors($this->modelErrors($user->errors()));
        }

        $this->render('edit', [
            'title' => 'Modifier ' . ucwords($user->nom . ' ' . $user->prenom),
            'user'  => $user,
            'roles' => $this->getRoles()
        ]);
    }
    
    /**
     * Pour supprimer un utilisateur
     * Seul un admin peut supprimer un user
     * @param integer $id ID de user a supprimer
     */
    public function supprimer($id = null)
    {
        $this->isAuthorized();

        $user = $this->getModel()->find()->where(['id' => $id])->first();

        if ($user == null) {
            $this->flash->error("Agent non identifié");
            return $this->redirect('/users');
        }

        if ($this->request->is('post')){
            if ($user != null) {
                if ($this->getModel()->delete($user)) {
                    $this->flash->success("Supprimé avec succès.");
                    return $this->redirect('/users');
                } 
                \debugErrors($this->modelErrors($user->errors()));
            }
        }
        
        $this->render('delete', [
            'title' => 'Supprimer un agent',
            'user'   => $user
        ]);
    }

    /**
     * La liste des roles des users
     * @return array|string|null
     */
    public function getRoles($key = null)
    {
        $roles = [
            'admin' => 'Administrateur',
            'user'  => 'Agent'
        ];

        if ($key == null) {
            return $roles;
        }
        return empty($roles[$key]) ? null : $roles[$key];
    }

    /**
     * Bloque access a certain users qui ne dipose pas de role necessaire
     */
    public function isAuthorized($id = null)
    {
        if(! parent::isAuthorized($id)){
            return $this->redirect('/');
        }
    }
}