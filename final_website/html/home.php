
<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	home.html
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Home page for "vacation home" website, in html will add JavaScript and PHP as need.-->
	<title>Vacation Home</title> <!--Change to Name of Company.-->
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/homepage.css" />
</head>
<body id="home" >
	<?php include 'header.html';?>
	<!--will be changed to better pictuer, closer up.-->
	<div>
	<p> <!--title for calander.-->
		<h2 id="calH">Book A Day!</h2>
	</p>
	<div id="dates">
		<!--Calander will update to have JavaScript/PHP-->
		<div id="prev">&lt; Previous</div>
		<div id="next">Next &gt;</div>
		<table id="dateCal">
			<caption>March</caption>
			<tr>
				<th>Sun</th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
			</tr>
			<tr>
				<td></td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr>
			<tr>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
			</tr>
			<tr>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
			</tr>
			<tr>
				<td>21</td>
				<td>22</td>
				<td>23</td>
				<td>24</td>
				<td>25</td>
				<td>26</td>
				<td>27</td>
			</tr>
			<tr>
				<td>28</td>
				<td>29</td>
				<td>30</td>
				<td>31</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
			</tr>
		</table>
	</div>
	</div>
	<?php include 'footer.html';?>
</body>
</html>
