<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BackendController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');

	}

	

	// //function that uploads the file to the folders and also insert the the file to the database.
	function uploadFile ( $filesglobal=array(), $location, $extension=array(),$filetype ) {
		//explode the d=file name to get the extension..
		if(count($filesglobal) != 0){
			$ext = explode(".", $filesglobal['name']);
			//checking if the item at index 1 of the array from the file name exists in the allowed extension aarray...
			if( (count($ext) == 2) && in_array($ext[1], $extension)){
				//creating new unequie file name form time and md5 of the file name..
				$newfilename = md5($ext[0])."".time().".".$ext[1];
				$upload = move_uploaded_file($filesglobal['tmp_name'], $location."/".$newfilename);
				//checking if the file uploaded..
				if($upload){
					return  array("status"=>TRUE, "newname"=>$newfilename);
				}else{
					return  array("status"=>FALSE, "newname"=>"");
				}

			}else{
				return  array("status"=>FALSE, "message"=>"Invalid file type for".$filetype);
			}	
		}else{

			return  array("status"=>FALSE, "message"=>"No file  was uploaded");

		}		
	}



	//function to upload images with multiple sizes for large, medium, and small
	//function takes up the folder path as a dynamic for the multiple folders like post, events and profiles as well as profile pictures
    function upload_pic($name, $location,$filename)
    {

        $name= $_FILES[$filename]['name'];
        $size= $_FILES[$filename]['size'];
        $temp= $_FILES[$filename]['tmp_name'];
        $type= $_FILES[$filename]['type'];
        //uploading a file
        $ext = explode("/", $type);
        if($name != ""){
        $newName = sha1($name."".time()).".".$ext[1];
        }else{
            $newName ="";
        }
        move_uploaded_file($_FILES[$filename]['tmp_name'], $location."/large/".$newName);

        	$data['pic'] = $newName;
        	$result = TRUE;
            $src = $location."/large/".$newName;
            if ($result) {
                $this->resizeImage($src ,350, $location."/small/".$newName);
                $this->resizeImage($src ,500, $location."/medium/".$newName);
                return array("status"=>TRUE,"newname"=>$newName);
            }else{
            	return array("status"=>FALSE,"newname"=>$newName);
            }
    }


    function resizeImage($imageSrc , $width , $pathTo)
    {
		$this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = $imageSrc;
        $config['maintain_ratio'] = TRUE;
        // $config['file_permissions'] = 0644;
        $config['new_image'] = $pathTo;
        // $config['max_size'] = 2000;
        $config['width'] = $width;
	    $this->image_lib->clear();
	    $this->image_lib->initialize($config);
	    $this->image_lib->resize();
    }




  


}	//END OF THE BACKEND CONTROLLER CLASS

