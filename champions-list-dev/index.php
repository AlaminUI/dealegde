
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champions list</title>

    <style>
@font-face{font-family:"Graphik";src:url(fonts/Graphik-Regular-Web.woff2);font-weight:400;font-style:normal;font-stretch:normal}
@font-face{font-family:"Graphik";src:url(fonts/Graphik-Medium-Web.woff2);font-weight:500;font-style:normal;font-stretch:normal}
@font-face{font-family:"Graphik";src:url(fonts/Graphik-Semibold-Web.woff2);font-weight:600;font-style:normal;font-stretch:normal}

*{padding:0;margin:0;-webkit-box-sizing:border-box;box-sizing:border-box}
body{font-family:Graphik;background:#f6f6f6;color:#0a0a0a}
.container{max-width:1200px;margin:0 auto;padding:0 15px}
h1{font-size:27px;line-height:1.3;font-weight:500}
h2{font-size:26px;line-height:1.3;font-weight:500}
p{font-size:16px;line-height:1.5;font-weight:400;margin-bottom:16px}
.row{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin:0 -15px}
.col-4{padding:0 15px;width:100%;max-width:33.33%}
.col-8{padding:0 15px;width:100%;max-width:66.64%}
.filter{background:#fff;padding:24px;border-radius:6px;max-width:320px;margin-top:32px}
.filter-list ul{list-style:none;padding:0;margin:0;padding-top:20px}
.filter form input{display:block;width:100%;padding:8px 16px;border:1px solid #737373;border-radius:3px;font-size:14px}
.filter form label{font-size:15px;display:block;margin-bottom:8px;font-weight:400}
.filter h3{text-transform:uppercase;margin-bottom:16px;font-size:22px;font-weight:500;color:#263137}
.filter-list ul li a{display:block;text-decoration:none;font-size:16px;font-weight:400;margin-bottom:8px;color:#263137}
.filter-list ul li a:hover{color:#93c73f}
.filter-list ul li:last-child a{margin-bottom:0}
.single-big-card{background:#fff;border-radius:6px;margin-bottom:16px;-webkit-transition:.5s;-o-transition:.5s;transition:.5s;padding:24px 24px 16px}
.single-big-card:hover{-webkit-box-shadow:0 4px 9px 0 #0000005e;box-shadow:0 4px 9px 0 #0000005e}
.avatar{width:100%;max-width:100px}
.avatar img{width:100px;border-radius:50%;height:100px;-o-object-fit:cover;object-fit:cover}
.single-big-card-top{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}
.single-big-card-info{width:100%;padding-left:24px}
.userName-region{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.userName-region p{margin:0;font-size:16px;color:#babbc0}
.user-point{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;border-top:1px solid #babbc0;margin-top:32px;padding-top:24px}
.user-point h5{font-size:18px;color:#263137;font-weight:500}
.userName-region h2{font-size:26px}
.last-update-text p{font-size:12px;color:#737373}
.last-update-text p span{font-weight:500}
.last-update-text{padding-top:32px}
.user-point p{margin:0;color:#263137}
.content-area{padding-top:48px;padding-bottom:72px}
.card-section-title{margin-bottom:50px;margin-top:9px;text-align:right}
.single-small-card{background:#fff;padding:32px 24px;text-align:center;max-width:236px;border-radius:6px;width:100%;margin:0 15px;margin-bottom:16px;-webkit-transition:.5s;-o-transition:.5s;transition:.5s}
.single-small-card:hover{-webkit-box-shadow:0 4px 9px 0 #0000005e;box-shadow:0 4px 9px 0 #0000005e}
.small-card-header h3{font-size:20px;line-height:1.5;color:#263137;font-weight:500}
.small-card-header p{margin:0;color:#737373}
.small-card-header{padding-bottom:16px}
.small-card-footer h4{font-size:18px;color:#263137;line-height:1.5;font-weight:500}
.small-card-footer p{margin:0;color:#737373}
.all-small-card{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0 -15px}
.logo-wrap img{width:100%;max-width:200px}
.single-big-card.border {
    border: 1px solid #78bb43;
}
@media (max-width:1199px) {
.container{max-width:980px}
.all-small-card{margin:0 -8px}
.single-small-card{max-width:197px;margin:0 8px;margin-bottom:16px;-webkit-transition:.5s;-o-transition:.5s;transition:.5s}
}
@media (max-width:992px) {
.container{max-width:760px}
.single-small-card{max-width:230px}
.userName-region h2{font-size:21px}
.avatar{width:100%;max-width:80px}
.avatar img{width:80px;border-radius:50%;height:80px;-o-object-fit:cover;object-fit:cover}
.single-big-card-info{width:100%;padding-left:16px}
}
@media (max-width:767px) {
.row{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}
.col-4{max-width:100%}
.col-8{max-width:100%}
.filter{padding:32px 16px;max-width:100%;margin-top:32px;margin-bottom:40px}
.card-section-title{margin-bottom:24px;margin-top:0}
.all-small-card{margin:0 -8px;display:-ms-grid;display:grid;-ms-grid-columns:50% 50%;grid-template-columns:50% 50%}
.single-small-card{max-width:95%}
h1{font-size:24px}
.userName-region h2{font-size:18px}
.single-big-card{padding-left:16px;padding-right:16px}
.avatar img{width:64px;height:64px}
.avatar{width:100%;max-width:64px}
.user-point{margin-top:24px;padding-top:16px}
.last-update-text{padding-top:24px}
.userName-region p{font-size:15px}
.small-card-header h3{font-size:18px}
.small-card-header p{font-size:15px}
.small-card-footer h4{font-size:17px}
.small-card-footer p{font-size:15px}
}
    </style>


 
</head>
<body>
    

    <div class="content-area">
        <div class="container">
            <div class="row">
                <!-- left side filter section  -->
                <div class="col-4">
                   <div class="left-side-filter-wrap">
                    <div class="logo-wrap">
                        <img src="images/logo.svg" alt="logo">
                    </div>

                    <div class="filter">
                        <h3>filters</h3>
                        <form action="#">
                            <label for="InputName">Search by Name</label>
                            <input type="text" id="filter_users" placeholder="Search by Name">
                        </form>

                        <div class="filter-list">
                            <ul>
                                <li> <a class="filter-btn-reset" href="#"> All List </a></li>
                                <li> <a class="filter-btn" href="#" data-value="Platinum"> Platinum List </a></li>
                                <li> <a class="filter-btn" href="#" data-value="Gold"> Gold List </a></li>
                                <li> <a class="filter-btn" href="#" data-value="Silver"> Silver List </a></li>
                            </ul>
                            <ul>
                                <li> <a class="filter-btn" href="#" data-value="Region"> Region List </a></li>
                                <li> <a class="filter-btn" href="#" data-value="GEO"> GEO List </a></li>
                            </ul>
                        </div>
                    </div>
                   </div> 
                
                </div>

                <!-- card section  -->
                <div class="col-8"> 
                    <div class="right-card-area">
                        <div class="card-section-title">
                            <h1>The Infoblox List Of Champions</h1>
                        </div>


                        <div class="all-card-wrapper">

                     
 
             

                        </div>

                        <!-- small cards  -->
                        <div class="all-small-card">
             


                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/Keyang/node-csvtojson/d41f44aa/browser/csvtojson.min.js"></script>
<script src="jquery-csv.js"></script>
<script>
        // var champions_list =[
        // {
        //     "Name":"Alamin",
        //     "Region":"CEO",
        //     "Badge" : "Silver",
        //     "Point" : "300",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"

        // },
        // {
        //     "Name":"Alamin",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "500",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar2.jpg"
        // },
        // {
        //     "Name":"Md. Mehedi",
        //     "Region":"CEO",
        //     "Badge" : "Gold",
        //     "Point" : "800",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Akash",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "200",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar2.jpg"
        // },
        // {
        //     "Name":"Ron",
        //     "Region":"CEO",
        //     "Badge" : "Gold",
        //     "Point" : "100",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Md. Mehedi",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "950",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Akash",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "620",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar2.jpg"
        // },
        // {
        //     "Name":"Ron",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "700",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Md. Mehedi",
        //     "Region":"CEO",
        //     "Badge" : "GEO",
        //     "Point" : "400",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Akash",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "270",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar2.jpg"
        // },
        // {
        //     "Name":"Ron",
        //     "Region":"CEO",
        //     "Badge" : "Platinum",
        //     "Point" : "230",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Tervor",
        //     "Region":"CEO",
        //     "Badge" : "Gold",
        //     "Point" : "820",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },
        // {
        //     "Name":"Tervor",
        //     "Region":"CEO",
        //     "Badge" : "Gold",
        //     "Point" : "200",
        //     "Update_time":"Sep 11,2021",
        //     "image":"images/avatar.jpg"
        // },

        // ]
    
     
 
var bigData_Array=[];
var smallData_Array=[];
var champions_list = {};
 
$.ajax({
    url: "result.csv",
    async: false,
    success: function (csvd) {
       

        var items = $.csv.toObjects(csvd);
        var jsonobject = JSON.stringify(items);
        champions_list.items = items;
        console.log(  champions_list)
    },
    dataType: "text",
    complete: function () {
        // call a function on complete 
    }
});
// console.log(champions_list.items[0].image)
 
var sorted = champions_list.items.sort(function(a, b) {return b.Point - a.Point});

 
 

function prepareList(author) {
	var results = "";
	results = `<div class="single-big-card border">
                                <div class="single-big-card-top">
                                    <div class="avatar">
                                        <img src="${author.image}" alt="avatar">
                                    </div>
                                    <div class="single-big-card-info">
                                        <div class="userName-region">
                                            <h2 class="search-h"> ${author.Name} </h2>
                                            <p>Region, ${author.Region}</p>
                                        </div>
                                        <div class="user-point">
                                            <h5>${author.Badge}</h5>
                                            <p>${author.Point}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-update-text">
                                    <p>Last updated <span>${author.Update_time}</span>  </p>
                                </div>
                            </div>`;
	return results;
}



/*-------searching-------*/
 
var notFound =`<div class="not-found">Not Found</div>`;
function search() {
	var results = "";
	 
	var searchText = document.getElementById("filter_users").value;
	 
	sorted.map(function (author) {
	 
    var text = author.Name;
		var slicedText = text.slice(0, searchText.length);
   
        
		// if (searchText.toLowerCase().indexOf(slicedText.toLowerCase())!=-1) {
		if (text.toLowerCase().match(searchText.toLowerCase())) {
			 
			results += prepareList(author);

		}
        
        // if(!text.toLowerCase().match(searchText.toLowerCase())){
        //     results = notFound;
           
        // }

        
	});

    if(searchText == ""){
        $('.all-card-wrapper').html(bigData_Array);
$('.all-small-card').html(smallData_Array);

    }else{
        $('.all-card-wrapper').html(results);

$('.all-small-card').html("");
    }
 
  
}
 

document.getElementById("filter_users").addEventListener('keyup',search)



// filter 
var filter_btn=document.querySelectorAll(".filter-btn");


for(let a=0; a<filter_btn.length; a++){
     filter_btn[a].addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Badge;
   
		var slicedText = text.slice(0, value_text.length);
   
        console.log(typeof value_text)
        if(value_text === slicedText){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })
    
}


// reset 
var filter_btn_reset=document.querySelector(".filter-btn-reset");

    filter_btn_reset.addEventListener('click',function(e){
 
    e.preventDefault()
    $('.all-card-wrapper').html(bigData_Array);
$('.all-small-card').html(smallData_Array);
 
  
     })
    
  
  

for(let i=0; i<sorted.length; i++){
 

                            if(bigData_Array.length<5){
 
                                var big_card_template=`<div class="single-big-card">
                                <div class="single-big-card-top">
                                    <div class="avatar">
                                        <img src="${champions_list.items[i].image}" alt="avatar">
                                    </div>
                                    <div class="single-big-card-info">
                                        <div class="userName-region">
                                            <h2> ${champions_list.items[i].Name} </h2>
                                            <p>Region, ${champions_list.items[i].Region}</p>
                                        </div>
                                        <div class="user-point">
                                            <h5>${champions_list.items[i].Badge}</h5>
                                            <p>${champions_list.items[i].Point}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-update-text">
                                    <p>Last updated <span>${champions_list.items[i].Update_time}</span>  </p>
                                </div>
                            </div>`;

                                bigData_Array.push(big_card_template)
                            }else{

                                var small_card_template=`<div class="single-small-card">
                                <div class="small-card-header">
                                    <h3>${champions_list.items[i].Name}</h3>
                                    <p>${champions_list.items[i].Region}</p>

                                </div>
                                <div class="small-card-footer">
                                    <h4>${champions_list.items[i].Badge}</h4>
                                    <p>${champions_list.items[i].Point}   </p>
                                </div>
                            </div>`;
                                smallData_Array.push(small_card_template)
                            }
                            
           
}


$('.all-card-wrapper').html(bigData_Array);
 

 
$('.all-small-card').html(smallData_Array);
 
 


const csvFilePath='Sample-Spreadsheet-10-rows.csv'

// const csv=require('csvtojson')
// const jsonArray=  csv().fromFile(csvFilePath);
// csv()
// .fromFile(csvFilePath)
// .then(  (jsonObj)=>{
//     console.log(jsonObj);
//     /**
//      * [
//      * 	{a:"1", b:"2", c:"3"},
//      * 	{a:"4", b:"5". c:"6"}
//      * ]
//      */ 
// })

// async function check(){
//     const jsonArray=await csv().fromFile(csvFilePath);
// }

//var csv is the CSV file with headers

$.ajax({
   
    url: 'https://093-jun-098.mktorest.com/rest/v1/leads.json?access_token=03618043-bb93-4729-a63d-81542ecb17a8:sj',
    headers: { 'Access-Control-Allow-Origin': '*' },
    // data: myData,
    type: 'GET',
     
    dataType : 'jsonp',
    crossDomain:true,
    success: function(data) { 
        console.log(data)
    },
    contentType: "application/json",
    dataType: 'json'
});

</script>



<?php
/*
   GetCampaigns.php

   Marketo REST API Sample Code
   Copyright (C) 2016 Marketo, Inc.

   This software may be modified and distributed under the terms
   of the MIT license.  See the LICENSE file for details.
*/
$campaigns = new MultipleCampaigns();
print_r($campaigns->getData());


class MultipleCampaigns{
	private $host = "CHANGE ME";
	private $clientId = "CHANGE ME";
	private $clientSecret = "CHANGE ME";
	public $ids; //array of list Ids to retrieve
	public $names;//array of names to to retrieve
	public $programName;//array of program names to retrieve lists from
	public $workspaceName; //array of Workspace names to retrieve lists from
	public $batchSize; //max 300, default 300
	public $nextPageToken; //token retrieved from previous call for paging
	
	public function getData(){
		$url = $this->host . "/rest/v1/campaigns.json?access_token=" . $this->getToken();
		if (isset($this->ids)){
			$url .= "&id=" . $this::csvString($this->ids);
		}
		if (isset($this->programName)){
			$url .= "&programName=" . $this::csvString($this->programName);
		}
		if (isset($this->workspaceName)){
			$url .= "&workspaceName=" . $this::csvString($this->workspaceName);
		}
		if (isset($this->names)){
			$url .= "&name=" . $this::csvString($this->names);
		}
		if (isset($this->batchSize)){
			$url .= "&batchSize=" . $this::csvString($this->batchSize);
		}
		if (isset($this->nextPageToken)){
			$url .= "&nextPageToken=" . $this::csvString($this->batchSize);
		}
		$ch = curl_init($url);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json',));
		$response = curl_exec($ch);
		return $response;
	}
	
	private function getToken(){
		$ch = curl_init($this->host . "/identity/oauth/token?grant_type=client_credentials&client_id=" . $this->clientId . "&client_secret=" . $this->clientSecret);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('accept: application/json',));
		$response = json_decode(curl_exec($ch));
		curl_close($ch);
		$token = $response->access_token;
		return $token;
	}
	private static function csvString($fields){
		$csvString = implode(",", $fields);
		return $csvString;
	}
}
?>


</body>
</html>