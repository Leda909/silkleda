$('.portfolio-item').isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
});
$('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');
  
    var selector = $(this).attr('data-filter');
    var item = $('.data-container');

    item.isotope({
        filter:selector
    });
    console.log("selector: "+selector);
    console.log("item: "+item);
    return  false;
});
$(document).ready(function() {
var popup_btn = $('.popup-btn');
popup_btn.magnificPopup({
type : 'image',
gallery : {
    enabled : true
}
});
});

// paggination with paggination.js included with 'data container'
$('#demo').pagination({
    dataSource: function(done) {
    var selective = $('.active').attr('data-filter');
    $.ajax({
        type: 'GET',
        // Change into the correct url!
        url: '/Adel2_webportfolio/Adel_web_Task2_JSpagG_DBpagW/ToJson.php?keyword='+ selective,
        success: function(response) {
            done(response);
         }
      });
   },
    pageSize: 8,
    showPageNumbers: false,
    showNavigator: true,
    callback: function(data, pagination) {
        // template method of yourself
        var dataContainer = $('.data-container');
        var html = template(data);
        dataContainer.html(html);
    },
    formatResult: function(data) {
        for (var i = 0, len = data.length; i < len; i++) {
            data[i].htmlResult = '<img src="'+ data[i].img + '" /> label: "' + data[i].label;
        }
    },
})

function template(data){
  var html= "";
  var i=0;
  for(i=0; i<data.length; i++){
    //var label = labels[i];
    var url = data[i].htmlResult;
    var category = data[i].product_category;
    var title = data[i].product_title;
    var image = data[i].product_image;
    var type = data[i].product_type;

    html += '<div class="item '+category+' col-lg-3 col-md-4 col-6 col-sm" >'+
            '<a href="images/'+image+'" class="fancylight popup-btn" data-fancybox-group="light">'+
            '<img class="img-fluid" src="images/tumbl_'+image+'" alt="'+title+'">'+
            '<p style="background-color:#987fa6; color:white; font-size:20px; text-align:center;">'+title+'</p>'+ 
            '</a>'+
            '</div>';
  }

  return html;
}