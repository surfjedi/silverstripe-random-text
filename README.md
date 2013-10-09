silverstripe-random-text
========================

a random text snippet generator

Adds a model admin area to administer random text objects(a title and text snippet) to any where you want.

Requires: 


1. silverstripe 3.*
2. sortable grid field https://github.com/UndefinedOffset/SortableGridField


Install:

1. Copy the silverstripe-random-text folder into the same level as CMS
2. rename it to random-text
3. make sure you have the sortable grid field module installed
4. put the following code in which ever page type you want it(or just the main Page.php for all pages):
	class Page_Controller extends ContentController {
			//add the below code
			function RandomText($num=1) {
				return DataObject::get("TextResource", "", "RAND()", "", $num); 
			}

		//the rest of your page controller

5. add this code where ever you want the random text snippet to show up:

	<% loop Randomtext %>
	   <h4>$Title</h4>
	   <p>$description.LimitCharacters(200)</p>
	<% end_loop %>