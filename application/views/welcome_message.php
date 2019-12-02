<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
body {
  margin: 0;
  padding: 0;
  background: #ccc;
}
 
.nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
 
  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}
	</style>
</head>
<body>
<body class="news">
  <header>
    <div class="nav">
      <ul>
        <li class="home"><a class="active" href="Home">Home</a></li>
        <li class="about us"><a href="#">About</a></li>
        <li class="news"><a href="#">News</a></li>
      </ul>
    </div>
  </header>
</body>
<h1 align="center">Hello World!</h1>
<img src="http://3.bp.blogspot.com/-39cwioXXZY4/VfDe-L1MTWI/AAAAAAAAAa8/7UR9oJ_jUIs/s1600/helloworld.gif" class="center">

</body>
</html>