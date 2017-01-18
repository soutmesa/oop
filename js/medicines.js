// **************************** Insert **************************** 
$(document).off('click', '#submit[value="Save"]').on('click', '#submit[value="Save"]', function() {  
  var name = $('input[name="name"]').val();
  var qty = $('input[name="qty"]').val();

  $('#has-name').removeClass('has-error');
  $('#has-qty').removeClass('has-error');

  if(name.length <= 0){
    $('#has-name').addClass('has-error');
  }else if(qty.length <=0){
    $('#has-qty').addClass('has-error');
  }else{
    var url = 'http://localhost:8585/oop/action/medicines.php?act=';
    $.ajax({
      url: url + 'post&name=' + name + '&qty=' + qty,
      dataType: 'json',
      success: function(data) {
        var table = $('table.table.table-bordered.table-hover tbody');
        tr = '';
        tr += '<tr id="item-'+data.id+'"><td>'+data.id+'</td><td>'+data.name+'</td><td>'+data.qty+'</td>';
        tr += '<td align="center"><span><a href="#">';
        tr += '<i class="fa fa-pencil-square-o" aria-hidden="true" data-target="'+data.id+'"></i></a></span> ';
        tr += '| <span><a href="#"><i class="fa fa-trash-o" aria-hidden="true" data-target="'+data.id+'">';
        tr += '</i></a></span></td></tr>';
        table.append(tr);      
      }
    });
  }
});
// **************************** Edit **************************** 
$(document).off('click', '.fa-pencil-square-o').on('click', '.fa-pencil-square-o', function() {
  $('input[type="button"][name="button"]').attr('data-target', '');
  var id = $(this).attr('data-target');
  var url = 'http://localhost:8585/oop/action/medicines.php?act=';
  $.ajax({
    url: url + 'edit&id=' + id,
    dataType: 'json',
    success: function(data) {
      $('input[type="text"][name="name"]').val(data.name);
      $('input[type="number"][name="qty"]').val(data.qty);
      $('input[type="button"][name="button"]').attr('data-target', data.id).val('Update');
    }
  });
});
$(document).off('click', '#cancel').on('click', '#cancel', function(){
  $('#has-name').removeClass('has-error');
  $('#has-qty').removeClass('has-error');
  $('#submit').val('Save');
});
// **************************** Update **************************** 
$(document).off('click', 'input[type="button"][value="Update"]').on('click', 'input[type="button"][value="Update"]', function(){
  var name = $('input[type="text"][name="name"]').val();
  var qty = $('input[type="number"][name="qty"]').val();
  var id = $(this).attr('data-target');
  $('#has-name').removeClass('has-error');
  $('#has-qty').removeClass('has-error');
  if(name.length <= 0){
    $('#has-name').addClass('has-error');
  }else if(qty.length <0 && !qty.match(/[0-9]/g)){
    $('input[type="number"][name="qty"]').val('');
    $('#has-qty').addClass('has-error');
  }else{
    var url = 'http://localhost:8585/oop/action/medicines.php?act='+ 'put&name=' + name + '&qty=' + qty + '&id=' +id;
    var tr_id = '#item-' + id + ' > td:nth-child(1)';
    var tr_name = '#item-' + id + ' > td:nth-child(2)';
    var tr_qty = '#item-' + id + ' > td:nth-child(3)';
    $.ajax({
      url: url + 'put&name=' + name + '&qty=' + qty + '&id=' +id,
      dataType: 'json',
      success: function(data) {
        $(tr_id).text(data.id);
        $(tr_name).text(data.name);
        $(tr_qty).text(data.qty);
      }
    });
  }
});
// **************************** Delete **************************** 
$(document).off('click', 'fa-trash-o').on('click', '.fa-trash-o', function(){
  var id = $(this).attr('data-target');
  if(confirm('Are you sure?')){
    var url = 'http://localhost:8585/oop/action/medicines.php?act=';
    var item = '#item-' + id;
    $.ajax({
      url: url + 'delete&id=' +id,
      success: function(data) {
        if(data==='success'){
          $(item).remove();
        }  
      }
    });
  }
});
// **************************** Select Datas **************************** 
$(document).ready(function(){
  var url = 'http://localhost:8585/oop/action/medicines.php?act=';
  $.ajax({
    url: url + 'get',
    dataType: 'json',
    success: function(data) {
      var table = $('table.table.table-bordered.table-hover tbody');
      tr = '';
      for (i = 0; i < data.length; i++){
        tr += '<tr id="item-'+data[i].id+'"><td>'+data[i].id+'</td><td>'+data[i].name+'</td><td>'+data[i].qty+'</td>';
        tr += '<td align="center"><span><a href="#">';
        tr += '<i class="fa fa-pencil-square-o" aria-hidden="true" data-target="'+data[i].id+'"></i></a></span> ';
        tr += '| <span><a href="#"><i class="fa fa-trash-o" aria-hidden="true" data-target="'+data[i].id+'">';
        tr += '</i></a></span></td></tr>';
      }
      table.append(tr);
    }
  });
});