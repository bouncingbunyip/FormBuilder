<?php

include 'helpers.php';

include '../../../FormBuilder/FormBuilder.php';
include '../../../FormBuilder/FieldsetFormBuilder.php';
include '../../../FormBuilder/ElementFormBuilder.php';
include '../../../FormBuilder/elements/TextFormBuilder.php';
include '../../../FormBuilder/templates/TextDefaultTemplate.php';
include '../../../FormBuilder/elements/SubmitFormBuilder.php';
include '../../../FormBuilder/templates/SubmitDefaultTemplate.php';

use \FormBuilder\FormBuilder;
use \FormBuilder\SubmitFormBuilder;
use \FormBuilder\TextFormBuilder;

$form = new FormBuilder();

$fieldset1 = $form->addFieldset('testing1', 'id1', 'name1');
$fieldset2 = $form->addFieldset('testing2', 'id2', 'name2');

$attr = array(
    'label'=>'Name',
    'name'=>'name',
);

$form->addElem(new TextFormBuilder($attr), $fieldset1);
$form->addElem(new TextFormBuilder($attr), $fieldset2);

$form->addElem($fieldset2, $fieldset1);
$attr = array(
    'value'=>'Submit',
    'id'=>'name-id',
    'name'=>'name'
);
$form->addElem(new SubmitFormBuilder($attr));

$form->setFieldset($fieldset1);

//var_dump($form); exit;
writeHeader();
writeCode($form->render());
writeHtml($form->render());
writeFooter();