<?php 

class RandomText_Controller extends Extension
{
    public function RandomText($num=1)
    {
        return DataObject::get("TextResource", "", "RAND()", "", $num);
    }
}
