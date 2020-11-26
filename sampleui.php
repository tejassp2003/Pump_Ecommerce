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
    <link rel="stylesheet" href="sample.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PRAJASEVE</title>
  </head>

  <body>
    <!-- Done by Tejas on 26th Nov -->
    <div class="productmain">
      <div class="mainheading">
      <div class="headermenu">
             <a href="index.php"><i  class="material-icons ripple">arrow_back_ios</i> </a>
             <a id="switch-langka" class="langbutton" style="color: black;margin-top: 15px !important;">
                <span style="font-weight: 700;font-size: 21px;">ಕನ್ನಡ</span>
                
              </a>
             <a id="switch-langen" class="langbutton" style="color: black;margin-top: 15px !important;">
               
                <span >English</span>
              </a>
             <a href="index.php"><i  class="material-icons ripple">home</i></a> 
             
          </div>
        <h5>
          <span lang="en">Domestic Sump / Open Well Pump Selection</span>
          <span lang="ka">
            ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ
          </span>
        </h5>
      
      </div>

      <div class="container">
        <form action="/soborewell.php">
          <div class="card">
            <div class="forminput">
              <h5 lang="ka">ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</h5>
              <h5 lang="en">Total Water Required per day</h5>
              &emsp;
              <div class="input-suffix">
                <input type="number"   class="" />
                <h6>
                  <strong lang="en">in litres</strong>
                  <strong lang="ka">ಲೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>

            <div class="forminput" style="border-bottom:none !important;">
              <h5 lang="ka">
                ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ
              </h5>
              <h5 lang="en">Total Height to be pumped</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number" placeholder="" class="" />
                <h6 >
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>
          </div>
            
          <div class="card">
            <div class="formradio">
              <h4 lang="ka" style="text-align:center; margin-bottom: 5px !important;">ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</h4>
              <h4 lang="en" style="text-align:center; margin-bottom: 5px !important;">Power Supply available</h4>
              <h6 style="text-align:center; margin: 0 !important;">*Select Any One</h6>
              &emsp;
              <div class="radioinput">
                <span lang="ka">ಒಂದು ಫೇಸ್ ೨೩೦ ವೋಲ್ಟ್</span>
                <span lang="en">Single Phase 230V</span>
                <input type="radio" name="power" id="rdbtn1" checked="checked" />
              </div>
              <div class="radioinput">
                <span lang="ka">ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್</span>
                <span lang="en">Three Phase 415V</span>
                <input type="radio" name="power" />
              </div>
            </div>
            <div class="formwaterpump" style="border-bottom:none !important;">
              <h5 lang="ka">
                ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ
              </h5>
              <h5 lang="en">Which Make Pump Required</h5>
              &emsp;
              <select type="number"    class="">
                <option value="">Any Make</option>
                <option value="">UNEEL</option>
              </select>
            </div>
          </div>
          

          <div class="buttons">
            <button type="button" lang="en" class="btn btn-light" id="clearbtn">
              CLEAR
            </button>
            <button type="button" lang="ka" class="btn btn-light" id="clearbtn">
              ಅಳಿಸಿಹಾಕು
            </button>
            <button
              type="submit"
              lang="en"
              class="btn btn-light"
              id="searchbtn"
            >
              SEARCH
            </button>
            <button
              type="submit"
              lang="ka"
              class="btn btn-light"
              id="searchbtn"
            >
              ಹುಡುಕು
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <script>


    $('[lang="ka"]').hide();

        $(document).ready(function () {
      $("#switch-langka").click(myFunctionka);
    });
        $(document).ready(function () {
      $("#switch-langen").click(myFunctionen);
    });

    function myFunctionka() {
      $('[lang="ka"]').show();
      $('[lang="en"]').hide();
    }
    function myFunctionen() {
      $('[lang="ka"]').hide();
      $('[lang="en"]').show();
    }
  </script>
</html>
