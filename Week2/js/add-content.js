var price=[10,5,1];;
var products=["Stamford T-shirt", " Stamford Notebook", "Stamford Wristband"];
var total=0;
var d = new Date();
var time = d.getHours();
    if (time < 12) 
      {
      var greetings=document.getElementById("greetings");
      greetings.innerHTML += "Good Morning";
      }
    else if (time > 12) 
      {
      var greetings=document.getElementById("greetings");
      greetings.innerHTML += "Good Afternoon";
      }
    else if (time > 18) 
      {
      var greetings=document.getElementById("greetings");
      greetings.innerHTML += "Good Evening";
      }
var productList=document.getElementById("productList");
productList.innerHTML += "<li>" +products[0] +":$" + price[0] +"</li>";
var productList=document.getElementById("productList");
productList.innerHTML += "<li>" +products[1] +":$" + price[1] +"</li>";
var productList=document.getElementById("productList");
productList.innerHTML += "<li>" +products[2] +":$" + price[2] +"</li>";
//Disply purchased product on the screen.
var discount=document.getElementById("discount");
discount.innerHTML += "20% Off";
total =16-((price[0]+price[1]+price[2])*0.20);
var totalPriceEle = document.getElementById("totalPrice");
totalPriceEle.textContent="$"+total;