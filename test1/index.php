<?php include('_header.php'); ?>
<!--<div class = "desktop"> -->
	<div class="container-full" style= "margin-top: -7px;">
		<div class = "row" style= "margin-top: -50px;">

			<div class="head-article">
				<div class="container-desc" style = "height: 30vh;">
					<div class="container">

					    <div class = "col-md-5 col-md-offset-1 col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1">
					        <div class = "item">  	
					      	    <div class = "content">
							      	<div class ="text-center">
							      	  <article>
							      	  	<h1>Benee照顧經理人</h1>
							      	  	<p>您的專屬居家照顧團隊</p><p>在家中輕鬆獲得需要的照顧協助！</p>
							      	  </article>
							      	  <a href = "#order"><div class ="btn btn-lg btn-info col-md-7 col-xs-7 col-sm-7">馬上預約！</div></a>
							      	</div>

						        </div>
						    </div> 
					    </div>


					</div>
					<a href = "#about">
						<div class ="next1btn col-md-12  col-xs-12 col-sm-12" style="color: #ffffff;">
							<i class="fa fa-4x fa-angle-down"></i>
						</div>
					</a>
				</div>

			</div>	


<!--Carousel
			<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">		    
			    <div class="carousel-inner">
			        <div class="active item">
			        	<img src= "./img/s1.jpg" style = "width: 100%;">
			        </div>
			        <div class="item">
			        	<img src= "./img/s2.jpg" style = "width: 100%;">
			        </div>
			    </div>
			</div>
Carousel-->


		    </div>

			
		</div>  <!--row-->
	</div> <!--container-full-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<!--	
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			-->
				<h4 class="modal-title" id="myModalLabel">頁面還在建構中！</h4>
			</div>
			<form class="form-horizontal" id="contact-form" role="form">
				<div class="modal-body">
				        您可以留下E-mail，新功能上線時，我們將率先通知您！
				    	<div class = "clear" style= "height: 5px;"></div>
				        您也可以先去
				        <a href="http://www.carebest.com.tw/kw" target="blank">CareDict照顧指南</a>
				        、
				        <a href="http://www.carebest.com.tw/blog" target="blank">CareBlog醫護專欄</a>
				        看看！
				    	<div class = "clear" style= "height: 25px;"></div>
	                    <input name="name" type="text" placeholder="請輸入您的名字" class="form-control" requd="true">
	                    <input name="email" type="email" placeholder="請輸入您的Email" class="form-control" required="true">
	                    <textarea name="comments" placeholder="歡迎留下您的寶貴意見！" class="form-control" required="true"></textarea>
				</div>
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					<button class="btn btn-info" type="submit">新功能上線時通知我！</button>
				</div>
            </form>

		</div>
	</div>
</div>





    <?php include('_1about.php'); ?>
    
    <?php include('_2process.php'); ?>
    
    <?php include('_3service.php'); ?>
    
    <?php include('_4fee.php'); ?>

    <?php include('_5order.php'); ?>

	<!-- <div class = "container-desc  detail" id = "section3">
	  <img src = "./img/FAKE_Section_A.png" style="width: 100%;" >
	</div>

	<div class = "container-desc detail" id = "section4">
	  <img src = "./img/FAKE_Section_B.png" style="width: 100%;" >
	</div> -->

<!--</div> !-->
<?php include('_footer.php'); ?>