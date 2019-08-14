<?php
function getYoutubeVideoID($url){
	$queryString = parse_url($url,PHP_URL_QUERY);
	parse_str($queryString,$params);
	if(isset($params['v']) && strlen($params['v'])>0){
		return $params{'v'};
	}
	else{
		return "";
	}
}
            $video_url = $_POST['come'];

$api_key = 'YOUR_API_KEY';

$api_url = 'https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&maxResults=100&moderationStatus=published&textFormat=plainText&videoId='.getYoutubeVideoID($video_url).'&key='.$api_key; 


//echo $api_url;die;
//$data = json_decode(json_encode(file_get_contents($api_url))); 
$data = json_decode(file_get_contents($api_url), true);

$items = array();
foreach($data['items'] as $data2){
	$data3 = $data2['snippet']['topLevelComment']['snippet'];
	$data4 = array('authorDisplayName' => $data3['authorDisplayName'],'authorChannelUrl' => $data3['authorChannelUrl'],'textOriginal' => $data3['textOriginal'],'publishedAt' => $data3['publishedAt'],'updatedAt' => $data3['updatedAt'],'viewerRating' => $data3['viewerRating']);
	array_push($items,$data4);
}



$fileName = 'userData.csv';
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
		
        header("Pragma: public");
        $fh1 = @fopen( 'php://output', 'w' );
        $headerDisplayed1 = false;
 
        foreach ( $items as $items1 ) {
			
            // Add a header row if it hasn't been added yet
            if ( !$headerDisplayed1 ) {
                // Use the keys from $data as the titles
                fputcsv($fh1, array_keys($items1));
                $headerDisplayed1 = true;
            }
 
            // Put the data into the stream
            fputcsv($fh1, $items1);
        }
    // Close the file
        fclose($fh1);
    // Make sure nothing else is sent, our file is done
        exit;
