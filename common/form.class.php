<?php

class Formhtml {

    public $className = '';
    public $title = '';
    public $actionText ='' ;
    public $submiText = '';

    public $emailValue = '';
    public $passwordValue = '';



    function afficheForm() {

        if ($this->emailValue <> "") {

            $this->emailValue = "value=".'"'.$this->emailValue.'"';
        }
        
        if ($this->passwordValue <> "") {

            $this->passwordValue = "value=".'"'.$this->passwordValue.'"';
        }


        return '<div class="'.$this->className.'">
        <form action="'.$this->actionText.'" method="post">
        <div class="title">
            <h2>'.$this->title.'</h2>
        </div>
        <label for="">Email:</label>
        <input type="text" name="email" '.$this->emailValue.' placeholder="Ex: mail@domain.com">
        <label for="">mot de passe:</label>
        <input type="password" name="password" '.$this->passwordValue.' placeholder="Ex: *****"> 
        <input type="submit" class="btnSubmit" value="'.$this->submitText.'"></form>
    </div>';
    }


}




?>