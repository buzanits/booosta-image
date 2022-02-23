<?php
namespace booosta\image;

use \booosta\Framework as b;
b::init_module('image');

class Image extends \booosta\imagefile\Imagefile
{
  use moduletrait_image;

  public function __construct($filename)
  {
    \booosta\base\Module::__construct();

    if(is_readable($filename)):
      $this->valid = true;
      $this->set('pathfilename', $filename);
    else:
      $this->valid = false;
    endif;
  }
}
