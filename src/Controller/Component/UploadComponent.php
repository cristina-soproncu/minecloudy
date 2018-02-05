<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;

class UploadComponent extends Component {

  public $max_files = 1;

  public function send($file) {
    if (!empty($file)) {
      $filename = $file['name'];
      $file_tmp_name = $file['tmp_name'];
      $dir = WWW_ROOT . 'uploads';
      $allowed = array('png', 'jpg', 'jpeg', 'mp3', 'mp4', 'avi');
      if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
        throw new InternalErrorException('Error processing request', 1);
      } elseif (is_uploaded_file($file_tmp_name)) {
        move_uploaded_file($file_tmp_name, $dir . DS . $filename);
      }
    }
  }

  public function checkType($filetype) {
    $mediaType = '';
    if (strpos($filetype, 'image') !== false) {
      $mediaType = 'image';
    } else if (strpos($filetype, 'video') !== false) {
      $mediaType = 'video';
    } else if (strpos($filetype, 'audio') !== false) {
      $mediaType = 'audio';
    }

    return $mediaType;
  }

}
