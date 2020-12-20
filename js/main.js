const url = "https://abhay-cricket.herokuapp.com/api/users";
data = {"id":"1","token":"mytoken","geo":"mumbai"}
$.post(url,data,function(response){
    $("#apiRes").html(JSON.stringify(response));

})