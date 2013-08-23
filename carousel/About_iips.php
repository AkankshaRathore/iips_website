 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>About IIPS</title>

       <!-- Include Styles -->
        <link rel="stylesheet" href="css/vtab-style.css" />		
        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
		<?php
		 include('cssLinks.php');
		?>
		<style type="text/css">
			.iips_logo{
				float:right;
			}
		</style>
    </head>
    <body>
		<?php
			include('header.php');
		?>
		<div class="container" style="background-color:#FFFFFF;">
		<div id="wrapper" class="wrapper">

			<br><h1> About IIPS </h1><br>
			
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">About IIPS</li>
                    <li tab="tab2" style="z-index:0">Director</li>
                    <li tab="tab3" style="z-index:0">Objectives and Vision</li>
					<li tab="tab4" style="z-index:0">Academic Calendar</li>
					<li tab="tab5" style="z-index:0">IIPS @ Wikipedia</li>
                    <li tab="tab6" class="last" style="z-index:0">Anti-Ragging Committee</li>
                </ul>

                <div class="tab-content">
					<img class="iips_logo" src="images/iipslogo.jpg">
                    <?php 
						$file1="textFiles/About_IIPS.txt";  
						if (file_exists($file1))   
						{  
							$file = fopen("textFiles/About_IIPS.txt", "r");  
		 					while (!feof($file))   
 							{  
 			 					$display = fgets($file, filesize($file1));  
  								echo $display . "  ";  
 							}  
 							fclose($file);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				  ?>
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
				<b>Meet the Director</b>
               <table style="background-color:#eeeeee; border:1px solid gray;" > <tr>  <td> <i>

" Welcome to International institute of professional studies- a Premier B-School in Central India which has been providing exceptional opportunities to the students since past 21 years. They have left an indelible mark that will guide subsequent developments, not only at the institution, but hopefully also in management education in our country. The new age consumer, industry and trade have always guided the plan and programmes of the institute. Our belief is that, holistic management education has to provide young graduates the necessary sensitivity skills which would help them to relate to their social environment. The institutes like ours have much larger role than just providing management education, to aspiring potential managers. The purpose of our institute is to induce change and manage socio-economic development in our country. "</i></td>
<td style="text-align:center;">
Feel Free to contact me on director@iips.edu.in 	
Dr.Anand K. Sapre
Director</td>
</tr>
</table><br><br>
Our innovative academic programmes incorporate a tradition of academic excellence and experimental learning with an emphasis on team-work. The institute�s environment instills the skills needed to succeed in a competitive global environment. We imbibe capabilities of working in diversified fields with creativity, imagination and perseverance in our students. We actively explore and develop new methodologies such as alternative teaching techniques and learning approaches that promote thinking skills and lifelong learning habits.

My belief is that organizations today new socially sensitive managers. We also believe that trough a whole lot of exercises and cases that these students go through at the institute, they develop a set of values that will help them to manage this environmental change and business organization in an ethical manner. I hope you will find the qualities of ethical leadership and management in our students.

You have always supported IIPS in a very big way. Without your support it would not have been possible for us to achieve the current growth. I am confident that the institute will continue to get your support in all its activities. We look forward to receiving each one of you during this year�s placement season.

I look forward to welcome you here.....

                </div>

                <div class="tab-content">
                   <b> What we Think</b><br><br>

<div style="background-color:#eeeeee;"><b>Objectives</b></div>
<ul type="disc" style="margin-left:50px;">
    <li>To provide unique opportunities of professional education to students.</li>
    <li>To equip students with high level of conceptual, analytical and descriptive abilities.</li>
    <li>To enable students to comprehend and understand the complex environment and handle there assignments competently and effectively.</li>
   <li> To enable students to develop high proficiency in interpersonal social and communication skills.</li>
   <li> To strengthen the decision making skills of the students.</li>
    <li>To help students develop a holistic and integrated personality.</li>
   <li> To provide students social and moral values and pride in national heritage.</li>
    <li>To initiate team spirit, group learning and cross cultural heritage.</li>
    <li>To help the students acquire the abilities, attitude and personality behooving a professional and responsible citizen. </li>
</ul><br>


<div style="background-color:#eeeeee;"><b>Vision</b></div><br>


<p style="margin-left:50px;">"Crafting Future International Quality Professionals..." and the Institute achieved the goal infrastructurally and academically as well.</p><br>

<div style="background-color:#eeeeee;"><b>Mission</b></div><br>
Our mission in the design and conduct of academic programmes is
<ul type="disc" style="margin-left:50px;">
    <li>To craft international quality professionals, who posses critical thinking, problem-solving approach, team spirit and good communication skills.</li>
    <li>To craft world-class computer science and IT professionals who can Design, Develop and Manage computer applications.</li>
    <li>To craft world-class management professionals capable of developing e-business globally, by employing IT in all aspects of business. </li></ul>

                  
                </div>
				
				<div class="tab-content">
					<b>Academic calender</b>
				</div>
				
				<div class="tab-content">
					Wikipedia : <a href="http://en.wikipedia.org/wiki/International_Institute_of_Professional_Studies">IIPS WikiPage</a>
				</div>
				
                <div class="tab-content">
                    <b>IIPS Anti-Ragging Committee</b><br><br>
					
					<ul type="disc" style="margin-left:50px;">
    					<li>Dr. B.K. Tripathi, Director 98270-48326</li>

    					<li>Dr. A.K. Sapre, Professor 94250-78013</li>

   					    <li>Dr. Yamini Karmarkar, Program In-charge, MBA (MS) 2 Yrs. 98260-22674</li>

    					<li>Dr. Manish Sitlani, Reader 93016-16888</li>

    					<li>Dr. Geeta Nema, Program In-charge, MBA (MS) 5 Yrs. 98268-52490</li>

    					<li>Dr. Geeta Sharma, Program In-charge, MBA (APR) 2 Yrs. 98932-69919</li>

    					<li>Dr. Ramesh Thakur, Program In-charge, MCA 6 Yrs. 94259-63711</li>

    					<li>Ms. Kirti Mathur, Program In-charge, M.Tech. (IT) 5� Yrs. 93032-30568</li>

    					<li>Dr. S.C. Patidar, Program In-charge, B.Com. (Hons.) 3 Yrs. 98260-85209</li>
					</ul>	
                   
                </div>

             </div><!-- vertical tabs ended-->

		</div>
	</div>
		<?php
		     include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
		
<!-- container 12 ended -->

</body>
</html>
