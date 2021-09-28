 
var bigData_Array=[];
var smallData_Array=[];
var champions_list = {};
var champions_list_data = [];
 
$.ajax({
    url: "../champion_List.csv",
    async: false,
    success: function (csvd) {
       

        var items = $.csv.toObjects(csvd);
        var jsonobject = JSON.stringify(items);
        champions_list.items = items;
        // console.log(champions_list.items)
    },
    dataType: "text",
    complete: function () {
        // call a function on complete 
    }
});
 
 
champions_list.items.forEach(function(d) {
         
        //  champions_list_data+=d['Account Owner']


         champions_list_data.push({
            Name:  d['Full Name'] ,
            Region:  d['Region'] ,
            Point:  d['Person Score'] ,
            Geo:  d['Geo'] 
  });

    });
 
// console.log(champions_list_data)

var sorted = champions_list_data.sort(function(a, b) {return b.Point - a.Point});

 
 for(let a=0; a<sorted.length; a++){
     if(sorted.Name == " "){
         console.log(sorted.Name)
     }
 }

function prepareList(author) {
	var results = "";
    var initials="";
 
        const fullName = author.Name.split(' ');
   
    initials = (fullName[0]  ? fullName[0].charAt(0) : " ") + (fullName[1] ? fullName[1].charAt(0) : " ");
 
   
  
    // initials = (author?.Name  ? fullName[0].charAt(0) : " ") + (author?.Name ? fullName[1].charAt(0) : " ");
        


     console.log(initials)
	results = `<div class="single-big-card border">
                                <div class="single-big-card-top">
                                    <div class="avatar">
                                      
                                        <span>${initials}</span>
                                    </div>
                                    <div class="single-big-card-info">
                                        <div class="userName-region">
                                            <h2 class="search-h"> ${author.Name} </h2>
                                            <p> ${author.Region ? "Region, " + author.Region : " " }</p>
                                        </div>
                                        <div class="user-point">
                                           
                                            <h5>${ author.Point > 100 ? 'Platinum'   : ( (author.Point > 50 && author.Point <100)  ? 'Glod' : 'Silver') } </h5>
                                            <p>${author.Point}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-update-text">
                                    <p>Last updated <span>Recently</span>  </p>
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
var filter_btn=document.querySelector(".filter-btn-platinum");


     filter_btn.addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Point;
   
		// var slicedText = text.slice(0, value_text.length);
   
         
        if(text >100){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })


// filter gold
var filter_btn=document.querySelector(".filter-btn-gold");


 
     filter_btn.addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Point;
   
		// var slicedText = text.slice(0, value_text.length);
   
         
        if(text >50 && text <100){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })

// filter silver
var filter_btn=document.querySelector(".filter-btn-silver");


 
     filter_btn.addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Point;
   
		// var slicedText = text.slice(0, value_text.length);
   
         
        if(text < 50 ){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })

// filter Region
var filter_btn=document.querySelector(".filter-btn-region");


 
     filter_btn.addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Region;
   
 
         
        if(text){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })

// filter Geo
var filter_btn=document.querySelector(".filter-btn-geo");


 
     filter_btn.addEventListener('click',function(e){
        var results = "";
	var count = 0;
    e.preventDefault()
    var value_text=$(this).attr('data-value');
	 
	sorted.map(function (author) {
	 
   
       
    var text = author.Geo;
   
 
         
        if(text){
		 
			 
			results += prepareList(author);
		}else{
            // console.log("heelo")
        }

        
	});
$('.all-card-wrapper').html(results);
$('.all-small-card').html("");
 
  
     })
    


 


// reset 
var filter_btn_reset=document.querySelector(".filter-btn-reset");

    filter_btn_reset.addEventListener('click',function(e){
 
    e.preventDefault()
    $('.all-card-wrapper').html(bigData_Array);
$('.all-small-card').html(smallData_Array);
 
  
     })
    
  
  

for(let i=0; i<sorted.length; i++){
 

                            if(bigData_Array.length<10){
                                const fullName = champions_list_data[i].Name.split(' ');
                                const initials = fullName.shift().charAt(0) + fullName.pop().charAt(0);
 
                                var big_card_template=`<div class="single-big-card">
                                <div class="single-big-card-top">
                                    <div class="avatar">
                                        <span> ${initials.toUpperCase()} </span>
                                    </div>
                                    <div class="single-big-card-info">
                                        <div class="userName-region">
                                            <h2> ${champions_list_data[i].Name} </h2>
                                            <p> ${champions_list_data[i].Region ? "Region, "+ champions_list_data[i].Region : " " }</p>
                                        </div>
                                        <div class="user-point">
                                           
                                            <h5>${ champions_list_data[i].Point > 100 ? 'Platinum'   : ( (champions_list_data[i].Point > 50 && champions_list_data[i].Point <100)  ? 'Glod' : 'Silver') } </h5>
                                            <p>${champions_list_data[i].Point}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-update-text">
                                    <p>Last updated <span>Recently</span>  </p>
                                </div>
                            </div>`;

                                bigData_Array.push(big_card_template)
                            }else{

                                var small_card_template=`<div class="single-small-card">
                                <div class="small-card-header">
                                    <h3>${champions_list_data[i].Name}</h3>
                                    <p>${champions_list_data[i].Region}</p>

                                </div>
                                <div class="small-card-footer">
                                    <h5>${ champions_list_data[i].Point > 100 ? 'Platinum'   : ( (champions_list_data[i].Point > 50 && champions_list_data[i].Point <100)  ? 'Glod' : 'Silver') } </h5>

                                    <p>${champions_list_data[i].Point}   </p>
                                </div>
                            </div>`;
                                smallData_Array.push(small_card_template)
                            }
                            
           
}


$('.all-card-wrapper').html(bigData_Array);
 

 
$('.all-small-card').html(smallData_Array);
 
 

 

 
 
