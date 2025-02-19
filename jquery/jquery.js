jQuery(document).ready(function($){
    $(".slider-img").on("click",function()
    {
      $(".slider-img").removeClass("active");
      $(this).addClass("active");
    });
    const targetdate= new Date();
    // no const in 2nd line const var.setdate (const var.getdata()+7 getdata from the 1st line )
   targetdate.setDate(targetdate.getDate()+7);
  // fun =()=> chuto ya at the begining
 const updatetime = () =>
  {
    // when const can be changed?
  // naya funcko faida ? 
    const now = new Date();
    // const doesnt change the refrences(pointer address) but modifies the val var changes both
  const timedifference= targetdate-now;

 if(timedifference<=0)
 {
  $("#countdown").text("END OF FLASH SALE GOOD LUCK FOR NEXT TIME");
  clearInterval(interval);
  return;
 }

  const days = Math.floor(timedifference/(1000*60*60*24));
  const hours = Math.floor ((timedifference%(1000*60*60*24))/(1000*60*60));
  const minutes =Math.floor ((timedifference%(1000*60*60))/(1000*60));
  const second  = Math.floor ((timedifference%(1000*60))/(1000));

  $("#countdown").text(`${days}d ${hours}h ${minutes}m ${second}s`);
};
    
  updatetime();

 const interval = setInterval(updatetime,1000);
 
});
$(window).on("load",function(){
  $("#loader").fadeOut("#slow");
 });
