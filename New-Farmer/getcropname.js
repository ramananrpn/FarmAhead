function check(b_id,prod_id)
                     {
                      
                      var prid = prod_id;
                      alert(prid);
                     var xmlhttp = new XMLHttpRequest();
                     xmlhttp.onreadystatechange=function()
                     {
                      if (this.readystate == 4 && this.status == 200) 
                       {
                        document.getElementById("title_name").innerHTML=this.responseText;

                        }

                     };
                     xmlhttp.open("GET","view_edit.php?btn_id="+b_id+"&pro_id="+prid,true);
                     xmlhttp.send();
                     }
                     