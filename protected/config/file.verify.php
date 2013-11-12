<?php
	/****
	 *	文件验证设置
	 *	Author		WF
	 *	CreateTime	2013-11-7
	 **/
	class fileverify{			
		
		public $ImgMaxSize = 5;												//图片最大5M
		public $ImgExtName = array('gif','png','jpg');						//文件上传的图片类型
		
		public $FileMaxSize = 50;											//文件最大上传50M
		public $FileExtName	= array('xls','doc','docx','ppt','rar','zip');	//允许上传的文件类型
		
		public $ViedoMaxSize = 100;											//视屏最大上传100M
		public $ViedoExtName = array('flv');								//允许上传的视频格式
		
		public $TFS = '';													//当前文件大小
		public $TFEN = '';													//当前文档类型
		

		/****
		 *	图片上传大小验证
		 *	@return boolean
		 **/
		public function VerifyImgSize(){
			if($this->TFS > $this->ImgMaxSize *1024*1024){
				return false;
			}else{
				return true;
			}
		}
		
		/****
		 *	图片上传扩展名验证
		 *	@return boolean
		 **/
		public function VerifyImgExtName(){
			if(in_array(strtolower($this->TFEN),$this->ImgExtName)){
				return true;
			}else{
				return false;
			}
		}
		
		/****
		 *	文件上传大小验证
		 *	@return boolean
		 **/
		public function VerifyFileSize(){
			if($this->TFS > $this->FileMaxSize *1024*1024){
				return false;
			}else{
				return true;
			}
		}
		
		/****
		 *	文件上传扩展名验证
		 *	@return boolean
		 **/
		public function VerifyFileExtName(){
			if(in_array(strtolower($this->TFEN),$this->FileExtName)){
				return true;
			}else{
				return false;
			}
		}
		
		/****
		 *	视频上传大小验证
		 *	@return boolean
		 **/
		public function VerifyViedoSize(){
			if($this->TFS > $this->ViedoMaxSize *1024*1024){
				return false;
			}else{
				return true;
			}
		}
		
		/****
		 *	视频上传扩展名验证
		 *	@return boolean
		 **/
		public function VerifyViedoExtName(){
			if(in_array(strtolower($this->TFEN),$this->ViedoExtName)){
				return true;
			}else{
				return false;
			}
		}
		
		/****
		 *	文件夹路径判断如不存在则创建路径
		 *	@param		STRING		$str		文件保存路径
		 **/
		public function FolderPath($str){
			if (! is_dir ( $str )){
				if (!$this->FolderPath ( dirname ( $str ) )){
					return false;
				}
				if (! mkdir ( $str, 0777 )){
					return false;
				}
			}
			return true;
		}
	}
?>