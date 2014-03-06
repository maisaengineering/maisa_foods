function get_price(item_selected){
    /*chicken masala price*/
    if (item_selected == "10gmquantity")
    {
      var x = document.getElementById('10gm')
      x.value = "4"
      var quantity = document.getElementById("10gmquantity").value
      document.getElementById("price1").value = x.value * quantity;
    }
    else if(item_selected == "25gmquantity")
    {
      var x = document.getElementById('25gm')
      x.value = "15"
      var quantity = document.getElementById("25gmquantity").value
      document.getElementById("price2").value = x.value * quantity;
    }
    else if(item_selected == "50gmquantity")
    {
      var x = document.getElementById('50gm')
      x.value = "27"
      var quantity = document.getElementById("50gmquantity").value
      document.getElementById("price3").value = x.value * quantity;
    }
    /*chicken 65/kabab masala price*/
    else if(item_selected == "25gmckquantity")
    {
      var x = document.getElementById('25gmck')
      x.value = "12"
      var quantity = document.getElementById("25gmckquantity").value
      document.getElementById("price4").value = x.value * quantity;
    }
    else if(item_selected == "50gmckquantity")
    {
      var x = document.getElementById('50gmck')
      x.value = "20"
      var quantity = document.getElementById("50gmckquantity").value
      document.getElementById("price5").value = x.value * quantity;
    }
    /*Instant chicken masala price*/
    else if(item_selected == "50gmciquantity")
    {
      var x = document.getElementById('50gmci')
      x.value = "25"
      var quantity = document.getElementById("50gmciquantity").value
      document.getElementById("price6").value = x.value * quantity;
    }
    /*chicken curry & fry powder*/
    else if(item_selected == "25gmccfquantity")
    {
      var x = document.getElementById('25gmccf')
      x.value = "14"
      var quantity = document.getElementById("25gmccfquantity").value
      document.getElementById("price7").value = x.value * quantity;
    }
    else if(item_selected == "50gmccfquantity")
    {
      var x = document.getElementById('50gmccf')
      x.value = "27"
      var quantity = document.getElementById("50gmccfquantity").value
      document.getElementById("price8").value = x.value * quantity;
    }
     /*mutton masala price*/
    else if(item_selected == "25gmmmquantity")
    {
      var x = document.getElementById('25gmmm')
      x.value = "17"
      var quantity = document.getElementById("25gmmmquantity").value
      document.getElementById("price9").value = x.value * quantity;
    }
    else if(item_selected == "50gmmmquantity")
    {
      var x = document.getElementById('50gmmm')
      x.value = "30"
      var quantity = document.getElementById("50gmmmquantity").value
      document.getElementById("price10").value = x.value * quantity;
    }
    /*Biryani masala price*/
    else if(item_selected == "50gmbmquantity")
    {
      var x = document.getElementById('50gmbm')
      x.value = "27"
      var quantity = document.getElementById("50gmbmquantity").value
      document.getElementById("price11").value = x.value * quantity;
    }
    /*Garam masala price*/
    else if(item_selected == "25gmgmquantity")
    {
      var x = document.getElementById('25gmgm')
      x.value = "14"
      var quantity = document.getElementById("25gmgmquantity").value
      document.getElementById("price12").value = x.value * quantity;
    }
    else if(item_selected == "50gmgmquantity")
    {
      var x = document.getElementById('50gmgm')
      x.value = "27"
      var quantity = document.getElementById("50gmgmquantity").value
      document.getElementById("price13").value = x.value * quantity;
    }
    /*sambar powder price*/
    else if(item_selected == "25gmspquantity")
    {
      var x = document.getElementById('25gmsp')
      x.value = "12"
      var quantity = document.getElementById("25gmspquantity").value
      document.getElementById("price14").value = x.value * quantity;
    }
    else if(item_selected == "50gmspquantity")
    {
      var x = document.getElementById('50gmsp')
      x.value = "20"
      var quantity = document.getElementById("50gmspquantity").value
      document.getElementById("price15").value = x.value * quantity;
    }
    /*rasam powder price*/
    else if(item_selected == "25gmrpquantity")
    {
      var x = document.getElementById('25gmrp')
      x.value = "12"
      var quantity = document.getElementById("25gmrpquantity").value
      document.getElementById("price16").value = x.value * quantity;
    }
    else if(item_selected == "50gmrpquantity")
    {
      var x = document.getElementById('50gmrp')
      x.value = "20"
      var quantity = document.getElementById("50gmrpquantity").value
      document.getElementById("price17").value = x.value * quantity;
    }
    /*ginger garlic past price*/
    else if(item_selected == "250gmggpquantity")
    {
      var x = document.getElementById('250ggp')
      x.value = "50"
      var quantity = document.getElementById("250gmggpquantity").value
      document.getElementById("price18").value = x.value * quantity;
    }
    /*total price*/
    var total = 0;

    for(i=1; i < 19; i++)
    {
        single_price = document.getElementById("price"+ i).value;
        if (single_price)
        {
          
          total = parseInt(total) +  parseInt(single_price);   
        }
      if (single_price!=0)
        {
          document.getElementById("check" + i).checked=true
         
        }
        else{
          document.getElementById("check" + i).checked=false
        }
    }
    document.getElementById("totalprice").value = parseInt(total);
  }