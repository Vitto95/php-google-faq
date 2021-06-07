<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domande frequenti - Privacy e termini - Google</title>
</head>
<body>


   <?php 
   
    $faqs = [
      [
        "title" => "titolo1",
        "content" => ["contenuto paragrafo 1.1", "contenuto paragrafo 1.2", "contenuto paragrafo 1.3"]
      ], 
      [
        "title" => "titolo2",
        "content" => ["contenuto paragrafo 2.1", "contenuto paragrafo 2.2", "contenuto paragrafo 2.3"]
      ],
      [
        "title" => "titolo3",
        "content" => ["contenuto paragrafo 3.1", "contenuto paragrafo 3.2", "contenuto paragrafo 3.3"]
      ]
    ];
   
   ?>

   <?php foreach($faqs as $faq){ ?>
      <?php foreach($faq["content"] as $paragraph){ ?>

   <h2> 
    <?php echo $faq["title"] ?> 
   </h2>

   <p>
   <?php echo $paragraph ?> 
   </p>

   <?php } ?>
    <?php } ?>

</body>
</html>