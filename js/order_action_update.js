
    
    
    var tax ;
    var data_order_product;
    var quantity;
    var count_array ;
    var index;
    var qty;
    function count(count_array)
    {
            var count_table = [];
            for(i = 0 ;i<count_array; i++)
            {
                count_table[i]=i;
            } 
            return count_table;
    }
    
    function qunatity(count_array,data_order_product)
    {
            
                var base_price;
                var count;
                var table = [];
                var new_count = [];
                //var new = 5;
                var c = 0;
                var index= 0;
                var count_add_more = 0;
                var amout = [];
               
               

                some_tax = 0;
                var base_price = [];
                var a =1;
                for(var index=0; index < data_order_product.length-2;index++)
                {
                        base_price[index] = data_order_product[index]['price']*$('.quantity'+index).val();
                        a++;
                        
                }
                some_price = 0;
               
                for(index= 0; index< base_price.length; index++)
                {
                        some_price = some_price + base_price[index] ;
                }
                console.log(some_price);
                
                var final_amout = some_price - data_order_product[a];
                console.log(data_order_product);
                console.log(data_order_product[3]);
                
                console.log(final_amout);
                $('#final_amout').val(final_amout);
                $('#totale_amout').val(final_amout);
               

                for(count = 0; count < count_array; count++)
                {
                       
                        table[count] = $('.quantity'+count).change(function(){
                        var qty ;
                        
                        var id = parseInt($(this).attr("id")); 
                        var first_price = $('.prix'+id).val();
                        
                        var price = $('.quantity'+id).val()*data_order_product[id]['price'];
                        $('.prix'+id).val(price);
                        price = parseFloat($('.prix'+id).val());

                        if(price-first_price<0)
                        {
                               $('#remove_amout').val(parseFloat($('#remove_amout').val())+Math.abs(price-first_price));
                               
                                
                        }else
                        {
                                $('#totale_amout').val(parseFloat($('#totale_amout').val()) +Math.abs(price-first_price));
                        }
                        
                        
                                console.log(parseFloat(parseFloat($('#totale_amout').val()) - $('#remove_amout').val()));
                                $('#final_amout').val((parseFloat(parseFloat($('#totale_amout').val()) - $('#remove_amout').val())));
                               
                        
                       });
                }
                return table;
                
       
    }
 
    

