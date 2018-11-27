<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'student'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT *
		FROM list';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>	
<body>


<form name="add_name" id="add_name" action="success.php" method="POST">
	<h1>Attendance</h1>
	<table class="data-table">
		<caption class="title">Electrical Third Year</caption>
		<thead>
			<tr>
				<th>Roll No.</th>
				<th>Student Name</th>
				<th>Present</th>
				<th>Absent</th>
				</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$roll  = $row['roll_number'] == 0 ? '' : number_format($row['roll_number']);
			echo '<tr id="row'.$no.'">
					<td>'.$no.'</td>
					<td>'.$row['studentname'].'</td>
					<td><input type="checkbox" name="vehicle" class="checkitem" id="checkbox'.$no.'" value="1"></td>
					<td><input type="checkbox" name="vehicle" id="checkbox'.$no.'"  value="0"></td>
					
				</tr>';
			$total += $row['roll_number'];
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2">OPTIONS</th>
				<th><div class="checkbox">
            <label>
                <input type="checkbox" id="checkall"/> Select/Deselect All
            </label>
        </div></th>
        <th>       
  <input type="button" name="submit" id="submit" value="submit"/>
   </th>
        	</tr>
		</tfoot>
	</table>

</form>

	<script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
    $("#checkall").change(function(){
        $(".checkitem").prop("checked", $(this).prop("checked"))
    })
    $(".checkitem").change(function(){
        if($(this).prop("checked")==false){
            $("#checkall").prop("checked", false)
        }
        if($(".checkitem:checked").length == $(".checkitem").length){
            $("#checkall").prop("checked", true)
        }
    });

<!--    $(document).ready(function(){
$('#submit').click(function(){
$.ajax({
   url:"attendance.php",
   method:"POST",
   data: $('#add_name').serialize(),
   success:function(data)
   {

   	alert(data);
   	$('#add_name')[0].reset();
   }

   })


}); -->

    });
    </script>
</body>
</html>