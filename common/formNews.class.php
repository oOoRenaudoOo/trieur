<?php

class FormNewshtml {

    public $title='';
    public $actionText='';
    public $submiText='';

    public $titleValue = '';
    public $descValue = '';



    function afficheForm() {

        if ($this->titleValue <> "") {

            $this->titleValue = "value=".'"'.$this->titleValue.'"';
        }
        
        // if ($this->descValue <> "") {

        //     $this->descValue = "value=".'"'.$this->descValue.'"';
        // }


        return '<div class="formNews">
        <form action="'.$this->actionText.'" method="post">
            <div class="title">
                <h2>'.$this->title.'</h2>
            </div>
        <label for="">Titre</label>
        <input type="text" name="title" '.$this->titleValue.' placeholder="Ex: CArnaval Morne Pitault">
        <label for="">Description</label>
        <textarea name="actu" placeholder="Description :" cols="30" rows="5">'.$this->descValue.'</textarea> 
        <input type="submit" class="btnSubmit" value="'.$this->submitText.'"></form>
    </div>';
    
    }


}




?>