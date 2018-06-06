$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.slider').slider();
  $('.timepicker').timepicker();
  $('.datepicker').datepicker();
  $('.modal').modal();
  $('select').formSelect();
  $('.fixed-action-btn').floatingActionButton({
    toolbarEnabled: true
  })
  addItems();
});

var toAdd = document.getElementById('addItems');
function addItems(){
      if (!toAdd)
        return;
      
        for(let i = 0 ; i < 6; i++)
        {
          toAdd.innerHTML += `<div class="col s12 m6 l4">
          <div class="card hoverable">
            <a href="item.html">
              <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </a>  
          </div>
        </div>`
        }
};