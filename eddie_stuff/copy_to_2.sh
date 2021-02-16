#!/bin/bash
list=`find . -type d |grep -v 'photos'| grep -ve '^\.$'`

for one in $list
 do 
  #cp $HOME/index.php $one/index.php
  echo $one
done
