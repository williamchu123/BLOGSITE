<?php
/**
 * this file is log module for log every what you want to log things
 */
class rt_log{
	const DEBUG = 7;
	const INFO = 6;

	public function log($log_info,$property=7){
		$log_dir = "/var/log/blog/";
		if(!is_dir($dir)){
			//need modify umask to 0000
			mkdir($log_dir,0777,true);
		}
		$log_file = date("Ymd").".log";
		$handle=fopen($log_dir.$log_file, "a");
		$log_info = date("Y-m-d H:i:s").self::getproperty($property).": ".$log_info."\n";
		fwrite($handle, $log_info);
		fclose($handle);
	}
	/**
	 * this function is return current date like this "20150801"
	 * @return string
	 */
	public static function timetostr(){
		return date("Ymd",time());
	}
	/**
	 * get property for output
	 * @param int $property
	 * @return string
	 */
	private static function getproperty($property){
		switch($property){
			case 7:
				return " debug ";
				break;
			case 6:
				return " info ";
				break;
			default:
				return " error ";
				break;
		}
	}
}
?>