<script src="js/jquery.min.js"></script>
<script src="js/jspdf.min.js"></script>
<script src="js/FileSaver.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" >


<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

<!-- GeneratePDF -->
function generatePDF(){
console.log("generatingPDF");
l = {
    orientation: 'p',
    unit: 'px',
    format: 'a4',
    compress: true,
    fontSize: 28,
    lineHeight: 0,
    autoSize: true,
    printHeaders: true
};
var varHeight = 100; // Starting point from the top

var doc = new jsPDF(l, 'px', 'a4', true),
    sizes = [12],
    fonts = [
        ['Helvetica', '']
    ],
    font, size, lines, margin = 0.5,
    verticalOffset = margin,
    loremipsum = "descripton";

//doc.addImage(imgLogo, 'JPEG', 38, 35, 53, 40)

doc.setFontSize(12);
doc.setTextColor(0, 0, 0);
doc.setFontType("bold");
doc.text(40, varHeight + 2, "sample text");

doc.setFontSize(9);
doc.setTextColor(0, 0, 0);
doc.save("Test.pdf");
}
<!-- !GeneratePDF -->

</script>
<html>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        BRAND
      </a>
      <div class="col-md-2">
        <button  class="btn btn-default navbar-btn" type="button" name="button" onclick="generatePDF()">Generate Pdf</button>
      </div>
    </div>
     <ul class="nav navbar-nav ">
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sub-Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
      </ul>

  </div>
</nav>


<div class="row">
  <div class="col-md-10 col-md-offset-1">
  <table class="table table-striped table-hover table-border" >
    <th>Checked</th>
    <th>Question</th>
    <th>Category</th>
    <th>Sub-Category</th>
    <tr>
      <td >
          <div class="checkbox" >
            <label>
              <input type="checkbox" style="width:100%" >
            </label>
      </td>
      <td>
          <p>Question 1</p>
      </td>
      <td>
          <p>Category 1</p>
      </td>
      <td>
          <p>Sub-Category 1</p>
      </td>
    </tr>

  </table>
</div>
</body>
</html>
