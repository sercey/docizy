<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $_id;
    private $_model;

    public function authenticate()
    {
        $record = Editor::model()->findByAttributes(array('username'=>$this->username));
        if($record===null){
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        elseif($record->password !== md5($this->password)){
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else{
            $this->_id = $record->editor_id;
            $this->_model = $record;
            $this->setState('title', $record->name_surname);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getModel(){
        return $this->_model;
    }
}