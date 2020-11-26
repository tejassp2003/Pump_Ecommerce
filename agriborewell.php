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
    <link rel="stylesheet" href="index.css" />
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
    <title>PRAJASEVE</title>
  </head>

  <body>
    <div class="productmain">
      <div class="mainheading">
        <strong>
          <h5  lang="en">Domestic Or Community Bore Well Selection</h5>
          <h5 lang="ka">ವ್ಯವಸಾಯದ ಕೊಳವೆ ಭಾವಿಗೆ ಪಂಪಿನ ಆಯ್ಕೆ</h5>
        </strong>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/agriborewell.php">
          <div class="formradio">
            <h4 lang="ka">ನಿಮ್ಮ ಕೊಳವೆ ಭಾವಿಯ ವ್ಯಾಸ</h4>
            <h4  lang="en">Diameter of borewell</h4>
            &emsp;
            <div class="radioinput">
              <span lang="ka">4 ಇಂಚು</span>
              <span  lang="en">100mm</span>
              <input type="radio" name="power" id="rdbtn1" checked="checked" />
            </div>
            <div class="radioinput">
              <span lang="ka">6 ಇಂಚು</span>
              <span  lang="en">150mm</span>
              <input type="radio" name="power" />
            </div>
            <div class="radioinput">
              <span lang="ka">8 ಇಂಚು</span>
              <span  lang="en">200mm</span>
              <input type="radio" name="power" />
            </div>
          </div>

          <div class="forminput">
            <h5 lang="ka">ಕೊಳವೆ ಭಾವಿಯ ಒಟ್ಟು ಆಳ</h5>
            <h5  lang="en">Total Bore Depth</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಸ್ಥಿರ ನೀರಿನ ಮಟು</h5>
            <h5  lang="en">Static Water Level</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಹೆಚ್ಚು ನೇರು ಸಿಕ್ಕಿದ ಆಳ</h5>
            <h5  lang="en">Final Water Source Depth</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು</h5>
            <h5  lang="en">Height to be pumped from Ground Level</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ<h6><h6 lang="en">in metres</h6></strong>
          </div>
          <div class="forminput">
            <h5 lang="ka">ಒಟ್ಟು ನೀರಿನ ಲಭ್ಯತೆ</h5>
            <h5  lang="en">Total Yield Available</h5>
            &emsp;
            <input type="number" placeholder="LPM" class="" />
            <strong><h6 lang="ka">ಲೀಟರ್ ನಿಮಿಶಕ್ಕೆ</h6><h6 lang="en">in LPM</h6></strong>
          </div>

          <div class="formradio">
            <h4 lang="ka">ವಿದ್ಯುತ್ ಶಕ್ತಿ ಲಭ್ಯತೆ</h4>
            <h4  lang="en">Power Supply available</h4>
            &emsp;
            <div class="radioinput">
              <span lang="ka">ಒಂದು ಫೇಸ್ ೨೩೦ ವೋಲ್ಟ್</span>
              <span  lang="en">Single Phase 230V</span>
              <input type="radio" name="power" id="rdbtn1" checked="checked" />
            </div>
            <div class="radioinput">
              <span lang="ka">ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್</span>
              <span lang="en">Three Phase 415V</span>
              <input type="radio" name="power" />
            </div>

            <div class="formwaterpump">
              <h5 lang="ka">ಯಾವ ತಯಾರಿಕೆಯ ಪಂಪ್ ಬೇಕಾಗಿದೆ</h5>
              <h5 lang="en">>Which Make Pump Required</h5>
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
