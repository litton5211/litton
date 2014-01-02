<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	  public $_id;
	  public $user_role;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{	
		phpCAS::forceAuthentication();

        $user = User::model()->findByAttributes(array('name'=>strtolower(phpCAS::getUser())));
       
        if(!$user){
        	$this->_id=0; 
			$this->setState('username', strtolower(phpCAS::getUser()));
        	$this->errorCode=self::ERROR_USERNAME_INVALID;
        }else{
			$this->_id=$user->id; 
		
			$this->setState('username', $user->name);
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode;
	}

	public function getId()
    {
        return $this->_id;;
    }
}