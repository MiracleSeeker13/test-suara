<!doctype html>
<html lang="id-ID">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://texttospeech.googleapis.com/v1beta1/text:synthesize">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
$nomor = [1,2,3,4,5];
$kategori =["Rawat Inap", "Admisi Umum"];
$nama =["Ahmad", "Lisa"];
?>
<form>
<?php for ($x = 0; $x <5 ; $x++):?> 
  Nomor: <input id="a1" value="<?=$nomor[$x]?>"></input>
  Kategori: <input id="a2" value="<?=$kategori[1]?>"></input>
  <button  onclick="suara<?=$x?>()" class="btn btn-primary">Button</button><br><br>

</form>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
       
        // $(document).ready(function(){
        //     msg.voice = voices[12];
        //         msg.text = " ";
        //         window.speechSynthesis.speak(msg);
        //  });
        function suara<?=$x?>(){
            let msg = new SpeechSynthesisUtterance();
            let voices = window.speechSynthesis.getVoices();

            var nomor = document.getElementById("a1").value;

        //console.log((voices[11]));
                msg.lang="id-ID";
                msg.name="Google Bahasa Indonesia";
                msg.voiceURI="Google Bahasa Indonesia";
                msg.text = "Antrian T P P R I <?=$kategori[1]?> Nomor <?=$nomor[$x]?>";


                window.speechSynthesis.speak(msg);
            }
    </script>
<?php endfor ?>
  </body>
</html>