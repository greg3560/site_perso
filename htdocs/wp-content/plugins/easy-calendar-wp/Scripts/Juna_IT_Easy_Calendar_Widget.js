window.onload=function(){
	function Calendar1(id, year, month) {

		var Dlast = new Date(year,month+1,0).getDate(),
		D = new Date(year,month,Dlast),
		DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
		DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
		calendar = "<tr>",
		month=["January","February","March","April","May","June","July","August","September","October","November","December"];
		if (DNfirst != 0) 
		{
		  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
		}
		else
		{
		  for(var  i = 0; i < 6; i++) calendar += '<td>';
		}
		for(var  i = 1; i <= Dlast; i++) 
		{
		  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) 
		  {
		    calendar += '<td class="without today day'+i+'" id="'+D.getFullYear()+'%$%'+parseInt(parseInt(D.getMonth())+1)+'%$%'+i+'">' + i;
		  }
		  else
		  {
		  	if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0)
		  	{
		    	calendar += '<td class="without day'+i+' sunday1" id="'+D.getFullYear()+'%$%'+parseInt(parseInt(D.getMonth())+1)+'%$%'+i+'">' + i;
		  	}
		  	else if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 6)
		  	{
		    	calendar += '<td class="without day'+i+' saturday1" id="'+D.getFullYear()+'%$%'+parseInt(parseInt(D.getMonth())+1)+'%$%'+i+'">' + i;
		  	}
		  	else
		  	{
		    	calendar += '<td class="without day'+i+'" id="'+D.getFullYear()+'%$%'+parseInt(parseInt(D.getMonth())+1)+'%$%'+i+'">' + i;
		  	}
		  }
		  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) 
		  {
		    calendar += "<tr>";
		  } 
		}

		jQuery('#hidden_text').val(Dlast);
		for(var  i = DNlast; i < 7; i++) calendar += "<td>&nbsp;";
		document.querySelector('#'+id+' tbody').innerHTML = calendar;
		document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
		if (document.querySelectorAll('#'+id+' tbody tr').length < 6)  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
		{  
		    document.querySelector('#'+id+' tbody').innerHTML += "<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;";
		}
	}
	// переключатель минус месяц
		document.querySelector('.prev1').onclick = function() {
		  Calendar1("calendar1", document.querySelector('#month1').dataset.year, parseFloat(document.querySelector('#month1').dataset.month)-1);
		}
	// переключатель плюс месяц
		document.querySelector('.next1').onclick = function() {
		  Calendar1("calendar1", document.querySelector('#month1').dataset.year, parseFloat(document.querySelector('#month1').dataset.month)+1);
		}
	Calendar1("calendar1",new Date().getFullYear(),new Date().getMonth());
}