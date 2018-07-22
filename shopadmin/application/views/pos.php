<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
        <meta charset="utf-8" />
        
        <title>Pay&eARN | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

        <!--begin::Web font -->
        <script src="<?php echo base_url();?>assets/vendors/base/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
                <link href="<?php echo base_url();?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
               <link href="<?php echo base_url();?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo base_url();?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		        
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/demo/default/media/img/logo/favicon.ico" /> 
        <style type="text/css">
        	.poscounter td{padding-bottom: 10px; padding-top: 10px;}
        </style>
</head>
    <!-- end::Head -->

    
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	
				<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">		
			<!-- BEGIN: Brand -->
<div class="m-stack__item m-brand  m-brand--skin-dark ">
	<div class="m-stack m-stack--ver m-stack--general">
		<div class="m-stack__item m-stack__item--middle m-brand__logo">
			<a href="index9bfb.html?page=index&amp;demo=default" class="m-brand__logo-wrapper">
			<img alt="" src="<?php echo base_url();?>assets/demo/default/media/img/logo/logo_default_dark.png"/>
			</a>  
		</div>
		<div class="m-stack__item m-stack__item--middle m-brand__tools">
							
				<!-- BEGIN: Left Aside Minimize Toggle -->
				<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
					<span></span>
				</a>
				<!-- END -->
			
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
				<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
			
						

							<!-- BEGIN: Responsive Header Menu Toggler -->
				<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
						

			<!-- BEGIN: Topbar Toggler -->
			<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
				<i class="flaticon-more"></i>
			</a>
			<!-- BEGIN: Topbar Toggler -->
		</div>
	</div>
</div>
<!-- END: Brand -->			
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<!-- BEGIN: Horizontal Menu -->
<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >	
	
</div>
<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">

	
	<div class="m-stack__item m-topbar__nav-wrapper">
	</div>
</div>
<!-- END: Topbar -->			</div>
		</div>
	</div>
</header>
<!-- END: Header -->		
		<!-- begin::Body -->
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			
											<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>						
<div class="m-grid__item m-grid__item--fluid m-wrapper">

<div class="m-content">
			    			    
<div class="row">
	<div class="col-md-4" style="background-color: #fff; height: 600px;padding: 10px;">
		<?php $attributes = array("name" => "add_member"); echo form_open_multipart("pos/posorder", $attributes);?>
		<div class="col-md-12">
			<div class="m-form__group form-group row">
				<label class="col-lg-2 col-form-label">User:</label>
				<div class="col-lg-10"><input id="usersearch" class="form-control m-input" type="" name="u_id" onchange="searchuser()">
				</div>
			</div>
			<!--<div class="m-form__group form-group row">
				<label class="col-lg-2 col-form-label">Add Product:</label>
				<div class="col-lg-10"><input id="usersearch" class="form-control m-input" type="" name="usersearch" onchange="searchuser()">
				</div>
			</div>-->
			<hr>
		</div>
		<div class="col-md-12">
			<div id="posbill">
			<table class="poscounter" width="100%">
			<thead>
			<tr style="color:#fff;background-color:#34BFA3;">
				<th style="padding:10px;text-align: center;">Product</th>
				<th style="padding:10px;text-align: center;">Price</th>
				<th style="padding:10px;text-align: center;">Qty</th>
				<th style="padding:10px;text-align: center;">Subtotal</th>
				<th style="padding:10px;text-align: center;">Edit</th>
			</tr>
			</thead>
			<tbody style="padding-top:10px;padding-bottom: 10px;" >
			<?php $count=0;$amount=0;
                						if ($cart = $this->cart->contents()){$i=0;
                    					foreach ($cart as $item ) {$count++;
              							$details=$this->posmodal->get_product_by_id($item['id']);
             							?>
										<tr>
											<td>
												<a href=""><?php  echo $details[0]->p_name;?></a>
											</td>
											<td>
												<span class="amount">Rs <span id="itemcost_<?php echo $i;?>"><?php  echo $details[0]->p_sp;?></span></span>
											</td>
											<td>
												<div class="quantity">
													<input type="number" min="0" name="quantity" value="<?php echo $item['qty'];?>" class="form-control m-input qty text" size="4" id="itemno_<?php echo $i;?>" onchange="javascript:item1(<?php echo $i;?>);">
												</div>
											</td>
											<td >Rs
												<span class="amount" id="cost_<?php echo $i;?>"><?php echo  $details[0]->p_sp*$item['qty'];?></span>
											</td>
											<td>
												<a class="remove" href="<?php echo base_url()?>index.php/pos/removecart/<?php echo $item['rowid'];?>"><i class="la la-times-circle"></i></a>
											</td>
										</tr>
										<?php $i++;  $amount=$amount+$details[0]->p_sp*$item['qty'];$pid[] = $item['id'];$pc[] = $details[0]->p_sp*$item['qty'];$qty[]=$item['qty'];}}?>
				<tr style="border-top: solid 1px #c7c7c7;">
					<td></td>
					<td></td>
					<td>Total:</td>
					<td>Rs. <?php echo $amount?></td>
					<input type="hidden" name="pid" value="<?php if(!empty($pid)){echo implode(",",$pid);}?>">
            		<input type="hidden" name="pc" value="<?php if(!empty($pc)){echo implode(",",$pc);}else{$pc=0;}?>">
            		<input type="hidden" name="qty" value="<?php if(!empty($qty)){echo implode(",",$qty);}?>">
            		<input type="hidden" name="amount" value="<?php echo $amount;?>">
				</tr>
			</tbody>
		</table>
		</div>
		</div>
		<div class="col-md-12">
			<hr>
			<div class="m-form__group form-group row">
				<label for="exampleSelect1" class="col-lg-6 col-form-label">Payment Mode:</label>
				<div class="col-lg-6">
						<select class="form-control m-input" name="pay_mode" id="exampleSelect1">
							<option value="cash">Cash</option>
							<option value="card">Card</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<hr>
			<div class="m-form__group form-group row">
				<div class="col-md-4">
					<button  class="col-md-12 btn btn-danger">Cancel</button>
				</div>
				<div class="col-md-4">
					<button  class="col-md-12 btn btn-primary">Print</button>
				</div>
				<div class="col-md-4">
					<button  class="col-md-12 btn btn-success" type="submit">Payment</button>
				</div>
		    </div>
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="col-md-8">
		<div class="col-md-12" style="background-color: #fff;padding: 20px 20px;">
			<div class="m-form__group form-group row">
				<label class="col-lg-2 col-form-label">Search:</label>
				<div class="col-lg-10"><input id="search" class="form-control m-input" type="" name="search" onchange="searchproduct()">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="post-list" id="postList">
				<div class="m-section__content">
						<div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
							<div class="m-demo__preview">
								<?php $i=0; foreach ($query as $row) {?>
								<?php if($i%6==0){?><div class="m-stack m-stack--ver m-stack--general m-stack--demo"><?php }?>
										<div class="m-stack__item" style="background-color: #fff;padding: 5px;" onclick="javascript:posadd(<?php echo $row->p_id;?>);">
											<img src="<?php echo base_url();?>../uploads/product/thumb/<?php echo $row->p_image;?>" style="height: 60px;">
											<p class="text-center"><?php echo $row->p_name;?></p></div>
								<?php if($i%6==5){?></div><?php }?>
								<?php $i++;}?>
							</div>
						</div>
					</div>
	    	</div>
	    </div>
	</div>
</div>

</div></div></div>
				<!-- end:: Body -->
</div>
<!-- end:: Page -->

	
    	<!--begin::Base Scripts -->        
    	    	<script src="<?php echo base_url();?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		    	<script src="<?php echo base_url();?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Base Scripts -->   

         
        <!--begin::Page Vendors --> 
                <script src="<?php echo base_url();?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
                <!--end::Page Vendors -->  
          

        
        
                    
        <!--begin::Page Snippets --> 
                <script src="<?php echo base_url();?>assets/app/js/dashboard.js" type="text/javascript"></script>
                <!--end::Page Snippets -->   
        <!--begin::Page Resources --> 
                <script src="<?php echo base_url();?>assets/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>

                <!--end::Page Resources -->  
    <script>
         function searchproduct() {
             var keywords = $('#search').val();
             $.ajax({
                 type: 'POST',
                 url: '<?php echo base_url(); ?>index.php/pos/viewsort',
                 data:'&keywords='+keywords,
                 beforeSend: function () {
                     $('.loading').show();
                 },
                 success: function (html) {
                     $('#postList').html(html);
                     $('.loading').fadeOut("slow");
                 }
             });
         }
      </script> 
      <script>
      function posadd(id)
      { 
        var qty = 1;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo base_url();?>index.php/pos/itemadd",
                      data:'&id='+id+'&qty='+qty, 
                      success: function (html) {
                     $('#posbill').html(html);
                    	}
                  });
      }
      </script> 
      <script >
    function remove_cart(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>index.php/pos/removecart",
                    data:'&rowid='+postid,
                    success: function (html) {
                    	}
                });
    }
  </script>      
            </body>
    <!-- end::Body -->
</html>