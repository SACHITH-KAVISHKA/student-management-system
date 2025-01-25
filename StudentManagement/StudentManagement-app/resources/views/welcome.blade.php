@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body, h1, h2, h3, h4, h5 {font-family: "Raleway", sans-serif;}
</style>
</head>
<body class="w3-light-grey">

<!-- Container for fixed content -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Student Management System</b></h1>
  <p>Welcome to the <span class="w3-tag">Student Portal</span></p>
</header>

<!-- Main Grid -->
<div class="w3-row">

  <!-- Photo Section -->
  <div class="w3-col l8 s12">
    <div class="w3-card-4 w3-margin w3-white">
      <img src="https://img.freepik.com/free-photo/kids-school_1098-321.jpg?t=st=1737805669~exp=1737809269~hmac=f2b6447d57f889a39461efc27867c526c6ce90f0a9c21d2cd722914ea8cd4386&w=996" alt="Students in School" style="width:100%">
      <div class="w3-container">
        <h3><b>Welcome to Our Portal</b></h3>
        <p>Our system helps manage student information effectively and efficiently. Explore the features and get started!</p>
      </div>
    </div>
  </div>



</div>
</div>

</body>
</html>

@endsection
