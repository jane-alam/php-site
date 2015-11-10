<?php include('header.php'); 
include('connect.php');
?>

		
     <div id="container loginWrap">
<div class="container" style="margin-top:130px;">
	<div class="row form-group">
     
        <?php
		$start=0;
		$limit=6;
		if(isset($_GET['id']))
			{
			$id=$_GET['id'];
			$start=($id-1)*$limit;
			}
			$query=mysql_query("select * from upload_work LIMIT $start, $limit");
			$cnt=mysql_num_rows($query);
			$block_cnt=0;
			if($cnt>0)
			{
			while($rs_port=mysql_fetch_array($query))
			{
		
				
		?>
		
		 <div class="col-xs-12 col-md-4">
            <div class="panel panel-default" style="height:500px; overflow:hidden;">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $rs_port['_Title']; ?></h3>
                </div>
                <div class="panel-image">
                 <img src="/images/<?php echo $rs_port['_Image']; ?>" class="panel-image-preview"/>
                    <label for="toggle-4"></label>
                </div>
                <input type="checkbox" id="toggle-4" checked class="panel-image-toggle">
                <!-- <div class="panel-body">
                    <h4>Show the Description by default!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div> -->
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                </div>
            </div>
         </div>
       <?php 
	   	
	   } ?>
	  
        
	</div>
	<div class="row">
	<div class="col-xs-12 col-md-12">
	 <?php 
		
		$rows=mysql_num_rows(mysql_query("select * from upload_work"));
		$total=ceil($rows/$limit);
		
		
		echo "<ul class='pagination'>";
		if($id>1)
		{
		echo "<li><a href='?id=".($id-1)."' class='button'>&laquo;</a></li>";
		}
		for($i=1;$i<=$total;$i++)
		{
		if($i==$id) { echo "<li class='current'><a href='?id=".$i."'>".$i."</a></li>"; }
		
		else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		}
		if($id!=$total)
		{
		echo "<li><a href='?id=".($id+1)."' class='button'>&raquo;</a></li>";
		}
		echo "</ul>";
		} 
		
		
		
		?>
	</div>
	</div>
</div>		
</div>

<?php include('footer.php'); ?>
