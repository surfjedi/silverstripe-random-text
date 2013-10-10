<?php 

class RandomText_Controller extends Extension {
		function RandomText($num=1) {
			return DataObject::get("TextResource", "", "RAND()", "", $num); 
		}

}