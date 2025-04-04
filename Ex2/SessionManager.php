<?php
class SessionManager{
    private $nbvisites;
    public function __construct(){
        session_start();
        if (isset($_SESSION['nbvisites'])) {
            $this->nbvisites = $_SESSION['nbvisites'] + 1;
        } else {
            $this->nbvisites = 1;
        }
        $_SESSION['nbvisites'] = $this->nbvisites;
    }
    public function incrementer(){
        $this->nbvisites++;
        $_SESSION['nbvisites'] = $this->nbvisites;
    }
    public function getNbVisites(){
        return $this->nbvisites;
    }
    public function reset(){
        $_SESSION['nbvisites'] = 0;
    }
}
?>