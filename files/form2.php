<html>
<head>
<title>รายงานผลการปฏิบัติงานสำรองข้อมูลประจำวัน</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
        ini_set('display_errors', 1);
        error_reporting(~0);

        $strKeyword = null;
        $strddlSelect = null;
        if( isset($_POST["txtKeyword"]))
        {
                $strKeyword = $_POST["txtKeyword"];
		 }
		
		if( isset($_POST["ddlSelect"]) )
        {
            
				$strddlSelect = $_POST["ddlSelect"];
        }
		
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">

    <tr>
      <th>เลือกเดือน 
 
    	<select name="ddlSelect" id="ddlSelect">
          <option>- Select -</option>
		  <option value="Jan" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Jan") echo "selected"; ?>>มกราคม </option>>
          <option value="Feb" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>กุมภาพันธ์ </option	
          <option value="Mar" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   มีนาคม   </option>
          <option value="Apr" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   เมษายน   </option>
          <option value="May" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   พฤษภาคม   </option>
          <option value="Jun" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   มิถุนายน   </option>
          <option value="Jul" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   กรกฏาคม   </option>
          <option value="Aug" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>   สิงหาคม   </option>
          <option value="Sep" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>> กันยายน </option>
          <option value="Oct" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>> ตุลาคม   </option>
          <option value="Nov" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>>พฤศจิกายน </option>
          <option value="Dec" <?if(isset($_POST["ddlSelect"]) && $_POST["ddlSelect"]  == "Feb") echo "selected"; ?>> ธันวาคม   </option>
 		</select>
		
       Key วันที่
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

</html>
