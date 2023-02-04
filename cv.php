<?php
$name = "Alexander";
$profession = "QA-engineer";
$country = "Russia";
$email = "alexanderkonukhov@gmail.com";
$telegram = "https://t.me/Lexx_042";
$skills = [
  [
    'name' => 'Python',
    'percent' => 60,
  ],
  [
    'name' => 'Functional testing',
    'percent' => 80,
  ],
  [
    'name' => 'Test automation',
    'percent' => 30,
  ],
  [
    'name' => 'REST API testing',
    'percent' => 70,
  ],
  [
    'name' => 'SQL',
    'percent' => 50,
  ],
];
$work_experience = [
  [
    'position' => 'Beta Tester',
    'company' => 'startup WISH',
    'date_start' => 'Dec 2022',
    'date_end' => 'Current',
    'info' => 'WISH is a mobile application for iOS and Android, where some users can publish wishes, while others fulfill them.',
  ],
  [
    'position' => 'QA engineer',
    'company' => 'pet-project JobAssistant',
    'date_start' => 'Nov 2022',
    'date_end' => 'Current',
    'info' => 'JobAssistant is a site aggregator of vacancies from various sources with automation of the search for relevant vacancies in the IT field.',
  ],
  [
    'position' => 'QA engineer and Software Developer',
    'company' => 'pet-project convertToPDF',
    'date_start' => 'Aug 2022',
    'date_end' => 'Nov 2022',
    'info' => 'convertToPDF - telegram bot for converting files to PDF.',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alexander K. QA-engineer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>

<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="IMG_photo.png" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $country; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $telegram; ?></p>

            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <?php for ($i = 0; $i < count($skills); $i++) : ?>
              <p><?php echo $skills[$i]['name']; ?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]['percent']; ?>%"><?= $skills[$i]['percent']; ?>%</div>
              </div>
            <?php endfor; ?>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b>
            </p>
            <p>Russian</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>English</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:80%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work experience</h2>
          <?php for ($j = 0; $j < count($work_experience); $j++) : ?>
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $work_experience[$j]['position']; ?> / <?php echo $work_experience[$j]['company']; ?></b></h5>
              <?php
              if ($work_experience[$j]['date_end'] == 'Current') {
                $out = '<span class="w3-tag w3-teal w3-round">Current</span>';
              } else {
                $out = $work_experience[$j]['date_end'];
              } ?>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $work_experience[$j]['date_start']; ?> - <?php echo $out; ?></h6>
              <p><?php echo $work_experience[$j]['info']; ?></p>
              <hr>
            </div>
          <?php endfor; ?>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>GeekBrains</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Software Tester</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Kovrov State Technological Academy of V.A Degtyarev</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <a href="https://github.com/Lexxx42" class="fa fa-github" aria-hidden="true"></a>
    <a href="https://t.me/Lexx_042" class="fa fa-telegram" aria-hidden="true"></a>
    <!-- End footer -->
  </footer>
</body>

</html>