<?php
$gcesstaffs=[
    "non-academics" => [
        [
            "name"=> "Hari Bahadur",
            "address"=> "Ranipauwa",
            "phone"=>[ "9876543261","981234567"]
        ],
        [
            "name"=>"Ram Krishna" ,
            "address"=> "Bagar" ,
            "phone"=>["9811111111","9888888888"]
        ],
    ],
    "academics" => [
        [
            "name"=> "Raj Yadav" ,
            "address"=> "Kahukhola",
            "phone"=>["9855555555","9866666666"],
            "subjects"=> ["Physics"]
        ],
        [
            "name"=> "Sam Krish" ,
            "address"=>"Malepatan" ,
            "phone"=>[ "9899999999","9856666666","986000000"],
            "subjects"=> [ "Logic Circuit","Micro Processor"]
        ],
        [
            "name"=> "Ratna Gurung" ,
            "address"=>"Buddha Chowk" ,
            "phone"=>["9846161616","9856565656" ],
            "subjects"=> ["MathsI","MathsII" ]
        ]
    ]
];
echo"<table border='1' cellspacing='0' width=100% text>";
echo'<tr>
    <th>Job Type</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Subject</th></tr>';
    foreach($gcesstaffs as $type => $details){
        foreach($details as $info => $moreinfo ){
          echo "<tr>";
          echo "<td >";
          echo ucfirst($type);
          echo"</td>";
          echo "<td>$moreinfo[name]</td>";
          echo "<td>$moreinfo[address]</td>";
          echo "<td>";
        foreach ($moreinfo["phone"] as $phone){
          echo "&nbsp&nbsp $phone  ";
        }
        echo "</td>";
        echo "<td>";
        if($type=="academics"){
          foreach ($moreinfo["subjects"] as $subject){
            echo "&nbsp&nbsp $subject  ";
          }
        }
        echo "</td>";
        echo "</tr>";
      }
    }
echo"</table>";
?>


