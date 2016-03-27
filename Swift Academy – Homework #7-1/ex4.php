<?php
$counter = 0;
$a=5;
$b=2;
$c=2;

if($a<0)
{
    $counter++;
}

if($b<0)
{
    $counter++;
}
if($c<0)
{
   $counter++;
}

if($counter%2==0)
{
  echo "+";
}
if($counter%2!=0)
{
 echo "-";
}

echo "<br  />";

$counter = 0;
$a=-2;
$b=-2;
$c=1;

if($a<0)
{
    $counter++;
}

if($b<0)
{
    $counter++;
}
if($c<0)
{
   $counter++;
}

if($counter%2==0)
{
  echo "+";
}
if($counter%2!=0)
{
 echo "-";
}


echo "<br  />";

$counter = 0;
$a=-2;
$b=4;
$c=3;

if($a<0)
{
    $counter++;
}

if($b<0)
{
    $counter++;
}
if($c<0)
{
   $counter++;
}

if($counter%2==0)
{
  echo "+";
}
if($counter%2!=0)
{
 echo "-";
}
?>


