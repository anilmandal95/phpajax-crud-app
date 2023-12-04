$(document).ready(function(){
//ajax request for inserting data
//first way of defining method
// $("#buttonid").click(add_student);
// function add_student(){
// }
//Second way of defining method(using annonimus function)
$("#buttonid").click(function(e){
    e.preventDefault();
     let stid = $("#stuid").val();
    let na = $("#nameid").val();
    let em = $("#emailid").val();
    let pass = $("#passwordid").val();
    // console.log(name);
    // console.log(email);
    // console.log(password);
    mydata = {id: stid, name: na, email: em, password: pass};
    console.log(mydata);

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){
            msg = "<div class='alert alert-success mt-3'>"+ data + "</div>";
            $("#message").html(msg);
            //for resting form data
            $("#myform")[0].reset();
            showData();
            //console.log(data);
        },
    });
});

// Get data from database using ajax call
function showData(){
    output = "";
    $.ajax({
        url: "getdata.php",
        dataType: "json",
        method: "GET",
        success:function(data){
           // console.log(data[3].name);
            // console.log(data[0].name);
            //console.log(data);
            if (data) {
                x = data;
            }else{
                x = "";
            }
            for (i = 0; i < x.length; i++) {
                //console.log(x[i]);
                //console.log(x[i].name);
                output += "<tr><td>"+ x[i].id + "</td><td>" + x[i].name +
                 "</td><td>" + x[i].email + 
                 "</td><td>" + x[i].password + 
                 "</td><td><button class='btn btn-warning btn-sm btn-edit' data-sid="+ 
                 x[i].id +">Edit</button><button class='btn btn-danger btn-sm btn-del' data-sid="+ 
                 x[i].id +">Delete</button></td></tr>";
                
                
            }
            $("#tbody").html(output);
        }
    })

} 
//ajax request for deleting data
$("tbody").on("click", ".btn-del", function(){

   // console.log("delete button clicked");

    let id = $(this).attr("data-sid");

    //console.log(id);
    mydata = { sid : id };
    mythis = this;
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){
            if (data == 1) {
                msg = "<div class='alert alert-success mt-3'>Student Record deleted successfully</div>";
                $(mythis).closest("tr").fadeOut();
            }else if(data == 0){
                msg = "<div class='alert alert-success mt-3'>Failed to delete</div>";
            }
            $("#delupdmsg").html(msg);
           // console.log(data);
          // showData();
        },
    });

});

//ajax request for editing data
$("tbody").on("click", ".btn-edit", function(){
   //console.log("edit button clicked");
    let id = $(this).attr("data-sid");
   // console.log(id);
   mydata = { sid : id };
   mythis = this;
   $.ajax({
       url: "edit.php",
       method: "POST",
       dataType: "json",
       data: JSON.stringify(mydata),
       success: function(data){
           $("#stuid").val(data.id);
           $("#nameid").val(data.name);
           $("#emailid").val(data.email);
           $("#passwordid").val(data.password);
       },
    });
});



showData()
});