<?php 

class TextAdmin extends ModelAdmin {
  public static $managed_models = array('TextResource'); // Can manage multiple models
  static $url_segment = 'Text'; // Linked as /admin/products/
  static $menu_title = 'Random text Admin';
}