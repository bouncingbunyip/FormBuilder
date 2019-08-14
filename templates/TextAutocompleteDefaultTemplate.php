<?php

/**
 *
 * @author jackal
 *        
 */
namespace FormBuilder;

class TextAutocompleteDefaultTemplate
{

    /**
     */
    function __construct()
    {}

    /**
     * getHtml
     * 
     * @param TextAutocompleteFormBuilder $elem
     * @return string HTML for the input field with autocomplete enabled.
     * @see https://jqueryui.com/autocomplete/
     */    
//    public function getHtml(TextAutocompleteFormBuilder $elem) {
//        $label = $elem->getLabel();
//        if ($label) {
//            $label_html = '<label for="'. $elem->getName() .'">'. $elem->getLabel() .'</label>'. PHP_EOL;
//        } else {
//            $label_html = '';
//        }
//
//        $error = $elem->getError();
//        if (!empty($error)) {
//            $err_html = '<span class="'. $elem->getCssError() .'">'. $elem->getError() .'</span>';
//        } else {
//            $err_html = '';
//        }
//
//        if (isset($elem->tooltip)) {
//            $tt_html = $elem->tooltip->render();
//        } else {
//            $tt_html = '';
//        }
//
//        if (!empty($elem->autocomplete)) {
//            foreach($elem->autocomplete as $key => $value) {
//                $auto[] = '$(\'#'.$key.'\').val(suggestion.'.$value.');';
//            }
//            $autocomplete = implode(PHP_EOL, $auto);
//        } else {
//            $autocomplete = '$(\'#'. $elem->getName() .'_id\').val(suggestion.key);';
//        }
//        $html = <<<HTML
//{$label_html}
//<input type="text" id="{$elem->getId()}" name="{$elem->getName()}" value="{$elem->getValue()}" required="required">
//<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
//<script type='text/javascript'>
//    $(function(){
//        $('#{$elem->getId()}').autocomplete({
//            serviceUrl: '{$elem->getSource()}',
//            onSelect: function(suggestion) {
//                {$autocomplete}
//            }
//        });
//    });
//</script>
//{$err_html}{$tt_html}
//HTML;
//        return $html;
//    }

    public function getHtml($elem) {
        $html = '<div class="ui-widget">
  <label for="'. $elem->getName() .'">Tags: </label>
  <input id="'. $elem->getName() .'">
</div>';
        $html .= '<script>'. PHP_EOL;
        $html .= $elem->getSource();
        $html .= '</script>'. PHP_EOL;
        return $html;
    }
}
