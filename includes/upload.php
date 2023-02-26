<?php
class upload extends db_object{
    protected static $table_name="post";
    protected static $columns=array('post_id','userid','title','price','details','fileName');
    public $post_id;
    public $userid;
    public $title;
    public $price;
    public $details;
    public $fileName;
    public $fileTmpname;
    public $direction="../upload/";
    public $fileError=array();
    public $array_err=array(
        UPLOAD_ERR_OK => "upload bw",
        UPLOAD_ERR_INI_SIZE => "size  i gawraya",
        UPLOAD_ERR_FORM_SIZE => "keshayak haia la size",
        UPLOAD_ERR_PARTIAL => "tkaia dwbarai bkarawa",
        UPLOAD_ERR_NO_FILE => "tkaia img ek halbzhera",
        UPLOAD_ERR_NO_TMP_DIR => "file aka bwni nya",
        UPLOAD_ERR_CANT_WRITE => "file aka naxwenretawa",
        UPLOAD_ERR_EXTENSION => "jori file aka gunjaw nya"
    );

    public function set_img($image){
        
         $fileAlow=array('png','jpg','jpeg');
         $fileExt=explode('.', $image['name']);
         $fileActualExt=strtolower(end($fileExt));
         global $session;
            
        if(empty($image) || !$image || !is_array($image) || empty($session->userid) || empty($this->title) || empty($this->details) || empty($this->price) ){
            return  $this->fileError=$this->array_err[UPLOAD_ERR_NO_TMP_DIR];
        }
        else if($image['error']!=0){
            return  $this->fileError=$this->array_err[UPLOAD_ERR_PARTIAL];
        }
        else if(!in_array($fileActualExt,$fileAlow)){
            return $this->fileError=$this->array_err[UPLOAD_ERR_EXTENSION];
        }
        else{
            $this->fileName=rand().rand().rand().$image['name'];
            $this->fileTmpname=$image['tmp_name'];
            return true;
        }
    }
    public function save(){
        if($this->post_id){
            $this->update();
        }
        else{
            if(!empty($thsi->fileError)){
                return $this->fileError=$this->array_err[UPLOAD_ERR_PARTIAL];} 
                
            if(empty($this->fileName) || empty($this->fileTmpname)){
               return $this->fileError=$this->array_err[UPLOAD_ERR_NO_TMP_DIR];}
                
            $dir=$this->direction.$this->fileName;
           if (file_exists($dir)) {
             return  $this->fileError=$this->array_err[UPLOAD_ERR_FORM_SIZE ]; }
            
            if(move_uploaded_file($this->fileTmpname,$dir)){
                if($this->create()){
                    unset($this->fileTmpname);
                    return true;
                }
            } 
            else{
                return $this->fileError=$this->array_err[UPLOAD_ERR_PARTIAL ]; }   
            
        }
    }   


    

}
$upload= new upload(); 

?>