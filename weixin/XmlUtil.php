<?php
	function array2xml($data,$root='root'){
		$xml='<'.$root.'>';
		_array2xml($data,$xml);
		$xml.='</'.$root.'>';
		return $xml;
	}
	
	function _array2xml(&$data,&$xml){
		if(is_array($data)){
			foreach($data as $k=>$v){
				if(is_numeric($k)){
					$xml.='<item>';
					$xml.=_array2xml($v,$xml);
					$xml.='</item>';
				}else{
					$xml.='<'.$k.'>';
					$xml.=_array2xml($v,$xml);
					$xml.='</'.$k.'>';
				}
			}
		}elseif(is_numeric($data)){
			$xml.=$data;
		}elseif(is_string($data)){
			$xml.='<![CDATA['.$data.']]>';
		}
	}
	
	
	function xml2array($contents, $output_tag=null) {
	    if(!$contents) return array();
	
	    if(!function_exists('xml_parser_create')) {
	        //print "'xml_parser_create()' function not found!";
	        return array();
	    }
	    //Get the XML parser of PHP - PHP must have this module for the parser to work
	    $parser = xml_parser_create('UTF-8');
	    xml_parser_set_option( $parser, XML_OPTION_CASE_FOLDING, 0 );
	    xml_parser_set_option( $parser, XML_OPTION_SKIP_WHITE, 0 );
	    xml_parse_into_struct( $parser, $contents, $xml_values );
	    xml_parser_free( $parser );
	
	    if(!$xml_values) return;//Hmm...
	
	    //Initializations
	    $xml_array = array();
	    $parents = array();
	    $opened_tags = array();
	    $arr = array();
	
	    $current = &$xml_array;
	    $number=0;
	    //Go through the tags.
	    foreach($xml_values as $data) {
	        unset($attributes,$value);//Remove existing values, or there will be trouble
	        extract($data);//We could use the array by itself, but this cooler.
	        $result = '';
	        if($tag=='item') {//The second argument of the function decides this.
	            if(!is_null($value)) $result = trim($value);
					if (!isset($data['attributes']['key'])&&$data['attributes']['key']){
						$tag=$number;
						$number++;
					}else{
						$tag = $data['attributes']['key'];
					}
	        } elseif(!is_null($value)) {
	           
	            $result = trim($value);
	        }
	
	        //See tag status and do the needed.
	        if($type == "open") {//The starting of the tag '<tag>'
	            $parent[$level-1] = &$current;
	
	            if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag
	                $current[$tag] = $result;
	                $current = &$current[$tag];
	
	            } else { //There was another element with the same tag name
	                if(isset($current[$tag][0])) {
	                    array_push($current[$tag], $result);
	                } else {
	                    $current[$tag] = array($current[$tag],$result);
	                }
	                $last = count($current[$tag]) - 1;
	                $current = &$current[$tag][$last];
	            }
	
	        } elseif($type == "complete") { //Tags that ends in 1 line '<tag />'
	            //See if the key is already taken.
	            if(!isset($current[$tag])) { //New Key
	                $current[$tag] = $result;
	
	            } else { //If taken, put all things inside a list(array)
	                if((is_array($current[$tag]) and $get_attributes == 0)//If it is already an array...
	                    or (isset($current[$tag][0]) and is_array($current[$tag][0]) and $get_attributes == 1)) {
	                        array_push($current[$tag],$result); // ...push the new element into that array.
	                    } else { //If it is not an array...
	                        $current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
	                    }
	            }
	
	        } elseif($type == 'close') { //End of tag '</tag>'
	            $current = &$parent[$level-1];
	        }
	    }
	    if($tag=='item'){
	        $number=0;
	    }
	   
	    if($output_tag){
	        return($xml_array[$output_tag]);
	    }else{
	        return($xml_array);
	    }
	}
?>