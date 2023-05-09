<?php
if(!$bool){
?>
<div class="modal fade" id="candidate_platform<?php echo $candidate_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
        <h3 class="modal-title">Platform</h3>
        </button>
      </div>																
			<div class="modal-body">


    			<p style="font-size: 16px;">

    				<?php 
    				echo $row['platform'];
    				?>
    			</p>
    			
			</div>
									
			<div class="modal-footer">
				<button style="color: white; border-radius: 3px; border: none !important; background-color: red; padding: 0.5em;
				"  data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div>
		</div>
	</div>	
</div>
<?php
   }
?>