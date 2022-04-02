<?php

class API  {
	
	private $key  = null;

	function __construct($key = null){

		if(!empty($key)){
			$this->key = $key;
		}
	}
	
	function resquest(){

		$url = "https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=". $this->key ."";

		$response = file_get_contents($url);
		return json_decode($response);	
	}

	function ultimas_news(){

		$data = $this->resquest();
		return $data;
	}

}