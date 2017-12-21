$conv_ = jQuery;
$conv_(document).ready(function(){
$conv_('.form-item-field-kunststijle-tid').each(function(i, select){
      var $conv_select = $conv_(select);
      $conv_select.find('option').each(function(j, option){
          var $conv_option = $conv_(option);
          // Create a radio:
          var $conv_radio = $conv_('<input type="checkbox" />');
          // Set name and value:
          $conv_radio.attr('name', $conv_select.attr('name')).attr('value', $conv_option.val());
          // Set checked if the option was selected
          if ($conv_option.attr('selected')) $conv_radio.attr('checked', 'checked');
          // Insert radio before select box:
          $conv_select.before($conv_radio);
          // Insert a label:
          $conv_select.before(
            $conv_("<label />").attr('for', $conv_select.attr('name')).text($conv_option.text())
          );
          // Insert a <br />:
          $conv_select.before("<br/>");
      });
      $conv_select.remove();
  });
});
$conv_(document).ajaxComplete(function(){
$conv_('.form-item-field-kunststijle-tid').each(function(i, select){
      var $conv_select = $conv_(select);
      $conv_select.find('option').each(function(j, option){
          var $conv_option = $conv_(option);
          // Create a radio:
          var $conv_radio = $conv_('<input type="checkbox" />');
          // Set name and value:
          $conv_radio.attr('name', $conv_select.attr('name')).attr('value', $conv_option.val());
          // Set checked if the option was selected
          if ($conv_option.attr('selected')) $conv_radio.attr('checked', 'checked');
          // Insert radio before select box:
          $conv_select.before($conv_radio);
          // Insert a label:
          $conv_select.before(
            $conv_("<label />").attr('for', $conv_select.attr('name')).text($conv_option.text())
          );
          // Insert a <br />:
          $conv_select.before("<br/>");
      });
      $conv_select.remove();
  });
});