<?php
include "lib/Template.class.php";
$template = new Template();

$p1 = <<<'EOT'
<Lorem & ipsum> dolor sit amet, consectetur adipiscing elit. 
Donec pellentesque, ex a condimentum finibus, ex lorem egestas nisi, 
non semper lectus libero id ante. Maecenas eu faucibus magna. 
Aliquam eget sapien aliquet, venenatis tellus ut, tincidunt magna. 
Nunc ut nulla pharetra, commodo mauris sed, posuere tellus. Donec 
mattis magna id pharetra ornare. Sed ultricies commodo faucibus. 
Morbi fringilla aliquet ex non mollis. Etiam ut nulla ut nulla 
vestibulum consectetur a id mi. Integer tincidunt semper vestibulum. 
Pellentesque lobortis lacus eget est interdum, sed pharetra nisl 
malesuada. Pellentesque luctus nunc nec velit egestas pretium vel 
a lorem. Aenean sagittis nulla dolor, id malesuada sapien mattis eu. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
per inceptos himenaeos. Duis sollicitudin, lectus et tempor mattis, 
orci turpis tincidunt dolor, et malesuada lacus est ac orci.
EOT;

$p2 = <<<'EOT2'
Nullam a dolor id arcu semper finibus ut pulvinar orci. Proin 
sodales nisi et dictum pulvinar. Duis orci velit, suscipit et 
porttitor gravida, molestie ac purus. Cum sociis natoque penatibus 
et magnis dis parturient montes, nascetur ridiculus mus. Cras felis 
neque, gravida a blandit ac, rutrum ut sapien. Vivamus tincidunt 
volutpat libero eget tempor. Nam dolor mauris, mollis in euismod 
vitae, viverra ac libero
EOT2;

$template->assign('para_1', $p1);
$template->assign('para_2', $p2);

$template->display('templates/paras.phtml');
