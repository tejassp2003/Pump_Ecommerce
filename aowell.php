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
          <h5 lang="en">Agriculture Open Well Pump Selection</h5>
          <h5 lang="ka">ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ</h5>
        </strong>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/aowell.php">
          <div class="forminput">
            <h5 lang="ka">ನಮಿಶಕೆ ಎಶ್ಟು ನೀರನ್ನು ಪಂಪ್ ಮಾಡಬೇಕಾಗಿದೆ</h5>
            <h5 lang="en">Water to be Pumped per Minute</h5>
            &emsp;
            <input type="number"   class="" />
            <strong><h6 lang="ka">ಲೀಟರ್ಗಳಲ್ಲ</h6><h6 lang="en">in litres</h6></strong>
          </div>

          <div class="forminput">
            <h5 lang="ka">ಬಾವಿಯ ಆಳ</h5>
            <h5 lang="en">Depth of the well</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಲೀಟರ್ಗಳಲ್ಲ</h6><h6 lang="en">in metres</h6></strong>
          </div>

          <div class="forminput">
            <h5 lang="ka">ಭೂಮಿಯ ಮಟ್ತದಿಂದ ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು </h5>
            <h5 lang="en">Height to be pumped from above well</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿಲ</h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಎಷ್ಟು ದೂರಕ್ಕೆ ನೀರನ್ನು ತಳ್ಳಬೇಕು </h5>
            <h5 lang="en">Horizontal Distance to be Pumped</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಲ</h6><h6 lang="en">in metres</h6></strong>
          </div>

          <div class="formwaterpump">
            <h5 lang="ka">ಯಾವ ತಯಾರಿಕೆಯ ಪಂಪ್ ಬೇಕಾಗಿದೆ</h5>
            <h5 lang="en">Which Make Pump Required</h5>
            &emsp;
            <select type="number"    class="">
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
