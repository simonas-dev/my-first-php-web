<html>
<head>
<style>
body {
padding-top: 250px;
font-size: 300%;
}
</style>
</head>
<body>

<?
$tdn="1";
$pazimys=$score/10;
$score=0;
if ($_POST['nemunas1']=="nemunas"){
$score+=5;
}
if ($_POST['neris1']=='neris'){
$score+=5;
}
if ($_POST['sesupe1']=='šesupe'){
$score+=5;
}
if ($_POST['merkys1']=='merkys'){
$score+=5;
}
if ($_POST['ula1']=='ūla'){
$score+=5;
}
if ($_POST['sirvinta1']=='širvinta'){
$score+=5;
}
if ($_POST['sventoji1']=='šventoji'){
$score+=5;
}
if ($_POST['nemunelis1']=='nemunėlis'){
$score+=5;
}
if ($_POST['levuo1']=='lėvuo'){
$score+=5;
}
if ($_POST['musa1']=='mūsa'){
$score+=5;
}
if ($_POST['susuve1']=='šušuvė'){
$score+=5;
}
if ($_POST['dubysa1']=='dubysa'){
$score+=5;
}
if ($_POST['venta1']=='venta'){
$score+=5;
}
if ($_POST['jura1']=='jūra'){
$score+=5;
}
if ($_POST['mitnija1']=='minija'){
$score+=5;
}
if ($_POST['mituva1']=='mituva'){
$score+=5;
}
if ($_POST['sesuvis1']=='šešuvis'){
$score+=5;
}
if ($_POST['virvyte1']=='virvytė'){
$score+=5;
}
if ($_POST['zeimena1']=='žeimena'){
$score+=5;
}
if ($_POST['nevezis1']=='nevėžis'){
$score+=5;
}

echo '<center>'.$score.'% Atsakyti teisingai! Taigi gautum '.$score/="10".'</center>';

?>
</body>
</html>