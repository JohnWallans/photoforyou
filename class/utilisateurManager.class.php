<?php

class UtilisateurManager
{
    private $_db; // Instance de PDO.

    public function __construct($db)
    {
        $this->setDb($db);
    }

    // ADD
    public function add(Utilisateur $user)
    {
        $q = $this->_db->prepare('INSERT INTO UTILISATEUR(EmailUser, MdpUser) VALUES(:mEmail, :mMdp)');

        $q->bindValue(':mEmail', $user->getEmailUser());
        $q->bindValue(':mMdp', $user->getMdpUser());

        $q->execute();
    }

    // DELETE
    public function delete(Utilisateur $user)
    {
        $this->_db->exec('DELETE FROM UTILISATEUR WHERE IdUser = ' . $user->getIdUser());
    }

    // UPDATE
    public function update(Utilisateur $user)
    {
        $q = $this->_db->prepare('UPDATE UTILISATEUR SET EmailUser = :mEmail, MdpUser = :mMdp, WHERE id = :id');

        $q->bindValue(':mEmail', $user->getEmailUser());
        $q->bindValue(':mMdp', $user->getMdpUser());

        $q->execute();
    }

    public function get($id)
    {
        $id = (int) $id;

        $q = $this->_db->query('SELECT IdUser, EmailUser, MdpUser FROM UTILISATEUR WHERE id = ' . $id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Utilisateur($donnees);
    }

    public function getList()
    {
        $users = [];

        $q = $this->_db->query('SELECT IdUser, EmailUser, MdpUser FROM UTILISATEUR ORDER BY EmailUser');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new Utilisateur($donnees);
        }

        return $users;
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}

$db = new PDO('mysql:host=localhost;dbname=photoforyou_bdd', 'root', '');
$manager = new UtilisateurManager($db);
?>