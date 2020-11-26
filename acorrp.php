<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=yes"
    />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <title>PRAJASEVE</title>
  </head>

  <body>
    <div class="productmain">
      <div class="mainheading">
        <strong>
          <h5 lang="en">Agriculture Canal or River Pump Selection</h5>
          <h5 lang="ka">ವ್ಯವಸಾಯದ ಕಾಲುವೆ ಅಥವಾ ನದಿಗೆ ಪಂಪಿನ ಆಯ್ಕೆ</h5>
        </strong>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/acorrp.php">
          <div class="forminput">
            <h5 lang="ka">ನಮಿಶಕ್ಕೆ ಎಶ್ಟು ನೀರನ್ನು ಪಂಪ್ ಮಾಡಬೆಕು</h5>
            <h5 lang="en">Water to be Pumped per Minute</h5>
            &emsp;
            <input type="number"   class="" />
            <strong><h6 lang="ka">ಲೀಟರ್ಗಳಲ್ಲಿ</h6><h6 lang="en">in litres</h6></strong>
          </div>

          <div class="forminput">
            <h5 lang="ka">ಕಾಲುವೆ ಅಥವಾ ನದಿ ಮಟ್ಟದಿಂದ ಎಶ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೆಕು</h5>
            <h5 lang="en">Height to be pumped from Canal or River</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ<h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಎಶ್ಟು ದೂರಕ್ಕೆ ನೀರನ್ಣು ತಳ್ಳಬೆಕು</h5>
            <h5 lang="en">Horizontal Distance to be Pumped</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ<h6><h6 lang="en">in metres</h6></strong>
          </div>

          <div class="formwaterpump">
            <h5 lang="ka">ಯಾವ ತಯಾರಿಕೆಯ ಪಂಪ್ ಬೇಕಾಗಿದೆ</h5>
            <h5 lang="en">Which Make Pump Required</h5>
            &emsp;
            <select type="number" placeholder="Metres" class="">
              <h6><strong>in metres</strong></h6>
              <option value="">Select</option>
              <option value="">UNEEL</option>
            </select>
          </div>
          <div class="buttons">
            <button type="button" class="btn btn-light" id="clearbtn">
              CLEAR
            </button>
            <button type="submit" class="btn btn-light" id="searchbtn">
              SEARCH
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <script>
    $('[lang="ka"]').hide();

    $(document).ready(function () {
      $("#switch-lang").click(myFunction);
    });

    function myFunction() {
      $('[lang="ka"]').toggle();
      $('[lang="en"]').toggle();
    }
  </script>
</html>
