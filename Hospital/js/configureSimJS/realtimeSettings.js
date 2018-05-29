
var speedSetting="speed1";

//Realtime Speed colour coding on click
$("#speedButtons").on('click', '.btn', function() {
  console.log("Setting speed setting to :");
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  speedSetting = $(this).prop('id');
  console.log(speedSetting);
  });






