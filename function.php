// add this to functions field to create image name based on url

function fix_img_url($url){
 return empty($url) ? "" : $url."#/".substr(md5($url),0,8).".jpg";
}

// add this around image tag


[fix_img_url(   [imagetag] )]

// If all your images are together in a single field, separated by a comma or other character. Use this instead:

// Loop through each image url and apply fix.
function fix_img_urls($urls) {
	$output = array();
        $separator = ","; // Change this to your separator character
	foreach (explode($separator,$urls) as $url) {
                $url = trim($url);
		$output[] = empty($url) ? "" : $url."#/".substr(md5($url),0,8).".jpg";
	}
	return implode(",",$output);
}


// original source: https://gist.github.com/m-thomson/9c890a3e93a63295da39e2b7f7169922
