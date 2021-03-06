<?php

session_start();

if($_SESSION['assignment_xml'])
{
	$assignment_xml = $_SESSION['assignment_xml'];
	$assignment = new SimpleXMLElement($assignment_xml);
}
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>


<!-- stuff that was already there-->
<div>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="Generator" content="Drupal 7 (http://drupal.org)" />
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0">
    <title>CLASS Learning System | CLASS Learning System</title>
  
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.base.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.menus.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.messages.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.theme.css?mvfty8");</style>
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/comment/comment.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/modules/date/date_api/date.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/field/theme/field.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/node/node.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/search/search.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/user/user.css?mvfty8");</style>
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/css/bootstrap.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/css/bootstrap-responsive.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/fontawesome/css/font-awesome.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/open_framework.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/ie.css?mvfty8");</style>
    <style type="text/css" media="print">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/open_framework_print.css?mvfty8");</style>

    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/jquery-1.9.1.min.js?v=1.9.1"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/jquery-migrate-1.1.1.min.js?v=1.1.1"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/drupal.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/tableheader.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/js/bootstrap.min.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/open_framework.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/override.js?mvfty8"></script>
    <script type="text/javascript">

    <!--//--><![CDATA[//><!--
    jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"open_framework","theme_token":"WhzbMxIACHzvghd4tljxpTfGiWETprJktoJmzGB5KvY","js":{"misc\/jquery.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/jquery-migrate-1.1.1.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/tableheader.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/js\/bootstrap.min.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/open_framework.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/override.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/css\/bootstrap.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/css\/bootstrap-responsive.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/fontawesome\/css\/font-awesome.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/open_framework.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/ie.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/open_framework_print.css":1}}});
    //--><!]]>
</script>
</div>



<!-- SCRIPT STUFF -->
<div>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link rel="stylesheet" type="text/css" href="placeholder.css">
  
    <!-- dialog popup box script-->
    <script>
      $(function() {
        $( "#dialog-modal" ).dialog({
          height: 140,
          modal: true
        });
      });
    </script>

    <!-- calendar script -->
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>

    <!-- tab script -->
    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
        
    <!-- only numbers script-->
    <script language = Javascript>
        function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                return true;
        }
    </script>

    <!-- time script 
    <script type="text/javascript">

        function lastModifed() {
            var currentTime = new Date();
            var month = currentTime.getMonth() + 1;
            var day = currentTime.getDate();
            var year = currentTime.getFullYear();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();

            document.getElementById('last_mod_time').write(month + "/" + day + "/" + year + "/" + hours + ":" + minutes + " ");
            if (hours > 11) {
                document.write("PM");
            } else {
                document.write("AM");
            }
        }
    </script>-->

</div>

</head>

<body class="html front logged-in one-sidebar sidebar-first page-class   show-title  show-breadcrumb   "  >

<!-- bar at the top -->
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> 
    <ul class="menu nav">
        <li class="first leaf"><a href="index.php">Home</a></li>
    </ul>
</div>


<!-- /#admin-shortcuts -->
<div id="header" class="clearfix header" role="banner">
<div class="container">
<div class="row">
<div class="span12">

    <!-- /#logo -->
    <div id="logo" class="site-logo"> 
        <a href="index.php" title="Home" rel="home"> 
        <img src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/logo.png" alt="CLASS Learning System" role="presentation" /> </a>
    </div>
        
    <!-- /#name-and-slogan -->
    <div id="name-and-slogan">
        <div id="site-name" class="site-name">
            <a href="index.php" title="Home" rel="home">CLASS Learning System</a>
        </div>
    </div>
            
</div>
</div>
</div>
</div>



<!-- /#main-menu -->
<div id="main" class="clearfix main" role="main">
<div class="container">
<div id="main-content" class="row main-content">

<!-- START /#sidebar-first -->
<div id="sidebar-first" class="sidebar span3 site-sidebar-first">
<div class="row-fluid">
<div class="region region-sidebar-first clearfix">
<div id="block-system-navigation" class="clearfix block block-system block-menu">

    <div class="content"> 
        <!--<ul class="menu nav">
            <li class="first last expanded active-trail"><a href="/class" class="active-trail active">CLASS Learning System</a></li>
        </ul> -->

		<input type="text" style="text-align: center;" placeholder="Name" value="<?php echo $_SESSION['assignment_name'] ?>" disabled> <br><br>
        <textarea rows="4" cols="50" style="text-align: center;" placeholder="Description" value="<?php echo $_SESSION['assignment_description'] ?>" disabled></textarea> <br><br>

        <p id="last_mod_time"><?php echo $_SESSION['last_modified'] ?></p>


        <ul class="nav nav-pills" style="margin: auto;">
            <!--<li class="active"><a href="/class" class="active">Pending<span class="element-invisible">(active tab)</span></a></li>-->
            <li class=""><a href="view.php">View Progess</a></li>
            <li class=""><a href="restart.php">Start Over</a></li>
        </ul> 


											
        <!--ORIGINAL
         <form action="form1.php" method="post">

			<label for="assignment_name">Assignment Name</label>
            <? // php echo $_SESSION['assignment_name'] ?>
			<input type="text" name="assignment_name" id="assignment_name" placeholder="Name"/> <br><br>
            
			<label for="assignment_description">Assignment Description</label>
			<textarea name="assignment_description" rows="4" cols="50" placeholder="Description"></textarea> <br><br>
            
			<label for="number_of_questions">Number of Questions</label>
			<input type="text"  name="number_of_questions" id="number_of_questions" placeholder="Amount"/> <br><br>
            
			<label for="group_size">Group Size</label>
			<input type="text" name="group_size" id="group_size" placeholder="Size"/> <br><br>					
			
		<input type="submit" value="Save and Continue" name="submit" /> </form>
		<form action="index.php"> <input type="submit" value="Save and Quit"> </form>
		<form action="restart.php"> <input type="submit" value="Quit without Saving"> </form>				-->

    </div>

</div>
</div>
</div>
</div>
<!-- END /#sidebar-first -->


<div id="content" class="mc-content span9">
<div id="content-wrapper" class="content-wrapper">

<div id="content-head" class="row-fluid content-head">
    <div id="highlighted" class="clearfix">
    </div>

        <div class="tabs"> 
            <ul class="nav nav-tabs">
                <!--<li class="active"><a href="/class" class="active">Pending<span class="element-invisible">(active tab)</span></a></li>-->
                <li class=""><a href="create.php">Create</a></li>
                <li class="active"><a href="view.php">View<span class="element-invisible">(active tab)</span></a></li>
                <li class=""><a href="import.php">Import</a></li>
            </ul> 
        </div>
</div>
                                        
    
<div id="content-body" class="row-fluid content-body">
<div class="region region-content clearfix">
<div id="block-system-main" class="clearfix block block-system">      
<div class="content"> 

<!------------------------------------------------------------->

    <div id="tabs">
        <ul>
            <li class=""><a href="#tab-overall">Overall Details</a></li>
            <li class=""><a href="#tab-create">Create Details</a></li>
            <li class=""><a href="#tab-edit">Edit Details</a></li>
            <li class=""><a href="#tab-solve">Solve Details</a></li>
            <li class=""><a href="#tab-grading">Grading Details</a></li>
        </ul>
    
    
		<div id="tab-overall">
            Assignment Name <br>
            <?php echo $_SESSION['assignment_name'] ?> <br><br>

            Assignment Description <br>
            <?php echo $_SESSION['assignment_description'] ?> <br><br>

            Number of Questions <br>
            <?php echo $_SESSION['number_of_questions'] ?> <br><br>

            Group Size <br>
            <?php echo $_SESSION['group_size'] ?> <br><br>
        </div>

        <div id="tab-create">
            Question Type <br>
            <?php echo $_SESSION['C_question_type'] ?> <br><br>

            Task Details <br>
            <?php echo $_SESSION['C_description'] ?> <br><br>

            Task Duration <br> 
            <?php echo $_SESSION['C_duration_days'] ?> Days <br>
            <?php echo $_SESSION['C_duration_hours'] ?> Hours <br>
            <?php echo $_SESSION['C_duration_minutes'] ?> Minutes <br><br>

            Graded? <br>
            <?php echo $_SESSION['C_graded'] ?> <br><br>

            Lateness Procedure <br>
            <?php echo $_SESSION['C_late'] ?> <br><br>

        </div>

        <div id="tab-edit">
            Task Duration <br> 
            <?php echo $_SESSION['E_duration_days'] ?> Days <br>
            <?php echo $_SESSION['E_duration_hours'] ?> Hours <br>
            <?php echo $_SESSION['E_duration_minutes'] ?> Minutes <br><br>

            Graded? <br>
            <?php echo $_SESSION['E_graded'] ?> <br><br>

            Lateness Procedure <br>
            <?php echo $_SESSION['E_late'] ?> <br><br>
        </div>

        <div id="tab-solve">
            Task Duration <br> 
            <?php echo $_SESSION['S_duration_days'] ?> Days <br>
            <?php echo $_SESSION['S_duration_hours'] ?> Hours <br>
            <?php echo $_SESSION['S_duration_minutes'] ?> Minutes <br><br>

            Graded? <br>
            <?php echo $_SESSION['S_graded'] ?> <br><br>

            Lateness Procedure <br>
            <?php echo $_SESSION['S_late'] ?> <br><br>
        </div>

        <div id="tab-grading">
            Task Duration <br> 
            <?php echo $_SESSION['G_duration_days'] ?> Days <br>
            <?php echo $_SESSION['G_duration_hours'] ?> Hours <br>
            <?php echo $_SESSION['G_duration_minutes'] ?> Minutes <br><br>

            Graded? <br>
            <?php echo $_SESSION['G_graded'] ?> <br><br>

            Lateness Procedure <br>
            <?php echo $_SESSION['G_late'] ?> <br><br>
        </div>
            
    </div>      


			
		

    <?php
			echo $assignment->asXML();
			?>


<!------------------------------------------------------------->
</div>
</div>
</div>
<!-- /.region -->
</div>
</div>
<!-- /#content-wrap --> 
</div>


<!-- /#content -->
</div>
</div>
</div>
<!-- /#main, /#main-wrapper -->




<!-- START /#footer -->
<div id="footer" class="clearfix site-footer" role="contentinfo">
<div class="container">
<div id="footer-content" class="row-fluid footer-content"> 
<div class="region region-footer clearfix">
<div id="block-system-powered-by" class="clearfix block block-system">       
<div class="content"> <span>Powered by <a href="http://drupal.org">Drupal</a></span> </div>
</div>
</div>
<!-- /.region -->
</div>
</div>
</div>
<!-- END /#footer -->
  
</body>
</html>
