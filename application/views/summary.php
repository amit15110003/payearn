<?php $amount=0;
                    if(!empty($cart =$this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $amount=$amount+($details[0]->p_sp*$item['qty']);
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->productid);
                   $amount=$amount+($details[0]->price*$row->item);}}
                   ?>
<div class="container-fluid" style="margin-top: 100px;margin-bottom: 100px;">  
  <div class="row">
    <div class="col-md-12 col-xs-12 " style="padding:0 5%">

      <div class="col-md-8 col-md-offset-2 col-xs-12" style="box-shadow: 0 10px 10px #f3f3f3;">
        <div >
            <p class="text-right">Shipping Information : <span style="font-size:14px;color:#000; "><span id="item_count1"></span> Item</span></p>
            <hr>
            <div class=" col-md-12  col-xs-12" style="margin-top: 20px;">
                <?php $count=0;
                  if ($cart = $this->cart->contents()){$i=0;
                      foreach ($cart as $item ) {$count++;
                $details=$this->user->get_product_by_id($item['id']);
               ?>
              <div class="row" style="margin-bottom: 15px;">
                  <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;" id="cart_<?php echo $item['id'];?>">
                  <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/product/thumb/<?php echo $details[0]->p_image;?>'); height: 120px;background-position: top;background-size: cover; ">
                  </div>
                  <div class="col-md-10 col-xs-12">
                     <p><?php  echo $details[0]->p_name;?></p>
                     <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->p_sp;?></b></span><span>Item: <?php echo $item['qty']; ?></span></p>
                  </div>
                  <div class="col-md-2 col-xs-12 th-pb">
                  </div>
                  </div>
              </div>
              <?php $i++;}}?>
              <?php foreach ($query as $row ) {$count++;
                        $details=$this->user->get_product_by_id($row->productid);
                       ?>
              <div class="row" style="margin-bottom: 15px;">
                  <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $row->id;?>">
                  <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->p_image;?>'); height: 120px;background-position: top;background-size: cover; ">
                  </div>
                  <div class="col-md-8 col-xs-12">
                     <p><?php  echo $details[0]->p_name;?></p>
                            <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->p_sp;?></b></span><sapn style="padding-right: 15px;">Size: <?php echo $row->attributevalue; ?></sapn><span>Item: <?php echo $row->item; ?></span></p>
                  </div>
                  <div class="col-md-3 col-xs-12 th-pb">
                  </div>
                  <div class="col-md-2 col-xs-12 th-pb">
                  </div>
                  </div>
              </div>
                      <?php }?>
                    <span class="hidden" id="item_count"><?php echo $count;?></span>
            </div>
        </div>
        <div class="col-md-12  col-xs-12">
           <hr>
           <p>Dilivery Address : <span style="font-size:14px;text-transform: capitalize; " id="addressf"><span style="color:#000;"><?php echo $delivery_name;?><br><?php echo $delivery_address;?>, <?php echo $delivery_city;?>, <?php echo $delivery_state;?>, <?php echo $delivery_zip;?><br>Mobile: <?php echo $delivery_tel;?></span></p>
           <hr>
          <div class="col-md-12  col-xs-12">
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Price</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <?php echo $amount;?></p><hr>
          </div>
          <div class="col-md-12  col-xs-12">
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Delivery Charge</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs.0 <span id="delivery_charge"></span></p>
          </div>
          <div class="col-md-12  col-xs-12">
          <hr>
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Total Charge</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <?php echo $amount;?></p>
            <p class="col-md-12  col-xs-12 text-left" style="padding: 0px;"><span id="info"></span></p>
          </div>
        </div> 
        <div class="col-md-12 col-xs-12">
            <button class="btn col-md-4 col-md-offset-4">Confirm</button><br><br>
        </div>
      </div>


    </div>
  </div>
</div>
