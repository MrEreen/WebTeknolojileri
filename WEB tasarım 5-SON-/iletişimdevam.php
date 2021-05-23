
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$telefon = $_POST['telefon'];
$message = $_POST['message'];

echo "<p>Formunuz Başarıyla Kayda Alımıştır.</p>";
echo "<br />";
echo "Adınız: ";
echo $name;
echo "<br />";
echo "Mailiniz: ";
echo $email;
echo "<br />";
echo "Yaşınız: ";
echo $yaş;
echo "<br />";
echo "Cinsiyetiniz: ";
echo $cinsiyet;
echo "<br />";
echo "Telefon numaranız: ";
echo $telefon;
echo "<br />";
echo "Mesajınız: ";
echo $message;


echo "<br />";

echo "<p> <a href='index.html'>&lt;Ana Sayfaya dön&gt;</a></p> ";


?>


