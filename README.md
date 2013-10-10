silverstripe-random-text
========================

a random text snippet generator

Adds a model admin area to administer random text objects(a title and text snippet) to any where you want.

Requires: 


1. silverstripe 3.*



Install:

1. Copy the silverstripe-random-text folder into the same level as CMS
2. rename it to random-text
3. make sure you have the sortable grid field module installed


4. add this code where ever you want the random text snippet to show up:

	<% loop Randomtext %>
	   <h4>$Title</h4>
	   <p>$description.LimitCharacters(200)</p>
	<% end_loop %>

	or use the include

	<% include RandomText %>
5. Make sure you dev/build
6. make sure you ran ?flush=all