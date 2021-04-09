<?php include 'bin/access/social/header.php';?> 


 <title>Welcome to 🎲 GameClub</title>


<div class="container">
    <div class="row">
              <div class="col-md-12">


         <div class="row">

             <div class="col-md-2"></div>

             
             
             
             
             
             <div class="col-md-8">
             
             
             <div class="row">
                 <div class="col-md-12">
                 
           <div class="tracker_list">
                <div class="Right_h" align="center"><b>Hello!  <?php
			   include('hsd/dibba_laga.php');			
					$user=$_SESSION['SESS_MEMBER_ID'];
								$hamin = mysql_query("SELECT * FROM members where user='$user'");
								while($tuhan = mysql_fetch_array($hamin))
								  { 
			  		echo "&nbsp;" .$tuhan['fname'];echo '&nbsp;'.  $tuhan['lname'];
								  
								  }
				?>, Welcome To 🎲GameClub </b></div><hr>
             </div>     
               </div>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
               <div class="col-md-12">
                 
           <div class="tracker_list">
               
               
               
               <h1><a href="http://localhost/social/gameclub/card-mix-pairs/">Play : Card Mixed-Pairs</a></h1><hr/>
                                                                  
               
               
               
               
               
               
               
               
                   </div>
                 </div>
                 
                 
                 
                 
                 
                 
                 
            
               
               
           </div>
                 
                 
             
             </div>
             
             
             
             
             
             

             <div class="col-md-2"></div>

        </div>

        </div>
    </div>
</div>









<?php include 'bin/access/index/footer.php';?> 
