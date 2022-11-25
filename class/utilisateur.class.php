<?php
class Utilisateur
{

    protected $table = 'UTILISATEUR';

    private $_IdUser;
    private $_EmailUser;
    private $_MdpUser;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __toString()
    {
        return $this->_IdUser . $this->_EmailUser . $this->_MdpUser;
    }

    public function getIdUser()
    {
        return $this->_IdUser;
    }

    public function getEmailUser()
    {
        return $this->_EmailUser;
    }

    public function setEmailUser($email)
    {
        $this->_EmailUser = $email;
    }

    public function getMdpUser()
    {
        return $this->_MdpUser;
    }

    public function setMdpUser($mdp)
    {
        $this->_MdpUser = $mdp;
    }
}
?>