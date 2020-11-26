<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PRAJASEVE</title>
</head>

<body>
    <div class="productmain">
        <div class="mainheading">
            <h4>
                <strong lang="en">Water Pump Selection</strong>
                <strong lang="ka">ನೀರಿನ ಪಂಪ್ ಆಯ್ಕೆ</strong>
            </h4>
            <button id="switch-lang" style="color:black;">Switch Language</button>
            

        </div>

        <div class="container">
            <div class="categoryinfo">
                <div class="category_heading">
                    <h5 lang="en">For Domestic and Community</h5>
                    <h5 lang="ka">ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ</h5>
                </div>
                <div class="list-group">
                    <a href="soborewell.php" class="list-group-item" lang="en">Sump and Open Borewell</a>
                    <a href="soborewell.php" class="list-group-item" lang="ka">ತೊಟ್ಟಿ ಮತ್ತು ತೆರೆದ ಭಾವಿ</a>
                    <a href="dcborewell.php" class="list-group-item" lang="en">Bore Well</a>
                    <a href="dcborewell.php" class="list-group-item" lang="ka">ಕೊಳವೆ ಭಾವಿ</a>
                </div>
            </div>
            <div class="categoryinfo">
                <div class="category_heading">
                    <h5 lang="en">For Agriculture</h5>
                    <h5 lang="ka">ವ್ಯವಸಾಯಕ್ಕೆ</h5>
                </div>
                <div class="list-group">
                    <a href="aowell.php" class="list-group-item" lang="en" >Open Well</a>
                    <a href="aowell.php" class="list-group-item" lang="ka">ತೆರೆದ ಭಾವಿ</a>
                    <a href="agriborewell.php" class="list-group-item" lang="en">Bore Well</a>
                    <a href="agriborewell.php" class="list-group-item" lang="ka">ಕೊಳವೆ ಭಾವಿ</a>
                    <a href="acorrp.php" class="list-group-item" lang="en">Canal or River</a>
                    <a href="acorrp.php" class="list-group-item" lang="ka">ಕಾಲುವೆ ಅಥವಾ ನದಿ</a>
                    <a href="alip.php" class="list-group-item" lang="en">Lift Irrigation</a>
                    <a href="alip.php" class="list-group-item" lang="ka">ಏತ್ ನೀರಾವರಿ</a>
                    <a href="agrisol.php" class="list-group-item" lang="en">Solar Pumps</a>
                    <a href="agrisol.php" class="list-group-item" lang="ka">ಸೌರಶಕ್ತಿ ಪಂಪುಗಳು</a>
                </div>
            </div>
            <div class="categoryinfo">
                <div class="category_heading">
                    <h5 lang="en">For Industry</h5>
                    <h5 lang="ka">ಕೈಗಾರಿಕೆಗೆ</h5>
                </div>
                <div class="list-group">
                    <a href="indpol.php" class="list-group-item" lang="en">Polder</a>
                    <a href="indpol.php" class="list-group-item" lang="ka">ತೊಟ್ಟಿ ಅಥವಾ ಹೊಂಡದ (ಕೊಳ)</a>
                    <a href="#" class="list-group-item" lang="en">Special Purpose Pumps</a>
                    <a href="#" class="list-group-item"  lang="ka">ವಿಶೇಷ ಉದ್ದೇಶದ ಪಂಪುಗಳು </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

$('[lang="ka"]').hide();

$(document).ready(function() {
  $('#switch-lang').click(myFunction);
});

function myFunction() {
 $('[lang="ka"]').toggle();
  $('[lang="en"]').toggle();

}
</script>

</html>