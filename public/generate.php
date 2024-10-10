<?php
  require '../vendor/autoload.php';
  use Endroid\QrCode\Builder\Builder;
  use Endroid\QrCode\Encoding\Encoding;
  use Endroid\QrCode\ErrorCorrectionLevel;
  use Endroid\QrCode\Label\LabelAlignment;
  use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\RoundBlockSizeMode;
  use Endroid\QrCode\Writer\PngWriter;
  
  $result = Builder::create()
      ->writer(new PngWriter())
      ->writerOptions([])
      ->data($_POST['data'])
      ->encoding(new Encoding('UTF-8'))
      ->errorCorrectionLevel(ErrorCorrectionLevel::High)
      ->size(300)
      ->margin(10)
      ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
      ->labelText($_POST['label'])
      ->labelFont(new OpenSans(20))
      ->labelAlignment(LabelAlignment::Center)
      ->validateResult(false)
      ->build();

      $result->saveToFile(__DIR__.'/img/'.$_POST['imgname'].'.png');
      
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p{
      text-align: center;
    }
  </style>
</head>
<body>
  <h1 style="text-align: center;">CODIGO QR GENERADO</h1>
  <p>
    <img src="<?= $result->getDataUri() ?>" alt="codigo Qr generado">
  </p>
  <p>
  </p>
</body>
</html>