<?php

 $i = 0; print ++$i; print "\t"; print (false<=true) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=true) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = true; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= true	"; print "\n"; print ++$i; print "\t"; print (false<=false) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=false) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = false; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= false	"; print "\n"; print ++$i; print "\t"; print (false<=1) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=1) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = 1; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= 1	"; print "\n"; print ++$i; print "\t"; print (false<=0) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=0) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = 0; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= 0	"; print "\n"; print ++$i; print "\t"; print (false<=-1) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=-1) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = -1; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= -1	"; print "\n"; print ++$i; print "\t"; print (false<='1') ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <='1') ? 'Y' : 'N'; $b = 1; $b = 't'; $b = '1'; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= '1'	"; print "\n"; print ++$i; print "\t"; print (false<='0') ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <='0') ? 'Y' : 'N'; $b = 1; $b = 't'; $b = '0'; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= '0'	"; print "\n"; print ++$i; print "\t"; print (false<='-1') ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <='-1') ? 'Y' : 'N'; $b = 1; $b = 't'; $b = '-1'; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= '-1'	"; print "\n"; print ++$i; print "\t"; print (false<=nullptr) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=nullptr) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = nullptr; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= nullptr	"; print "\n"; print ++$i; print "\t"; print (false<=array()) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array()) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array(); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array()	"; print "\n"; print ++$i; print "\t"; print (false<=array(1)) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array(1)) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array(1); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array(1)	"; print "\n"; print ++$i; print "\t"; print (false<=array(2)) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array(2)) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array(2); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array(2)	"; print "\n"; print ++$i; print "\t"; print (false<=array('1')) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('1')) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('1'); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('1')	"; print "\n"; print ++$i; print "\t"; print (false<=array('0' => '1')) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('0' => '1')) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('0' => '1'); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('0' => '1')	"; print "\n"; print ++$i; print "\t"; print (false<=array('a')) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('a')) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('a'); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('a')	"; print "\n"; print ++$i; print "\t"; print (false<=array('a' => 1)) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('a' => 1)) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('a' => 1); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('a' => 1)	"; print "\n"; print ++$i; print "\t"; print (false<=array('b' => 1)) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('b' => 1)) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('b' => 1); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('b' => 1)	"; print "\n"; print ++$i; print "\t"; print (false<=array('a' => 1, 'b' => 2)) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array('a' => 1, 'b' => 2)) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array('a' => 1, 'b' => 2); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array('a' => 1, 'b' => 2)	"; print "\n"; print ++$i; print "\t"; print (false<=array(array('a' => 1))) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array(array('a' => 1))) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array(array('a' => 1)); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array(array('a' => 1))	"; print "\n"; print ++$i; print "\t"; print (false<=array(array('b' => 1))) ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <=array(array('b' => 1))) ? 'Y' : 'N'; $b = 1; $b = 't'; $b = array(array('b' => 1)); print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= array(array('b' => 1))	"; print "\n"; print ++$i; print "\t"; print (false<='php') ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <='php') ? 'Y' : 'N'; $b = 1; $b = 't'; $b = 'php'; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= 'php'	"; print "\n"; print ++$i; print "\t"; print (false<='') ? 'Y' : 'N'; $a = 1; $a = 't'; $a = false; print ($a <='') ? 'Y' : 'N'; $b = 1; $b = 't'; $b = ''; print (false<=$b) ? 'Y' : 'N'; print ($a <=$b) ? 'Y' : 'N'; print "\t"; print "false <= ''	"; print "\n"; 