function ranges()
{
var data=document.getElementById("rangeinput");
var input=document.getElementById("input");
input.value=data.value;
var card=document.getElementsByClassName("hidden");
var cards=document.getElementsByClassName("card");
var value=data.value;
var values=parseInt(value);
for(i=0;i<cards.length;i++)
{
    var string=card[i].getAttribute("value");
    var price=parseInt(string);
    if(values<price)
    {
        cards[i].style.display="none";
    }
    else
    {
        cards[i].style.display="block";
    }
}
}


function range()
{
var data=document.getElementById("rangeinput");
var input=document.getElementById("input");
data.value=input.value;
var card=document.getElementsByClassName("hidden");
var cards=document.getElementsByClassName("card");
var value=input.value;
var values=parseInt(value);
for(i=0;i<cards.length;i++)
{
    var string=card[i].getAttribute("value");
    var price=parseInt(string);
    if(values<price)
    {
        cards[i].style.display="none";
    }
    else
    {
        cards[i].style.display="block";
    }
}
}


function display(id)
{
    if(id.checked)
    {
            if(id.value=="men")
            {
                var data=document.getElementById("men");
                data.attributes.getNamedItem("class").value="col-12 col-md-3";
                var value=document.getElementsByClassName("women");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
                var value=document.getElementsByClassName("mobile");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
            }
            else if(id.value=="women")
            {
                var data=document.getElementById("women");
                data.attributes.getNamedItem("class").value="col-12 col-md-2";
                var value=document.getElementsByClassName("men");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
                var value=document.getElementsByClassName("mobile");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
            }
            else
            {
                var data=document.getElementById("mobile");
                data.attributes.getNamedItem("class").value="col-12 col-md-2";
                var value=document.getElementsByClassName("women");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
                var value=document.getElementsByClassName("men");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="none";
                }
            }
    }
    else
    {
        if(id.value=="men")
        {
          var data=document.getElementById("men");
          data.attributes.getNamedItem("class").value="col-12 col-md-2 d-none";
          var value=document.getElementsByClassName("women");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
                var value=document.getElementsByClassName("mobile");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
        }
        else if(id.value=="women")
            {
                var data=document.getElementById("women");
                data.attributes.getNamedItem("class").value="col-12 col-md-2 d-none";
                var value=document.getElementsByClassName("men");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
                var value=document.getElementsByClassName("mobile");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
            }
            else
            {
                var data=document.getElementById("mobile");
                data.attributes.getNamedItem("class").value="col-12 col-md-2 d-none";
                var value=document.getElementsByClassName("women");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
                var value=document.getElementsByClassName("men");
                for(i=0;i<value.length;i++)
                {
                value[i].style.display="block";
                }
            }
    }
    
}


$(document).ready(function(){
 $("#myinput").on("keyup",function(){
   var value=$(this).val().toLowerCase();
   if(value=="")
   {
       location.reload(true);
   }
   $(".card*").filter(function(){
       $(this).toggle($(this).text().toLowerCase().indexOf(value)>1);
   });
 });
});
