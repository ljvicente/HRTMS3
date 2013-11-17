function sameadd(form){
          if(form.sameashome.checked){
                form.provincial_address.value = form.present_address.value;
                form.provincial_city.value = form.present_city.value;
                form.provincial_state.value = form.present_state.value;
                /*form.Mailing_City.value = form.Billing_City.value;
                form.Mailing_Zip.value = form.Billing_Zip.value;
               
                if(form.Billing_State.type == "select-one"){
                    var bStateIdx = form.Billing_State.selectedIndex;
                    form.Mailing_State.options[bStateIdx].selected = true;
                }
                else{
                    form.Mailing_State.value = form.Billing_State.value;
                }*/

                

                }
                else{
                     form.provincial_address.value = "";
                     form.provincial_city.value = "";
                     form.provincial_state.value = "";
                     /*form.Mailing_City.value = "";
                     if(form.Mailing_State.type == "select-one"){
                          form.Mailing_State.options[0].selected = true;
                     }
                     else{
                          form.Mailing_State.value = "";
                     }
                     form.Mailing_City.value = "";
                     form.Mailing_Zip.value = "";*/
                }
          }
        function sameadd2(form){
          if(form.sameashome2.checked){
              form.mailing_address.value = form.present_address.value;
              form.mailing_city.value = form.present_city.value;
              form.mailing_state.value = form.present_state.value;
              /*form.Mailing_City.value = form.Billing_City.value;
              form.Mailing_Zip.value = form.Billing_Zip.value;
                   if(form.Billing_State.type == "select-one"){
                        var bStateIdx = form.Billing_State.selectedIndex;
                        form.Mailing_State.options[bStateIdx].selected = true;
                   }
                   else{
                        form.Mailing_State.value = form.Billing_State.value;
                   }*/
              }
              else{
                   form.mailing_address.value = "";
                   form.mailing_city.value = "";
                   form.mailing_state.value = "";
                   /*form.Mailing_City.value = "";
                   if(form.Mailing_State.type == "select-one"){
                        form.Mailing_State.options[0].selected = true;
                   }
                   else{
                        form.Mailing_State.value = "";
                   }
                   form.Mailing_City.value = "";
                   form.Mailing_Zip.value = "";*/
              }
            }
        function sameaddfather(form){
          if(form.sameasfather.checked){
                add = form.present_address.value;
                city = form.present_city.value;
                prov = form.present_state.value;
                fulladd = add.concat(", ",city,", ",prov);
                form.father_address.value = fulladd;

                }
                else{
                     form.father_address.value = "";
                                         
                }
          }
        function sameaddmother(form){
          if(form.sameasmother.checked){
                    form.mother_address.value = form.father_address.value;

                }
                else{
                     form.mother_address.value = "";
                                         
                }
          }