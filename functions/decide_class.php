<?php 
function decide_class_name($number,$how_many) 
{
  # This function rotates between highlight styles.
  
  # this way when boxes are shifted, added or deleted,  
  # the color of the highlight around each box will always maintain a color pattern 
  
  switch ($how_many)
    {
      case 3: # rotate 3 colors
        $i=$number % 3;
      
        switch ($i)
          {
            case 0: $class_name="popBox3"; break 2;
            case 1: $class_name="popBox1"; break 2;
            case 2: $class_name="popBox2"; break 2;
          }
      case 2:    # rotate 2 colors
        # $var=(test ? true : false);
        $class_name=($number % 2 == 0 ? "sBox2" : "sBox glow"); break;

      default: $class_name="sBox glow"; break;
    }
     
  return $class_name . " group";
}
?>
