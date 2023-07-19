

<script type="text/javascript">

imgArr=["1.webp","2.webp","3.webp","4.webp"];
sliderIndex=1;

function lib_images_slider(){





  var bla="#slider-body"+sliderIndex;
    $(bla).fadeOut(400,function(){

      $(bla).hide();

      if(sliderIndex==4){
        sliderIndex=0;
      }

      //  $("#slider-img").attr("src","compressed-photos/"+imgArr[sliderIndex]);
        sliderIndex=sliderIndex+1;
        var bla="#slider-body"+sliderIndex;
        $(bla).show();
        $(bla).fadeIn(1000);


    });





}
 setInterval(lib_images_slider,4000);


</script>

<style media="screen">







@media screen and (min-width:1024px){

  .slider-body{
  height:auto;
  font-size: 40px;
  }

}

@media screen and (max-width:950px){

  .slider-body{
  height:320px;
  font-size: 40px;
  }
}

@media screen and (max-width:750px){

  .slider-body{
  height:330px;
  font-size: 25px;
  }
}
@media screen and (max-width:650px){

  .slider-body{
  height:280px;
  font-size: 25px;
  }
}


@media screen and (max-width:550px){

  .slider-body{
  height:250px;
  font-size: 20px;
  }
}

@media screen and (max-width:480px){

  .slider-body{
  height:330px;
  font-size: 20px;
  }

}

@media screen and (max-width:320px){

  .slider-body{
  height:170px;
  font-size: 20px;
  }

}
</style>



<div id="slider-body1" class="slider-body" style="position:relative;width:100%;margin-top:95px;background:white;height:auto;overflow:auto;">
        <div id="slider-sub-body" style="position:relative;width:100%;height:auto;float:left;">
          <center>
          <div style="width:100%;height:90%;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);top:0;bottom:0;border-radius: 10px;margin:auto;">
           <img src="photos/1.webp" alt="" id="slider-img" style="width:100%;height:auto;object-fit:contain;">
        </div>
      </center>
      </div>



</div>


<div id="slider-body2" class="slider-body" style="position:relative;width:100%;margin-top:95px;background:white;height:auto;overflow:auto;display:none;">
        <div id="slider-sub-body" style="position:relative;width:100%;height:auto;float:left;">
          <center>
          <div style="width:100%;height:90%;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);top:0;bottom:0;border-radius: 10px;margin:auto;">
           <img src="photos/2.webp" alt="" id="slider-img" style="width:100%;height:auto;object-fit:contain;">
        </div>
      </center>
      </div>



</div>



<div id="slider-body3" class="slider-body" style="position:relative;width:100%;margin-top:95px;background:white;height:auto;overflow:auto;display:none;">
        <div id="slider-sub-body" style="position:relative;width:100%;height:auto;float:left;">
          <center>
          <div style="width:100%;height:90%;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);top:0;bottom:0;border-radius: 10px;margin:auto;">
           <img src="photos/3.webp" alt="" id="slider-img" style="width:100%;height:auto;object-fit:contain;">
        </div>
      </center>
      </div>



</div>





<div id="slider-body4" class="slider-body" style="position:relative;width:100%;margin-top:95px;background:white;height:auto;overflow:auto;display:none;">
        <div id="slider-sub-body" style="position:relative;width:100%;height:auto;float:left;">
          <center>
          <div style="width:100%;height:90%;box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);top:0;bottom:0;border-radius: 10px;margin:auto;">
           <img src="photos/4.webp" alt="" id="slider-img" style="width:100%;height:auto;object-fit:contain;">
        </div>
      </center>
      </div>



</div>
