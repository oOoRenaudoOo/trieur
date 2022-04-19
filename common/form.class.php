<?php

class Formhtml {

    public $className = '';
    public $title = '';
    public $actionText ='' ;
    public $submiText = '';

    public $emailValue = '';
    public $passwordValue = '';

    public $dateIns = "";



    function afficheForm() {

        if ($this->emailValue <> "") {

            $this->emailValue = "value=".'"'.$this->emailValue.'"';
        }
        
        if ($this->passwordValue <> "") {

            $this->passwordValue = "value=".'"'.$this->passwordValue.'"';
        }

        if ($this->dateIns <> "") {

            // $this->dateIns = '<input class="dateins" type="text" value="disabled" disabled>'.$this->dateIns;

            $this->dateIns = '<label for="">inscrit le:</label>
                            <input class="dateins" type=""text" value="'.$this->dateIns.'" disabled></input>';
        }


        return '<div class="'.$this->className.'">
        <form action="'.$this->actionText.'" method="post">
        <div class="title">
            <h2>'.$this->title.'</h2>
        </div>
        <label for="">Email:</label>
        <input type="text" name="email" '.$this->emailValue.' placeholder="Ex: mail@domain.com">
        <label for="">mot de passe:</label>
        <input type="password" name="password" '.$this->passwordValue.' placeholder="Ex: *****">'.$this->dateIns.'
        <input type="submit" class="btnSubmit" value="'.$this->submitText.'"></form>
    </div>';
    }


}




?>