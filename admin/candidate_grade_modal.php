<?php
if(!$bool){
?>
<div class="modal fade" id="candidateGrades<?php echo $candidate_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="border: none; background-color: transparent;">X</button>
            </div>										
            <div class="modal-body">
            	<div class="gradeImage" style="justify-content: center; display: flex; width: 100%;">
            		<img src="<?php echo $row['image_grade']; ?>" class="img-rounded" >
            	</div>
			
			</div>


		</div>                                
	</div>								
</div>
<?php
}
?>