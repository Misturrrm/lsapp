@extends('layouts.app')

@section('content')
<a href= '/catalogues/2014/Computer Science' class = "btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span></a> 
<h3 align = "left"><strong>4-year study guide for Bachelor of Science in Computer Science</strong</h3>

<h1 align = "center" color = "red"><marquee>FIRST YEAR</marquee></h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!--<style>
table th {
    width: 50% !important;
}

</style> -->

<div class="container">
  
  <table size = "8" class="table">
    <thead>
      <tr>
        <th><strong>Semester</strong></th>
        <th><strong>Course </strong></th>
        <th><strong>Course Title</strong></th>
        <th><strong>Credit Hours</strong></th>
        <th><strong>Prerequisites</strong></th>
        <th><strong>Fulfills</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr class = "danger">
        <td><strong>Fall<strong></td>
        <td>CIE 111</td>
        <td>Introduction to Computers and Computing</td>
        <td>3</td>
        <td></td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>MAT 112*</td>
        <td>Pre-Calculus</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr class="danger">
        <td><strong><strong></td>
        <td>AUN 101</td>
        <td>Freshman Seminar</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr >
        <td></td>
        <td>WRI 101</td>
        <td>Freshman Composition I</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr class="danger">
        <td></td>
        <td>CIV 101</td>
        <td>African Civilisation</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>
<br>
      <tr >
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>15</td>
        <td></td>
        <td></td>
      </tr>

    <tbody>
      <tr class = "danger">
        <td><strong>Spring<strong></td>
        <td>CIE 105</td>
        <td>Principles of Programming I</td>
        <td>3</td>
        <td>CIE 111</td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>MAT 210</td>
        <td>Calculus I</td>
        <td>3</td>
        <td>MAT 112</td>
        <td>MAJOR</td>
      </tr>

      <tr class="danger">
        <td><strong><strong></td>
        <td>STA 101</td>
        <td>Introduction to Research & Statistical Methods</td>
        <td>3</td>
        <td>MAT 110</td>
        <td>GENED</td>
      </tr>

      <tr >
        <td></td>
        <td>WRI 102</td>
        <td>Freshman Composition II</td>
        <td>3</td>
        <td>WRI 101</td>
        <td>GENED</td>
      </tr>

      <tr class="danger">
        <td></td>
        <td>CIV 102</td>
        <td>Western Civilisation</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr>
      <td></td>
      <td>ENT 101</td>
      <td>Entrepreneurship and Development</td>
      <td>3</td>
      <td></td>
      <td>GENED</td>
      </tr>

      <tr class = "danger">
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>18</td>
        <td></td>
        <td></td>
      </tr>

    </tbody>
  </table>
<br>
<br>
<br>
<br>
<br><h1 align = "center" color = "blue"><marquee>SECOND YEAR</marquee></h1>

<table size = "8" class="table">
    <thead>
      <tr>
        <th><strong>Semester</strong></th>
        <th><strong>Course </strong></th>
        <th><strong>Course Title</strong></th>
        <th><strong>Credit Hours</strong></th>
        <th><strong>Prerequisites</strong></th>
        <th><strong>Fulfills</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr class = "info">
        <td><strong>Fall<strong></td>
        <td>CIE 106</td>
        <td>Principles of Programming II</td>
        <td>3</td>
        <td>CIE 105</td>
        <td>MAJOR JR</td>
      </tr> 

      <tr >
        <td></td>
        <td>CSC 213</td>
        <td>Discrete Structures</td>
        <td>3</td>
        <td>CIE 105</td>
        <td>MAJOR</td>
      </tr>

      <tr class="info">
        <td><strong><strong></td>
        <td>PHY 205/131</td>
        <td>University Physics I</td>
        <td>4</td>
        <td>MAT 210</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td>CDV 20x</td>
        <td>Freshman Composition I</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr class="info">
        <td></td>
        <td>MAT 211</td>
        <td>Calculus II</td>
        <td>3</td>
        <td>MAT 210</td>
        <td>GENED</td>
      </tr>

      <tr >
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>16</td>
        <td></td>
        <td></td>
      </tr>

    <tbody>
      <tr class = "info">
        <td><strong>Spring<strong></td>
        <td>CSC 202</td>
        <td>Data Structures and Algorithms</td>
        <td>3</td>
        <td>CIE 106</td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>PHY 206/132</td>
        <td>University Physics II</td>
        <td>4</td>
        <td>PHY 205/131</td>
        <td>MAJOR</td>
      </tr>

      <tr class="info">
        <td><strong><strong></td>
        <td>CSC 232</td>
        <td>Computer Organixation and Architecture</td>
        <td>3</td>
        <td>CIE 105</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td>CSC 214</td>
        <td>Logic in Computer Science</td>
        <td>3</td>
        <td>CSC 213</td>
        <td>MAJOR</td>
      </tr>

      <tr class="info">
        <td></td>
        <td>CIE 231</td>
        <td>Introduction to Databases, Web Technologues & Applications</td>
        <td>3</td>
        <td></td>
        <td>MAJOR</td>
      </tr>


      <tr class = "">
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>16</td>
        <td></td>
        <td></td>
      </tr>

    </tbody>
  </table>

  <br><h1 align = "center" color = "blue"><marquee>THIRD YEAR</marquee></h1>

<table size = "8" class="table">
    <thead>
      <tr>
        <th><strong>Semester</strong></th>
        <th><strong>Course </strong></th>
        <th><strong>Course Title</strong></th>
        <th><strong>Credit Hours</strong></th>
        <th><strong>Prerequisites</strong></th>
        <th><strong>Fulfills</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr class = "success">
        <td><strong>Fall<strong></td>
        <td>GEN 102</td>
        <td>Nigerian People & Cultures</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr> 

      <tr >
        <td></td>
        <td>FREE 1</td>
        <td>Free Elective</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr class="success">
        <td><strong><strong></td>
        <td>CSC 364</td>
        <td>Design & Analysis of Algorithms</td>
        <td>3</td>
        <td>CSC 202</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td>CIE 302</td>
        <td>Principles of Operating Systems</td>
        <td>3</td>
        <td>CIE 106</td>
        <td>MAJOR</td>
      </tr>

      <tr class="success">
        <td></td>
        <td>CSC 384</td>
        <td>Database Systems</td>
        <td>3</td>
        <td>CSC 202 & CIE 231</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>15</td>
        <td></td>
        <td></td>
      </tr>
<br>

    <tbody>
      <tr class = "success">
        <td><strong>Spring<strong></td>
        <td>SEN 406</td>
        <td>Technical Report Writing (MAJOR ADVISED ELECTIVE)</td>
        <td>3</td>
        <td>WRI 102</td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>CSC 301</td>
        <td>Systems Programming</td>
        <td>3</td>
        <td>MAT 210 & CIE 106</td>
        <td>MAJOR</td>
      </tr>

      <tr class="success">
        <td><strong><strong></td>
        <td>SEN 301</td>
        <td>Introduction to Software Engineering</td>
        <td>3</td>
        <td>CIE 231</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td>PHI 300</td>
        <td>Ethics and Leadership(Arts & Humanities-1)</td>
        <td>3</td>
        <td>Junior Standing</td>
        <td>GENED</td>
      </tr>

      <tr class="success">
        <td></td>
        <td>MAT 312</td>
        <td>Linear Algebra</td>
        <td>3</td>
        <td>MAT 211</td>
        <td>MAJOR</td>
      </tr>

    <tr >
        <td></td>
        <td>GEN 103</td>
        <td>Arts and Humanities Course(Arts and Humanities-2)</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr class = "success">
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>18</td>
        <td></td>
        <td></td>
      </tr>

    </tbody>
  </table>
<br>
<br>
<br>
<br>
<br><h1 align = "center" color = "blue"><marquee>FOURTH YEAR</marquee></h1>

<table size = "8" class="table">
    <thead>
      <tr>
        <th><strong>Semester</strong></th>
        <th><strong>Course </strong></th>
        <th><strong>Course Title</strong></th>
        <th><strong>Credit Hours</strong></th>
        <th><strong>Prerequisites</strong></th>
        <th><strong>Fulfills</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr class = "warning">
        <td><strong>Fall<strong></td>
        <td>CSC 407</td>
        <td>Programming Languages</td>
        <td>3</td>
        <td>CIE 106 & CSC 202</td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>CSC 306</td>
        <td>Object-Oriented Software Construction</td>
        <td>3</td>
        <td>SEN 301</td>
        <td>MAJOR</td>
      </tr>

      <tr class="warning">
        <td><strong><strong></td>
        <td>ARTS & HUMANTIES-3 XXX</td>
        <td>Arts and Humanities (Any of the Languages)</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>

      <tr >
        <td></td>
        <td>CSC 490</td>
        <td>Senior Design Project</td>
        <td>3</td>
        <td>Senior Standing & SEN 406</td>
        <td>MAJOR</td>
      </tr>

      <tr class="warning">
        <td></td>
        <td>Major Advised Elective XXX</td>
        <td>Major Advised Elective 1</td>
        <td>3</td>
        <td>Senior Standing</td>
        <td>GENED</td>
      </tr>

      <tr >
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>15</td>
        <td></td>
        <td></td>
      </tr>
<br>

    <tbody>
      <tr class = "warning">
        <td><strong>Spring<strong></td>
        <td>CSC 434</td>
        <td>Theory of Computation</td>
        <td>3</td>
        <td>CSC 407</td>
        <td>MAJOR</td>
      </tr> 

      <tr >
        <td></td>
        <td>CSC 456</td>
        <td>Design of Web based Systems</td>
        <td>3</td>
        <td>CIE 106 & CSC 384</td>
        <td>MAJOR</td>
      </tr>

      <tr class="warning">
        <td><strong><strong></td>
        <td>SEN 400</td>
        <td>Software Engineering Professional Ethics</td>
        <td>3</td>
        <td>Junior Standing</td>
        <td>MAJOR</td>
      </tr>

      <tr >
        <td></td>
        <td>Major Advised Elective XXX</td>
        <td>Major Advised Elective 2</td>
        <td>3</td>
        <td>Senior Standing</td>
        <td>MAJOR</td>
      </tr>

      <tr class="warning">
        <td></td>
        <td>FREE 2</td>
        <td>Free Elective 2</td>
        <td>3</td>
        <td></td>
        <td>GENED</td>
      </tr>


      <tr >
        <td></td>
        <td><strong>Totals</strong></td>
        <td></td>
        <td>15</td>
        <td></td>
        <td></td>
      </tr>
<br>
<br>
      <tr >
        <td><strong>TOTAL CREDITS</strong></td>
        <td></td>
        <td></td>
        <td>128</td>
        <td></td>
        <td></td>
      </tr>


    </tbody>
  </table>
</div>

</body>
</html>
@endsection