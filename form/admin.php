<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css" />
  </head>
  <body>
    <div class="header"></div>
    <div class="content"></div>

    <div class="card">
      <div class="value">
        <div>
          <img class="right" src="img/solve.jpg" />
        </div>
        <div id="p">
          <br />
          <script>
            var nama = "Merry Wulandari. S";
            var title = "Fullstack Developer & UI/UX Expert";
            var nomorHp = "+6285240591592";
            var alamat = " Jln. Poros Mamuju No. 50";
            var gender = "Perempuan";
            var umur = 20;
            var keahlian = "Ngoding, Public Speaking, & Businnes";
            var email = "wulandarikaranamu02@gmail.com";

            document.write("Nama Admin : " + nama);
            document.write("<br>");
            document.write("<br>");

            document.write(title);
            document.write("<br>");
            document.write("<br>");

            document.write("Contact Me : " + nomorHp);
            document.write("<br>");
            document.write("<br>");

            document.write("Alamat : " + alamat);
            document.write("<br>");
            document.write("<br>");

            document.write("Jenis Kelamin : " + gender);
            document.write("<br>");
            document.write("<br>");

            document.write("Umur : " + umur);
            document.write("<br>");
            document.write("<br>");

            document.write("Skill : " + keahlian);
            document.write("<br>");
            document.write("<br>");

            document.write("Email : " + email);
          </script>
        </div>
        <br />
        <div>
          <i class="fa-brands fa-linkedin fa-2x"></i>
          <i class="fa-solid fa-envelope fa-2x"></i>
          <i class="fa-brands fa-google-plus-g fa-2x"></i>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="value">
        <div>
          <p>
            Hello! i'm Merry Wuladari.S. Senior Web Developer with over 13 years of experience specializing in front end development. experinced
            <br />with all stages of the development cycle for dynamic web projects. Having an in-depth knowladge including advanced HTML5, <br />
            CSS,CSS3,SASS,LESS,JSON,XML,Java,JavaScript,JQuery,Angular JS, Strong background in management andleadership.
          </p>
          <div class="container">
            <button type="button" name="kembali" style="background: #ffbe76; border: 4px solid #ffbe76" onclick="goBack()">Back</button>
          </div>
          <div>
            <i class="fa-brands fa-square-facebook fa-2x"></i>
            <i class="fa-brands fa-square-instagram fa-2x"></i>
            <i class="fa-brands fa-square-twitter fa-2x"></i>
          </div>
        </div>
      </div>
    </div>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>

  </body>
</html>

