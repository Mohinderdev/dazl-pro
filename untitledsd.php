<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

class DashboardController extends AppController
{
    public function index()
    {        
        
        $this->viewBuilder()->setLayout('header');
        $uid = $this->Auth->user('id');
        $all_data = $this->Events->fetchMyEventsData('schedules');
        $row = array();
        foreach ($all_data as $data)
        {
            $row[] = array(
                'title' => $data->title,
                'start' => $data->start_date,
                'id' => $data->id
            );
        }
        $baseURL = Router::fullbaseUrl();
        $pageTitle = "Dashboard";
        $pageData = array(
                'pageTitle' => $pageTitle,
                'baseURL' => $baseURL
            );
        $this->set('pageData', $pageData);
        $this->set('eventsdata', $row);

        $this->loadComponent('Blackboard');        
        $broadcast_data = $this->Blackboard->fetchBroadcastMessage($uid);
        
        $this->set('broadcast_data',$broadcast_data);

        $this->loadComponent('BadgeCount');
        $broadcast_count = $this->BadgeCount->countBroadcast($uid);
        $this->set('boardcast_count',$broadcast_count);

        $this->Blackboard->updateBroadcastReadCount($uid);                
    }

    public function uploadImg()
    {
        $this->autoRender = false;
        $json = array();
        if ($this->request->is('post'))
        {
            //$uid = $this->Auth->user('id');
            $filePath   = $this->request->getData('filePath');
            $schedule_image   = $this->request->getData('scheduleUploadImage');
            $attachment = $this->request->getData('file');
            $name       = $attachment->getClientFilename();
            $type       = $attachment->getClientMediaType();
            $size       = $attachment->getSize();
            $tmpName    = $attachment->getStream()
                ->getMetadata('uri');
            //print_r($filePath); die();
            $error = $attachment->getError();
            $fileUrl = '/img/' . $filePath . '/' . $name;

            if ($filePath == 'doc_files' || $filePath == 'broadcast-doc') {                
                $allowedExts = array("application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "text/rtf", "application/octet-stream", "application/msword");
            } else {                
                $allowedExts = array('image/png','image/jpg','image/jpeg','image/JPG','image/PNG','image/JPEG');
            }
            if ($size <= 1048576 && in_array($type, $allowedExts)) {             	
	            if (move_uploaded_file($tmpName, WWW_ROOT . 'img' . DS . $filePath . DS . $name))
	            {
	                $data = array();
	                $created = date("Y-m-d H:i:s");
	                $data['Image']['file_name'] = $name;
	                $data['Image']['file_size'] = $size;
	                $data['Image']['file_type'] = $type;
	                $data['Image']['file_url'] = $tmpName;
	                $data['Image']['created'] = $created;
	                $json['status'] = 'success';
	                $json['code'] = $fileUrl;
	                $json['image_path'] = $name;
	                $json['image_details'] = $data;
	                $json['message'] = 'File uploaded successfully';
	            }
	            else
	            {
	                $json['status'] = 'error';
	                $json['message'] = 'File type not allowed';
	                $json['code'] = '';
	            }
	         }else{
	         	$json['status'] = 'error';
                $json['message'] = '"Warning!", "Invalid Image Format", "Supported Format(jpg,jpeg,png) or 1 MB or less are accepted for upload';
                $json['code'] = '';
	         }
            echo $jsonresponse = json_encode($json);
            exit;
        }
    }

    public function uploadChatImg()
    {
        $this->autoRender = false;
        $json = array();
        if ($this->request->is('post'))
        {
            //$uid = $this->Auth->user('id');
            $filePath   = $this->request->getData('filePath');
            $schedule_image   = $this->request->getData('scheduleUploadImage');
            $attachment = $this->request->getData('file');
            $name       = $attachment->getClientFilename();
            $type       = $attachment->getClientMediaType();
            $size       = $attachment->getSize();
            $tmpName    = $attachment->getStream()
                ->getMetadata('uri');
            
            $error = $attachment->getError();
            $fileUrl = '/img/' . $filePath . '/' . $name;

            // $path = 'myfolder/myimage.png';
            // $type = pathinfo($path, PATHINFO_EXTENSION);
            // $data = file_get_contents($path);
            // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


            //echo'<pre>'; print_r($base64); die();
            $allowed = array('image/png','image/jpg','image/jpeg','image/JPG','image/PNG','image/JPEG');
            if ($size <= 1048576 && in_array($type, $allowed)) { 
                
                if (move_uploaded_file($tmpName, WWW_ROOT . 'img' . DS . $filePath . DS . $name))
                {
                    $data = array();
                    $created = date("Y-m-d H:i:s");
                    $data['Image']['file_name'] = $name;
                    $data['Image']['file_size'] = $size;
                    $data['Image']['file_type'] = $type;
                    $data['Image']['file_url'] = $tmpName;
                    $data['Image']['created'] = $created;
                    $json['status'] = 'success';
                    $json['code'] = $fileUrl;
                    $json['image_path'] = $name;
                    $json['image_details'] = $data;
                    $json['message'] = 'File uploaded successfully';
                }
                else
                {
                    $json['status'] = 'error';
                    $json['message'] = 'File type not allowed';
                    $json['code'] = '';
                }
             }else{
                $json['status'] = 'error';
                $json['message'] = '"Warning!", "Invalid Image Format", "Supported Format(jpg,jpeg,png) or 1 MB or less are accepted for upload';
                $json['code'] = '';
             }
            echo $jsonresponse = json_encode($json);
            exit;
        }
    }

    public function uploadUserChatImg()
    {
        $this->autoRender = false;
        $json = array();
        if ($this->request->is('post'))
        {
            //$uid = $this->Auth->user('id');
            $filePath   = $this->request->getData('filePath');
            $attachment = $this->request->getData('file');
            $name       = $attachment->getClientFilename();
            $type       = $attachment->getClientMediaType();
            $size       = $attachment->getSize();
            $tmpName    = $attachment->getStream()
                ->getMetadata('uri');
            
            $error = $attachment->getError();
            $fileUrl = '/img/' . $filePath . '/' . $name;

            // $path = 'myfolder/myimage.png';
            // $type = pathinfo($path, PATHINFO_EXTENSION);
            // $data = file_get_contents($path);
            // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


            
            $allowed = array('image/png','image/jpg','image/jpeg','image/JPG','image/PNG','image/JPEG');
            if ($size <= 1048576 && in_array($type, $allowed)) { 
                
                if (move_uploaded_file($tmpName, WWW_ROOT . 'img' . DS . $filePath . DS . $name))
                {   //echo'<pre>'; print_r($tmpName); die();
                    $data = array();
                    $created = date("Y-m-d H:i:s");
                    $data['Image']['file_name'] = $name;
                    $data['Image']['file_size'] = $size;
                    $data['Image']['file_type'] = $type;
                    $data['Image']['file_url'] = $tmpName;
                    $data['Image']['created'] = $created;
                    $json['status'] = 'success';
                    $json['code'] = $fileUrl;
                    $json['image_path'] = $name;
                    $json['image_details'] = $data;
                    $json['message'] = 'File uploaded successfully';
                }
                else
                {
                    $json['status'] = 'error';
                    $json['message'] = 'File type not allowed';
                    $json['code'] = '';
                }
             }else{
                $json['status'] = 'error';
                $json['message'] = '"Warning!", "Invalid Image Format", "Supported Format(jpg,jpeg,png) or 1 MB or less are accepted for upload';
                $json['code'] = '';
             }
            echo $jsonresponse = json_encode($json);
            exit;
        }
    }
    public function openset(){
        $uid = $this->Auth->user('id');
        $data = $this->request->getData('eventID');
        $settingsTable = TableRegistry::get('event_settings');
//        $settingsdata = $settingsTable->find('all');
        $settingsdata = $settingsTable->find('all')->where(['schedule_id' => $data])->first();
       
        echo $jsonresponse = json_encode($settingsdata);
        exit;


    }
    public function savesettingsevent(){
         $uid = $this->Auth->user('id');
        $data = $this->request->getData();

//            $json = array();
//            $control_comment = '0';
//            $control_chat = '0';
//            $control_guest_files = '0';
//            $control_guest_guests = '0';
//            $control_notify_chat = '0';
//            $control_notify_comment = '0';
//            $control_notify_pictures = '0';
//            $control_notify_files = '0';
//            $schedule_id = '0';
        if(isset($data['control_comment'])){

            $control_comment = 1;// => on
        }
        else{
            $control_comment =0;
        }
        if(isset($data['control_chat'])){
            $control_chat = 1; //=> on
        }
        else{
            $control_chat=0;
        }

        if($this->request->getData('control_guest_files')){
            $control_guest_files = 1; //=> on
        }
        else{
            $control_guest_files=0;
        }
        if(isset($data['control_guest_guests'])){
            $control_guest_guests = 1;// => on
        }
        else{
            $control_guest_guests=0;
        }
        if(isset($data['control_notify_chat'])){
            $control_notify_chat = 1; //=> on
        }
        else{
            $control_notify_chat=0;
        }
        if(isset($data['control_notify_comment'])){
            $control_notify_comment = 1;// => on
        }
        else{
            $control_notify_comment=0;
        }
        if(isset($data['control_notify_pictures'])){
            $control_notify_pictures = 1;// => on
        }
        else{
            $control_notify_pictures=0;
        }
        if(isset($data['control_notify_files'])){
            $control_notify_files =1;// => on
        }
        else{
            $control_notify_files=0;
        }
        if($this->request->getData('schedule_id')){
            $schedule_id = $this->request->getData('schedule_id');
        }
        

        $schedule_data = $this->Events->fetchEventsDataByEventIdd('schedules',$schedule_id);
        $creator = $schedule_data[0]->users_id;
        if($creator == $uid){
        $event_settings = $this->getTableLocator()->get('event_settings');
        $settingsTable = TableRegistry::get('event_settings');  
        $settingsdata = $settingsTable->find('all')->where(['schedule_id' => $schedule_id])->first();
        if($settingsdata){
            $setting = $settingsdata;
        }else{
            $setting = $event_settings->newEmptyEntity();
        }

        $setting->control_comment = $control_comment;
        $setting->control_chat = $control_chat;
        $setting->control_guest_files = $control_guest_files;
        $setting->control_guest_guests = $control_guest_guests;
        $setting->control_notify_chat = $control_notify_chat;
        $setting->control_notify_comment = $control_notify_comment;
        $setting->control_notify_pictures = $control_notify_pictures;
        $setting->control_notify_files = $control_notify_files;
        $setting->schedule_id = $schedule_id;
        $inserted_id = $event_settings->save($setting);            
        $data = $inserted_id->id;
        }else{
     
        $event_settings = $this->getTableLocator()->get('event_notify_settings');
        $settingsTable = TableRegistry::get('event_notify_settings');  
        $settingsdata = $settingsTable->find('all')->where(['schedule_id' => $schedule_id,'guest' => $uid])->first();
        if($settingsdata){
            $setting = $settingsdata;
        }else{
            $setting = $event_settings->newEmptyEntity();
        }
        

        $setting->guest = $uid;
        $setting->control_notify_chat = $control_notify_chat;
        $setting->control_notify_comment = $control_notify_comment;
        $setting->control_notify_pictures = $control_notify_pictures;
        $setting->control_notify_files = $control_notify_files;
        $setting->schedule_id = $schedule_id;
        $inserted_id = $event_settings->save($setting);            
        $data = $inserted_id->id;
        }
        if($data){
            $json['status'] = 'success';
        }

        echo $jsonresponse = json_encode($json);
          exit;
    }
    public function search($query = null) {
        $this->viewBuilder()->setLayout('header');       
        $uid = $this->Auth->user('id');
        $query = $this->request->getQuery('query');

        $this->loadComponent('Contact');
        $userids = $this->Contact->getAddedContactUser($uid);
        $user_ids = $this->Contact->getAddedContactUser($uid);
        $user_ids[] = $uid; 
       // echo '<pre>';print_r($user_ids);
        if(isset($query) && strlen($query) > 0) {
            //booking
            $eventTable = TableRegistry::get('schedules'); 
            $qu = '%'.$query.'%';  
          //  var_dump($qu);     
            $schedules = $eventTable->find()
                ->where(['title LIKE' => $qu])->orderDesc('created');  
            $schedulesdata = array();
            foreach($schedules as $schedule){
               // echo '<pre>';print_r($schedule);
                if(in_array($schedule->users_id, $user_ids)){
                  //  die('dhcdhcdgfc0');
                    $userInfo = $this->User->findById('users',$schedule->users_id);
                    $schedule->start_date = date("F j, Y, g:i a", strtotime($schedule->start_date));
                    $scheduleUserTable = $this->getTableLocator()->get('schedules_users');
                    $schedule_user = $scheduleUserTable->find()->where([
                        'schedules_id' => $schedule->id,
                        'users_id' => $uid
                    ])->first();
                  //  if (!empty($schedule_user)) {
                        // die('ffffffff');
                        $schedulesdata[] = array(
                            'id' => $schedule->id,
                            'title' => $schedule->title,
                            'start_date' => $schedule->start_date,
                            'user_name' => $userInfo->first_name.' '.$userInfo->last_name,
                            'user_image' => '/webroot/img/profile_img/'.$userInfo->photo
                        );
                  //  }                                                        
                }               
            }
// die('djhdg');
            //contacts
            $userTable = TableRegistry::get('users');        
            $users_data = $userTable->find()
                ->where([
                    'OR' =>  array(
                        array('first_name LIKE' => '%'.$query.'%'),
                        array('last_name LIKE' =>  '%'.$query.'%')
                    ),
                ]);                 
            $users = array();
            foreach($users_data as $user){
                if(in_array($user->id, $user_ids)){
                    if ($uid !== $user->id) {
                        $users[] = array(
                            'id' => $user->id,
                            'user_name' => $user->first_name.' '.$user->last_name,
                            'user_image' => '/webroot/img/profile_img/'.$user->photo,
                            'id LIKE' =>  '%'.$query.'%'
                        );
                    }                    
                } 
            }

            //images
            $imagesTable = TableRegistry::get('images');
            $images_data = $imagesTable->find()
                ->where([
                    'OR' =>  array(
                        array('file_name LIKE' => '%'.$query.'%')
                    ),
                ])->orderDesc('created'); 
            $allimages = array();
            foreach($images_data as $image){ 
                if(in_array($image->uploader_id, $userids)){
                    $userInfo = $this->User->findById('users',$image->uploader_id);
                    $scheduleUserTable = $this->getTableLocator()->get('schedules_users');
                    $schedule_user = $scheduleUserTable->find()->where([
                        'schedules_id' => $image->schedules_id,
                        'users_id' => $uid
                    ])->first();
                    if (!empty($schedule_user)) {
                        $allimages[] = array(
                            'id' => $image->id,
                            'name' =>  $image->file_name,
                            'source_url' => $image->file_url,
                            'size' =>  $image->file_size,
                            'created' => $image->created,
                            'user_image' => '/webroot/img/profile_img/'.$userInfo->photo,
                            'user_name' => $userInfo->first_name.' '.$userInfo->last_name
                        );
                    }                                
                            
                }
            }

            //files
            $filesTable = TableRegistry::get('files');
            $files_data = $filesTable->find()
                ->where([
                    'OR' =>  array(
                        array('file_name LIKE' => '%'.$query.'%')
                    ),
                ])->orderDesc('created');

            $allfiles = array();
            foreach($files_data as $file){
                if(in_array($file->uploader_id, $user_ids)){
                    $userInfo = $this->User->findById('users',$file->uploader_id); 
                    
                        $allfiles[] = array(
                            'id' => $file->id,
                            'name' =>  $file->file_name,
                            'source_url' => $file->file_name,
                            'size' =>  $file->size,
                            'created' => date('Y-m-d', strtotime($file->created)),
                            'user_image' =>  '/webroot/img/profile_img/'.$userInfo->photo,
                            'user_name' =>  $userInfo->first_name.' '.$userInfo->last_name
                        );
                    
                }
            }
            //echo'<pre>'; print_r($allimages); die('ok');
            $this->set('schedules', $schedulesdata);
            $this->set('users', $users);
            $this->set('files', $allfiles);
            $this->set('images', $allimages);                                         
        } else {
            $this->set('users', array());
            $this->set('schedules', array());
            $this->set('files', array());
            $this->set('images', array());  
        }
    }


}

