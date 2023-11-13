<?php
$h = date('G');
if($h>=0 && $h<=12)
{echo "Good Morning";}

else if($h>=12 && $h<=16)
{echo "Good Afternoon";}

else
{echo "Good Evening";}

