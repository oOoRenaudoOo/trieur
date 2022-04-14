<?php

class FormNewshtml {

    public $title='';
    public $actionText='';
    public $submiText='';



    function afficheForm() {

        return '<div class="formNews">
        <form action="'.$this->actionText.'" method="post">
            <div class="title">
                <h2>'.$this->title.'</h2>
            </div>
        <label for="">Titre</label>
        <input type="text" name="title" placeholder="Ex: CArnaval Morne Pitault">
        <label for="">Description</label>
        <input type="textarea" name="actu"> 
        <input type="submit" class="btnSubmit" value="'.$this->submitText.'"></form>
    </div>';
    }


}




?>