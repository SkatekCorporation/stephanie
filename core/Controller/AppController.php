<<<<<<< HEAD
<?php
/**
* App.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Les fonctions communs des tout les controllers de l'application
* Tout les controllers doivent heriter cette Classe
*/

    namespace Stephanie\Controller;

	use Stephanie\View\AppView;
	use Stephanie\Router\Router;
	use Stephanie\Handlers\Flash;
	use Stephanie\Handlers\Session;
	use Stephanie\Auth\Auth;
	use Cake\ORM\TableRegistry;

	/**
	 * Classe generique de tout les controllers. Tout les controllers doivent
	 * heriter de cette class
	 */
    class AppController {

		protected $view;
		protected static $model;
		protected $flash;
		protected $request;
		protected $session;
		protected $auth;

		private static $className;

    	public function __construct()
    	{
			self::$className = substr(get_class($this), 15, 10);
			$this->view      = new AppView(get_class($this));

			$this::$model    = TableRegistry::get(self::$className, self::getModelClass());
			$this->request   = new \Stephanie\Request();
			$this->session   = new Session();
			$this->flash     = new Flash($this->session);
			$this->auth		 = new Auth();
    	}
		
		/**
		 * Page d'accueil par defaut
		 */
		public function debut($tmp = 'debut', array $options = []){
			if(empty($options['title'])) {
				$options['title'] = "Page de test du FrameWork";
			}
			if (empty($options['application'])) {
				$options['application'] = 'Skatek Corporation';
			}
			$this->view->render($tmp, $options);
		}
		
		/**
		 * Pour rendre la vue 
		 */
		public function render($file = null, array $options = [])
		{
			return $this->view->render($file, $options);
		}
		
		/**
		 * Pour rediriger vers une page donner
		 */
		public function redirect($params = null)
		{
			return header('Location: ' . Router::buildUrl($params));
		}

		public static function buildUrl($params = null, $type = null)
		{
			return Router::buildUrl($params, $type);
		}

		public function e404(Type $var = null)
		{
			# code...
		}
		
		/**
		 * Fonction pour traquer les erreurs generer par CakeORM
		 * @param array $modelErrors Liste des errors
		 * @return array Erreus formates
		 */
		public function modelErrors(array $modelErrors = [])
		{
			$errorMessage = [];
            foreach($modelErrors as $errors){
                foreach($errors as $error) {
                    $errorMessage[] = $error;
                }
			}
			return $errorMessage;
		}

		/**
		 * Obtenir le model de l'application
		 * Vous pouvez changer la table en passant le nom de la table en parametre
		 * @param string $table Nom de la table a requeter
		 * @return Cake\ORM\TableRegistry L'objet table 
		 */
		public static function getModel($table = null)
		{
			if ($table == null){
				return self::$model;
			}
			return TableRegistry::get($table, self::getModelClass($table));
		}

		/**
		 * Definition des className et de entityName pour l'ORM de type DATAMAPPER
		 * @param string $tableClass La classe a utiliser pour le Model
		 * @param string $entityClass La classe a utiliser pour l'entity
		 * @return array ['className', 'entityClass'] Les chemins complets du modelTable et de entityTable
		 */
		public static function getModelClass($tableClass = null)
		{
			if ($tableClass == null){
				$tableClass  = self::$className;
			}
			$tableClass = ucfirst($tableClass);
			
			$tabClass    = "App\Model\Table\\"  . $tableClass . "Table";
			$entityClass = "App\Model\Entity\\" . substr($tableClass, 0, -1);

			if (! class_exists($tabClass)) {
				$tabClass = null;
			}

			if (! class_exists($entityClass)) {
				$entityClass = null;
			}

			return [
				'className'   => $tabClass,
				'entityClass' => $entityClass
			];
		}

		public function isAuthorized($user_id = null)
		{
			$user = $this->auth->getUser();
			
			if($user) {
				if (in_array($user['role'], ['admin'])){ return true; }

				if ($user['id'] == $user_id) { return true; }
			}

			$this->flash->error("Vous n'avez pas droit de venir ici.");
			return false;
		}

		/**
		 * Obtenir une nouvelle entity de l'historique a enregistrer
		 * @param int $user_id ID de l'user en cours
		 * @param array $options Options a enregistrer pour plus des details
		 * @return \App\Model\Entity\Historique
		 */
		public function hEntity($user_id = null, $options = [])
		{
			$entity = $this->getModel('historiques')->newEntity();
			$entity->class_name = $this->session['router']['class']; 
			$entity->controller = $this->session['router']['controller']; 
			$entity->action     = $this->session['router']['action']; 
			$entity->user_id    = $user_id == null ? $this->auth->getUser()['id'] : $user_id; 
			$entity->note 		= json_encode($options);
			return $entity;
		}
=======
<?php
/**
* App.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Les fonctions communs des tout les controllers de l'application
* Tout les controllers doivent heriter cette Classe
*/

    namespace Stephanie\Controller;

	use Stephanie\View\AppView;
	use Stephanie\Router\Router;
	use Stephanie\Handlers\Flash;
	use Stephanie\Handlers\Session;
	use Stephanie\Auth\Auth;
	use Cake\ORM\TableRegistry;

	/**
	 * Classe generique de tout les controllers. Tout les controllers doivent
	 * heriter de cette class
	 */
    class AppController {

		protected $view;
		protected static $model;
		protected $flash;
		protected $request;
		protected $session;
		protected $auth;

		private static $className;

    	public function __construct()
    	{
			self::$className = substr(get_class($this), 15, 10);
			$this->view      = new AppView(get_class($this));

			$this::$model    = TableRegistry::get(self::$className, self::getModelClass());
			$this->request   = new \Stephanie\Request();
			$this->session   = new Session();
			$this->flash     = new Flash($this->session);
			$this->auth		 = new Auth();
    	}
		
		/**
		 * Page d'accueil par defaut
		 */
		public function debut($tmp = 'debut', array $options = []){
			if(empty($options['title'])) {
				$options['title'] = "Page de test du FrameWork";
			}
			if (empty($options['application'])) {
				$options['application'] = 'Skatek Corporation';
			}
			$this->view->render($tmp, $options);
		}
		
		/**
		 * Pour rendre la vue 
		 */
		public function render($file = null, array $options = [])
		{
			return $this->view->render($file, $options);
		}
		
		/**
		 * Pour rediriger vers une page donner
		 */
		public function redirect($params = null)
		{
			return header('Location: ' . Router::buildUrl($params));
		}

		public static function buildUrl($params = null, $type = null)
		{
			return Router::buildUrl($params, $type);
		}

		public function e404(Type $var = null)
		{
			# code...
		}
		
		/**
		 * Fonction pour traquer les erreurs generer par CakeORM
		 * @param array $modelErrors Liste des errors
		 * @return array Erreus formates
		 */
		public function modelErrors(array $modelErrors = [])
		{
			$errorMessage = [];
            foreach($modelErrors as $errors){
                foreach($errors as $error) {
                    $errorMessage[] = $error;
                }
			}
			return $errorMessage;
		}

		/**
		 * Obtenir le model de l'application
		 * Vous pouvez changer la table en passant le nom de la table en parametre
		 * @param string $table Nom de la table a requeter
		 * @return Cake\ORM\TableRegistry L'objet table 
		 */
		public static function getModel($table = null)
		{
			if ($table == null){
				return self::$model;
			}
			return TableRegistry::get($table, self::getModelClass($table));
		}

		/**
		 * Definition des className et de entityName pour l'ORM de type DATAMAPPER
		 * @param string $tableClass La classe a utiliser pour le Model
		 * @param string $entityClass La classe a utiliser pour l'entity
		 * @return array ['className', 'entityClass'] Les chemins complets du modelTable et de entityTable
		 */
		public static function getModelClass($tableClass = null)
		{
			if ($tableClass == null){
				$tableClass  = self::$className;
			}
			$tableClass = ucfirst($tableClass);
			
			$tabClass    = "App\Model\Table\\"  . $tableClass . "Table";
			$entityClass = "App\Model\Entity\\" . substr($tableClass, 0, -1);

			if (! class_exists($tabClass)) {
				$tabClass = null;
			}

			if (! class_exists($entityClass)) {
				$entityClass = null;
			}

			return [
				'className'   => $tabClass,
				'entityClass' => $entityClass
			];
		}

		public function isAuthorized($user_id = null)
		{
			$user = $this->auth->getUser();
			
			if($user) {
				if (in_array($user['role'], ['admin'])){ return true; }

				if ($user['id'] == $user_id) { return true; }
			}

			$this->flash->error("Vous n'avez pas droit de venir ici.");
			return false;
		}
>>>>>>> 00f7cb084a74b7c51cef9a730acb0b23443ef191
    }