<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <img src="<?php echo base_url(); ?>media/images/logosm.png" height="60" alt="">
                                    <small class="pull-right">Date: <?php 
                          $time = date(' dS M Y', strtotime($o_time));
                        echo $time; ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <b>Txnid: <?php echo $txnid;?></b>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #<?php echo $order_id;?></b>
                                <br>
                                <b>Order ID:</b><?php echo $order_id;?><br><b>PaymentMode:</b> <?php echo $payment_mode;?><br>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; $pid = explode(",", $p_id);
                  foreach($pid as $item) {$details1=$this->admin->get_product_id($item);?><tr>
                                            <td class="product-thumbnail"><a class="reveal-inline-block"><img src="<?php echo base_url(); ?>../uploads/product/thumb/<?php echo $details1[0]->p_image; ?>" width="100" height="100" alt=""></a></td>
                                            <td style="text-transform: capitalize;"><p><?php  echo $details1[0]->p_name;?></p></td>
                                           <td><?php $j=0; $pqty = explode(",", $p_qty);
                  foreach($pqty as $item1) {if($i==$j){echo $item1; }$j++;}?></td>
                                            <td><?php $k=0; $psp = explode(",", $p_sp);
                  foreach($psp as $item2) {if($i==$k){echo $item2; }$k++;}?></td>
                                        </tr>
                                      <?php $i++;}?>                                   </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <td></td>
                                                <td>Total:</td>
                                                <td><?php echo "<b>"; echo $amount;?> INR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <!--<a href="<?php echo base_url().'index.php/admin/orderprint/'.$row->orderid; ?>" target="_blank"><i class="fa fa-print"></i> Print</a>-->
                                <a href="<?php echo base_url().'index.php/admin/orderprinthtml/'.$order_id; ?>" target="_blank" class="pull-right"><i class="fa fa-print"></i> Print html</a>
                            </div>
                        </div>
                    </section>
                </section>
     
    </section>

    
  </div>