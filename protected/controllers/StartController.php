<?php
class StartController extends CController{
    public function actionIndex()
{

    $brand = PhoneBrand::model() -> findAll();

    if(isset($_POST['id'])){

        $bran = PhoneName::model() -> findAllByAttributes(array('parentid'=> $_POST['id']));



    }
if(isset($_POST['i'])){

        $bra = PhoneName::model() -> findAllByAttributes(array('parentid'=> $_POST['id']));



    }

    $this->render('wer',array(
        'variable'=> $brand,'var'=> $bran,'va'=> $bra

    ));
}



}

