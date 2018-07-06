<?php foreach ($query as $row) {?>
				<div class="col-lg-2">
					<img src="<?php echo base_url();?>../uploads/product/thumb/<?php echo $row->p_image;?>" style="height: 60px;" class="img-responsive center-block">
					<p class="text-center"><?php echo $row->p_name;?></p>
				</div>
			<?php }?>