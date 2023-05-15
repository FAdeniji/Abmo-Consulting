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
            $title = $appName . ': Home';
          break;
        case 2:
            $about = ' active';
            $title = $appName. ': About Us';
          break;
        case 3:
            $counselor = ' active';
            $title = $appName . ': Counsellot';
          break;
        case 4:
            $services = ' active';
            $title = $appName . ': Services';
          break;
        case 5:
            $pricing = ' active';
            $title = $appName . ': Pricing';
          break;
        case 6:
            $blog = ' active';
            $title = $appName. ': Blog';
          break;
        case 7:
            $contact = ' active';
            $title = $appName . ': Contact';
          break;
        default:
          $index = ' active';
      }
?>