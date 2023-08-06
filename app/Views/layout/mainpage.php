<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .background-image1 {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://thehill.com/wp-content/uploads/sites/2/2022/09/CA_mammogram_09282022istock.jpg?w=1280&h=720&crop=1');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      opacity: 1;
      /* Set the opacity value as desired (range from 0 to 1) */
      transform: scaleX(-1);
      /* Flip the background image horizontally */
      z-index: -1;
    }

    .background-image2 {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #Fbebb9;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      /* Set the opacity value as desired (range from 0 to 1) */
      opacity: 0.6;
    }

    .background-image3 {
      position: fixed;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background-color: white;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      /* Set the opacity value as desired (range from 0 to 1) */
      opacity: 0.7;
    }

    .ui.labeled.input.fluid input[type="text"] {
      border: 1px solid black;
    }

    .ui.labeled.input.fluid input[type="password"] {
      border: 1px solid black;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <title><?= $this->renderSection('pageTitle') ?> | MIS</title>

</head>

<body>
  <div class="background-image1"></div>
  <div class="background-image2"></div>
  <div class="background-image3"></div>

  <?= $this->renderSection('content') ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>