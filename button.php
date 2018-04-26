<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['lighton']))
{
$onstring = "A";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp </h2>
<h2>The Light has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['lightmed']))
{
$offstring = "B";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The light is turned dim</h2>
</body>
</html>
";
}
else if(isset($_POST['lightoff']))
{
$offstring = "C";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The light is turned off</h2>
</body>
</html>
";
}
else if(isset($_POST['fanon']))
{
$offstring = "D";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The fan is turned on</h2>
</body>
</html>
";
}
else if(isset($_POST['fanmed']))
{
$offstring = "E";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The fan is in medium</h2>
</body>
</html>
";
}
else if(isset($_POST['fanoff']))
{
$offstring = "F";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The fan is turned off</h2>
</body>
</html>
";
}
else if(isset($_POST['relayon']))
{
$offstring = "G";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The relay is turned on</h2>
</body>
</html>
";
}
else if(isset($_POST['relayoff']))
{
$offstring = "H";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>SMART</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Skillfull Energy Management of Applainces using Rasp</h2>
<h2>The relay is turned off </h2>
</body>
</html>
";
}


?>