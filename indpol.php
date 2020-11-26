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
          <h5 lang="en">Industry Polder Pump Selection</h5>
          <h5 lang="ka">ಕೈಗಾರಿಕೆ ಹೊಂಡ ಅಥವಾ ಕೊಳದ ಪಂಪ್ ಆಯ್ಕೆ</h5>
        </strong>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/indpol.php">
          <div class="forminput">
            <h5 lang="ka">ಎಶ್ಟು ಕೆಸರು ನೀರನ್ನು</h5>
            <h5 lang="en">Drainage or Muddy Water to be Pumped</h5>
            &emsp;
            <input type="number" placeholder="LPM" class="" />
            <strong><h6 lang="ka">ನಮಿಶಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</h6><h6 lang="en">in LPM</h6></strong>
          </div>

          <div class="forminput">
            <h5 lang="ka">ಎಶ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಪಂಪ್ ಮಾಡಬೇಕು</h5>
            <h5 lang="en">Height to be pumped</h5>
            &emsp;
            <input type="number"    class="" />
            <strong><h6 lang="ka">
             
                ಮೀಟರ್ಗಳಲ್ಲಿ
            </h6>
            <h6 lang="en">
                in metres
              
            </h6></strong>
          </div>

          <div class="formwaterpump">
            <h5 lang="ka">ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ</h5>
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
