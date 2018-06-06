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
                  <img src="images/photoproject.jpg">
                  <span class="card-title"></span>
                </div>
                <div class="card-content">
                  <p>Clothes-Up design orange shirt with button front</p>
                </div>
                <div class="card-action">
                  <a href="#"></a>
                </div>
              </a>  
          </div>
        </div>`
        }
};