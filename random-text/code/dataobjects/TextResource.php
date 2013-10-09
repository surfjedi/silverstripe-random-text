<?php 
// /mysite/code/ImageResource.php



//Commented out due to this already being used in tabpage
class TextResource extends DataObject
{
    public static $db = array (
        'Title' => 'Text',
        'description' => 'Text',
        'SortID'=>'Int' 
    );
    
    
    
    public static $default_sort='SortID';
    
    // static $has_one = array (
    //     'Attachment' => 'Image', //Needs to be an image
    //     'GalleryPage' => 'GalleryPage',
    //     // 'SuperSizePage' => 'SuperSizePage',
    //     'HomePage' => 'HomePage'

    // );
    
    public static $summary_fields = array(
  		// 'Thumbnail'=>'Thumbnail',
  		'Title' => 'Title',
  		'description' => 'description'
 	);
 	
    
	
	public function getCMSFields()
    {
        return new Fieldlist(
            new TextField('Title'),
            new TextareaField('description', $maxLength = 200)

        );
    }
}
