<?php
    function setExpires($expires) {
      header('Expires: '.gmdate('D, d M Y H:i:s', time() + $expires).'GMT');
    }
    setExpires(10000);

    $appName = 'Abmo Counselling';
    
    $index = '';
    $about = '';
    $counselor = '';
    $services = '';
    $pricing = '';
    $blog = '';
    $contact = '';

    switch ($pageNumber) {
        case 1:
            $index = ' active';
          break;
        case 2:
          $about = ' active';
          break;
        case 3:
          $counsellor = ' active';
          break;
        case 4:
          $services = ' active';
            break;
        case 6:
          $pricing = ' active';
            break;
        case 6:
          $blog = ' active';
            break;
        case 7:
          $contact = ' active';
            break;
        default:
          $index = '';
      }
?>