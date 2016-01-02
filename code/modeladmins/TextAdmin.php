<?php 

class TextAdmin extends ModelAdmin
{
    public static $managed_models = array('TextResource'); // Can manage multiple models
  public static $url_segment = 'Text'; // Linked as /admin/products/
  public static $menu_title = 'Random text Admin';
}
