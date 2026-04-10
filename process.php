
<?php
//step1:include db connection-keyword:include
include"db.php";

//step2:checking the form is submitted or not
if($_SERVER['REQUEST_METHOD']=="POST"){//_server-accessing the array of value from the form
     
//step3:getting data from form
    $Client_Name=$_POST['client_name'];//fetch data from the name
    $email=$_POST['email'];//fetch data from the email
    $contact_number=$_POST['con_number'];
    $Artwork_type=$_POST['art_type'];
    $style_preference=$_POST['style_preference'];
    $color_preference=$_POST['color_preference'];
    $reference_image=$_FILES['reference_image']['name'];
    $temp_name=$_FILES['reference_image']['tmp_name'];
    move_uploaded_file($temp_name,"uploads/".$reference_image);
    $description=$_POST['description'];
    $size=$_POST['size'];
    $deadline=$_POST['deadline'];
    $budget=$_POST['budget'];
    $usage_rights=$_POST['usage'];
    $payment_method=$_POST['payment'];
    $additional_notes=$_POST['additional_notes'];
    $terms_and_conditions=$_POST['termsandconditions'];

 //step4:create sql query to get data
 $sql="INSERT INTO art_form(name,email,contactnumber,art,style,colour,referenceimage,
                         description,size,deadline,budget,usagerights,payment,notes,
                         termsandconditions) 
 VALUES('$Client_Name','$email','$contact_number','$Artwork_type','$style_preference','$color_preference','$reference_image',
        '$description','$size','$deadline','$budget','$usage_rights','$payment_method','$additional_notes',
        '$terms_and_conditions')";//getting data from the name and email   

 //db execution
 if(mysqli_query($conn,$sql)){//mysqli_query()-run mysql query in php
           echo "<h1 style='text-align:center;'>data inserted successfully</h1>"."<br>";
 }
 else{
    echo "error:".mysqli_error($conn);//mysqli_error-capture the error
 }
 }
?>