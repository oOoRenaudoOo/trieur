<?php

class FormNewshtml {

    public $title='';
    public $actionText='';
    public $submiText='';



    function afficheForm() {

        return '<div class="formConnexion">
        <form action="'.$this->actionText.'" method="post">
            <h2>'.$this->title.'</h2>
        <label for="">Email</label>
        <input type="text" name="actu" placeholder="Ex: CArnaval Morne Pitault">
        <label for="">mot de passe</label>
        <input type="text" name="password" placeholder="Ex: *****"> 
        <input type="submit" class="btnSubmit" value="'.$this->submitText.'">
    </div>';
    }


}




?>