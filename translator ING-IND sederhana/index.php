<?php
//Dito Aldi Soekarno Putra
//115100054
//translate English to Indonesian in PHP with switch

//homepage
echo '
<html>
<head><title>Translate!</title></head>
   <body>  
      <h1>Translate English to Indonesian</h1>
      <hr/>
      <form action="index.php?action=translate" method="POST">
          <p>English: </p>
          <textarea name="source" rows="10" cols="50" placeholder="Please only use lowercase"></textarea><br/>
          <input type="submit" name="submit" value="submit"/>
      </form>
      <p>Indonesian: </p>
   </body>
</html>';

//translator and output
if (isset($_GET['action']) and ($_GET['action']) =='translate'){
  //requesting string
  $string = $_POST['source'];
  //exploding string
  $word = explode(" ",$string);
  //dictionary
  foreach ($word as $value){
      switch($value){
        case "i"        :
        case "me"       :
                         $result="aku"           ;break;
	case "you"      :$result="kamu"          ;break;
	case "they"     :
	case "them"     :
	                 $result="mereka"        ;break;
	case "we"       :
	case "us"       :
	                 $result="kita"          ;break;
	case "he"       :
	case "she"      :
	case "him"      :
	case "her"      :
		         $result="dia"           ;break;
	case "am"       :
	case "are"      :
	case "is"       :
		         $result="adalah"        ;break;
	case "i'm"      :$result="aku adalah"    ;break;
	case "you're"   :$result="kamu adalah"   ;break;
	case "he's"     :
	case "she's"    :      
                         $result="dia adalah"    ;break;
        case "a"        :
	case "an"       :
	                 $result="seorang"       ;break;
	case "man"      :$result="pria"          ;break;
        case "woman"    :$result="wanita"        ;break;
	case "plumber"  :$result="tukang ledeng" ;break;
	case "driver"   :$result="sopir"         ;break;
	case "salaryman":$result="karyawan"      ;break;
        case "doctor"   :$result="dokter"        ;break;
        case "student"  :$result="pelajar"       ;break;
	case "actor"    :$result="aktor"         ;break;
	case "worker"   :$result="buruh"         ;break;
	case "engineer" :$result="insinyur"      ;break;
	case "farmer"   :$result="petani"        ;break;
	case "teacher"  :$result="guru"          ;break;
	case "lecturer" :$result="dosen"         ;break;
	case "artist"   :$result="seniman"       ;break;
	case "love"     :$result="cinta"         ;break;
	case "hate"     :$result="benci"         ;break;
	case "dislike"  :$result="tidak menyukai";break;
	case "like"     :$result="menyukai"      ;break;
	case "but"      :$result="tapi"          ;break;
	default         :$result="(word missed)" ;
       }
       //serving result
       echo $result . " ";
  }
}
?>
