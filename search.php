<script>

$(document).ready(function(){







    $("#search-input").on('input',function(){


      $("#result-of-search-by-name").html("<center>  <div class='spinner-border' style='margin-top:8px;margin-bottom:8px;  background-color: coral;' ></div></center>");

      $("#result-of-search-by-name").show();


      input_text=$("#search-input").val().trim();
      if(input_text!=0){

      $.ajax({
        type:'POST',
        url:'ajax_backend.php',
        data:{'input_text':input_text,'search_by_input':'search_by_input'},
        success:function(data,textStatus){
          console.log(data)
          $("#result-of-search-by-name").text("")
          if(data!=0){
            arr=JSON.parse(data);
            i=0
            while(i<arr.length)
            {

                $("#result-of-search-by-name").append(`<a href='profile.php?userid=${arr[i][0]}' style='text-decoration:none;color:black;'><div id='result' style='height:50px;'>
                  <div id='result-image' style='width:50px;height:50px;float:left;margin-right:10px;'><img src='photos/${arr[i][1]}' style="width:50px;height:50px;border-radius:50%;object-fit:contain;"></div>
                    <div id='result-username' style='font-weight:bold;white-space: nowrap;'>${arr[i][2]}</div>
                    <div id='result-branch' style='width:10%;float:left;'>₹${arr[i][3]}</div>
                    
                  

                  </div></a>
                  `)
                i++;

            }

          }
          else{

            if(input_text.length==0){

                $("#result-of-search-by-name").text("");
                $("#result-of-search-by-name").hide();
            }
            else{
            $("#result-of-search-by-name").html(" &nbsp&nbsp NO PRODUCT FOUND");
          }
        }
        }
      })


    }
    else{
        $("#result-of-search-by-name").hide();
    }
  })




})

</script>
