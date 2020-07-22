	$(document).ready(function(){
		$(document).on("click","#add_new_6",function(e){
			e.preventDefault();
			var s6 = parseInt($('#myTable6 tr:last td:first').text());
			var n6_s6 = s6+1;
			$('#myTable6 tr:last').after('<tr id="rem1'+n6_s6+'"><td class="sn_no">'+n6_s6+'</td><td class="item"><input type="text" class="form-control" placeholder="Name & Address" name="name_address[]"  value="" required></td><td class="qty"><input type="number" class="form-control" name="phone[]" placeholder="Phone" value="" required></td><td class="rate"><input type="text" class="form-control" name="relation[]" placeholder="Relation" value="" required></td><td class="remove"><button type="submit" class="btn btn-danger btn-circle remove_input6" value="'+n6_s6+'">X</button></td></tr>');
		});
		$(document).on("click","#myTable6 .remove_input6",function() {
			var t6 = $(this).val();
			$("#rem1"+t6).remove();
		});
	});